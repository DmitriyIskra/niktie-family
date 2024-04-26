function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}
function deleteAllCookies() {
    const cookies = document.cookie.split(";");

    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const eqPos = cookie.indexOf("=");
        const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}
function CurrentAuthorizeCheck(){
    let a = null
    console.log(getCookie("niktea_session"))

    cookie_auth = getCookie("niktea_session")
    
    

    var settings = {
        "url": "/api/auth/checker",
        "method": "GET",
        "timeout": 0,
        "async": false
    };

    $.ajax(settings).done(function (response) {
        a = response;
    });
    return a;
}
function authorize() {
    const formSignIn = document.getElementById('signinForm');
    formSignIn.addEventListener('submit', SendAuth);

    async function SendAuth(event) { 
        event.preventDefault();
        const name = formSignIn.querySelector('[name="email"]') //получаем поле name
        const password = formSignIn.querySelector('[name="password"]') //получаем поле age

        if(!name.value || !password.value) {
          if(!name.value) {
            name.classList.add('invalid');
            name.nextElementSibling.textContent = 'Вы указали некорректную почту';
            name.nextElementSibling.style = 'color: #FFC0C0;';
            name.style = 'border: 1px solid #FFC0C0;';
          } else if (name.value && name.matches('.invalid')) {
            name.classList.remove('invalid');
            name.nextElementSibling.textContent = 'Укажите почту, набранную при регистрации';
            name.nextElementSibling.style = 'color: #ffffff;';
            name.style = 'border: 0;';
          }


          if(!password.value) {
            name.classList.add('invalid');
            password.nextElementSibling.textContent = 'Вы указали неверный код или вышло время ожидания';
            password.nextElementSibling.style = 'color: #FFC0C0;';
            name.style = 'border: 1px solid #FFC0C0;';
          } else if (password.value && password.matches('.invalid')) {
            password.classList.remove('invalid');
            password.nextElementSibling.textContent = 'Введите, пожалуйста, код из E-mail';
            password.nextElementSibling.style = 'color: #ffffff;';
            password.style = 'border: 0;';
          }

          return;
        }

        data = JSON.stringify({
            "email": name.value,
            "password": password.value
        })

        console.log(data)
        // var settings = {
        //     "url": "/api/auth/login",
        //     "method": "POST",
        //     "timeout": 0,
        //     "headers": {
        //         "Content-Type": "application/json",
        //     },
        //     "data": data
        // };

        const res = await fetch("/api/auth/login", {
          method: 'POST',
          headers: {
            "Content-Type": "application/json",
          },
          body: data
        })

        const result = await res.json()

        if(result.is_auth) {
          console.log(document.cookie = `niktea_session=${result.auth_token}`)
          window.location.href = "/account";
        } else {
          name.nextElementSibling.textContent = 'Не правильный логин или пароль';
          name.nextElementSibling.style = 'color: #FFC0C0; font-weight: 700;';

          password.nextElementSibling.textContent = 'Не правильный логин или пароль';
          password.nextElementSibling.style = 'color: #FFC0C0; font-weight: 700;';
        }

        // $.ajax(settings).done(function (response) {
        //   console.log(document.cookie = `niktea_session=${response.auth_token}`)
        //   window.location.href = "http://niktea/account";
        //   console.log(response);

        // });

    }
}


function registration() {
    const formSignIn = document.getElementById('registerprovider');
    const check = formSignIn.querySelector('[name="check"]'); //получаем поле age
    // результат валидации
    let validateVoucher = null;
    // находим label для вывода результата загрузки
    const el = check.parentElement.previousElementSibling;

    // событие на загрузку чека
    check.addEventListener('change', (e) => {

        const regExpFile = /(\/jpg|\/jpeg|\/bmp|\/png|\/gif|\/svg|\/webp)$/g;
        const typeRes = regExpFile.test(e.target.files[0].type);
        const sizeRes = e.target.files[0].size <= 104857600;

        validateVoucher = typeRes && sizeRes ? true : false;


        if(!validateVoucher) {
          check.classList.add('invalid');
          el.textContent = 'Чек должен быть изображением и не превышать 100МБ';
          el.style = 'color: #FFC0C0;';
        } else {
          check.classList.remove('invalid');
          el.textContent = 'Ваш чек успешно загружен';
          el.style = 'color: #ffffff;';
        }

    })

    formSignIn.addEventListener('submit', SendRegister);

    function SendRegister(event) {
        event.preventDefault();

        const name = formSignIn.querySelector('[name="name"]'), //получаем поле name
            second_name = formSignIn.querySelector('[name="second_name"]'), //получаем поле name
            patronymic = formSignIn.querySelector('[name="patronymic"]'), //получаем поле patronymic
            phone = formSignIn.querySelector('[name="phone"]'), //получаем поле phone
            email = formSignIn.querySelector('[name="email"]'), //получаем поле email

            conditions = formSignIn.querySelector('.form-check-input')


        let validateEmail = null;

        if(email.value) {
          validateEmail = /^\S+@\S+\.\S+$/g.test(email.value);
        }

        if(!name.value || !second_name.value || !patronymic.value
          || !phone.value || !email.value || !check.files[0] ||
           !conditions.checked || !validateEmail || !check.files[0]) {
            // если все верно то страница перезагрузится и ничего менять не надо,
            // все само сбросится, иначе если хоть одно условие не верно,
            // а какие то верно то убираем ошибку на верных
            if(!name.value) {
              name.classList.add('invalid');
              name.nextElementSibling.textContent = 'Заполните, пожалуйста, имя';
              name.nextElementSibling.style = 'color: #FFC0C0;';
              name.style = 'border: 1px solid #FFC0C0;';
            } else if (name.value && name.matches('.invalid')) {
              name.classList.remove('invalid');
              name.nextElementSibling.textContent = 'имя';
              name.nextElementSibling.style = 'color: #ffffff;';
              name.style = 'border: 0;';
            }

            if(!second_name.value) {
              second_name.classList.add('invalid');
              second_name.nextElementSibling.textContent = 'Заполните, пожалуйста, фамилию';
              second_name.nextElementSibling.style = 'color: #FFC0C0;';
              second_name.style = 'border: 1px solid #FFC0C0;';
            } else if (second_name.value && second_name.matches('.invalid')) {
              second_name.classList.remove('invalid');
              second_name.nextElementSibling.textContent = 'имя';
              second_name.nextElementSibling.style = 'color: #ffffff;';
              second_name.style = 'border: 0;';
            }
 
            if(!patronymic.value) {
              patronymic.classList.add('invalid');
              patronymic.nextElementSibling.textContent = 'Заполните, пожалуйста, отчество';
              patronymic.nextElementSibling.style = 'color: #FFC0C0;';
              patronymic.style = 'border: 1px solid #FFC0C0;';
            } else if (patronymic.value && patronymic.matches('.invalid')) {
              patronymic.classList.remove('invalid');
              patronymic.nextElementSibling.textContent = 'имя';
              patronymic.nextElementSibling.style = 'color: #ffffff;';
              patronymic.style = 'border: 0;';
            }

            if(!phone.value) {
              phone.classList.add('invalid');
              phone.nextElementSibling.textContent = 'Некорректный номер телефона';
              phone.nextElementSibling.style = 'color: #FFC0C0;';
              phone.style = 'border: 1px solid #FFC0C0;';
            } else if (phone.value && phone.matches('.invalid')) {
              phone.classList.remove('invalid');
              phone.nextElementSibling.textContent = 'имя';
              phone.nextElementSibling.style = 'color: #ffffff;';
              phone.style = 'border: 0;';
            }

            if(!email.value || (email.value && !validateEmail)) {
              email.classList.add('invalid');
              email.nextElementSibling.textContent = 'Некорректная электронная почта';
              email.nextElementSibling.style = 'color: #FFC0C0;';
              email.style = 'border: 1px solid #FFC0C0;';
            } else if (email.value && validateEmail) {
              email.classList.remove('invalid');
              email.nextElementSibling.textContent = 'имя';
              email.nextElementSibling.style = 'color: #ffffff;';
              email.style = 'border: 0;';
            }

            if(!check.files[0] || (check.files[0] && !validateVoucher)) {
              check.classList.add('invalid');
              const el = check.parentElement.previousElementSibling;
              el.textContent = 'Извините, но без чека вы не можете принять участие в акции';
              el.style = 'color: #FFC0C0;';
            }

            if(!conditions.checked) {
              conditions.classList.add('invalid-conditions');
              conditions.style = `border: 2px solid #FFC0C0;`;
            } else if(conditions.checked && conditions.matches('.invalid-conditions')) {
              conditions.classList.remove('invalid-conditions');
              conditions.style = `border: 0;`;
            }

            return;
          }

        var formdata = new FormData();
        formdata.append("name", name.value);
        formdata.append("second_name", second_name.value);
        formdata.append("patronymic", patronymic.value);
        formdata.append("phone", phone.value);
        formdata.append("email", email.value);
        formdata.append("check", check.files[0]);

        var settings = {
            "url": "/api/auth/register",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": formdata
        };

        $.ajax(settings).done(function (response) {
            auth_token = JSON.parse(response).auth_token
            console.log(document.cookie = `niktea_session=${auth_token}`)
            window.location.href = "/account";
        });
    }
}
function logout() {
    const logOut = document.querySelector('.log-out__button');

    logOut.addEventListener('click', logouter);

    function logouter() {
        var settings = {
            "url": "/api/auth/logout",
            "method": "GET",
            "timeout": 0,
        };

        $.ajax(settings).done(function (response) {
            console.log(response)
            if(response.is_auth === true) {
                deleteAllCookies()
                window.location.href = "/";
            }
        });
    }
}
async function accountInfo() {
    const requestOptions = {
        method: 'GET',
        redirect: 'follow'
    };

    return await fetch("/api/account/info", requestOptions)
}
// отрисовка данных о пользователе на всей странице личный кабинет
function fillAccountData(data) {
    const accountLastname = document.querySelector('.account__lastname');
    const accountFirstname = document.querySelector('.account__firstname');
    const accountPatronymic = document.querySelector('.account__patronymic');
    const accountPhone = document.querySelector('.account__phone');
    const accountMail = document.querySelector('.account__mail');
   

    // Заполнение данных о пользователе
    accountLastname.textContent = data.user.second_name;
    accountFirstname.textContent = data.user.name;
    accountPatronymic.textContent = data.user.patronymic;
    accountPhone.textContent = data.user.phone;
    accountMail.textContent = data.user.email;
}

function controllMobileMenu() {
  // mobile menu работает от класса show 
  const navBar = document.querySelector('.navbar-collapse');

  document.addEventListener('click', (e) => {
    if(!e.target.matches('.navbar-navq')) {
      navBar.classList.remove('show');
    }
  })
}

// контроль наличия атрибутов позволяющих вызвать модалку
function controllGetModal(auth) {
  // const reg = document.querySelector('.header__item_registration');  --------  УДАЛИТЬ
  const acc = document.querySelector('.header__item_account');
  const accM = document.querySelector('.account-logo-mobile');

  if(auth) {
    // reg.removeAttribute('data-bs-target', '#exampleModalToggle');  --------  УДАЛИТЬ
    // reg.removeAttribute('data-bs-toggle', 'modal');                  --------  УДАЛИТЬ

    acc.removeAttribute('data-bs-target', '#exampleModalToggle');
    acc.removeAttribute('data-bs-toggle', 'modal');

    accM.removeAttribute('data-bs-target', '#exampleModalToggle');
    accM.removeAttribute('data-bs-toggle', 'modal');
  } 
}

$( document ).ready(function() {
    authorize();
    registration();
    controllMobileMenu();
})
