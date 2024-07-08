export default class ControllMoreDetailed {
    constructor(d) {
        this.d = d;

        this.click = this.click.bind(this);
    }

    init() {
        this.registerEvents();
    }

    registerEvents() {
        this.d.element.addEventListener('click', this.click);
    }

    click(e) {
        // открыть pop-up
        if(e.target.closest('.more-detailed__button-back-modal-on')) {
            scrollTo({
                top: 100,
                left: 100,
                behavior: "smooth",
            });
            this.d.showClosePopUp();
        }
        
        // закрыть pop-up
        if(e.target.closest('.more-detailed__close')) {
            this.d.showClosePopUp();
        }
        
        // переключаем окна с информацией о подарках и табы
        if(e.target.closest('.more-detailed__tabs-item')) {
            this.d.changeWindowInfo();
        }

        // переход в личный кабинет или открытие модалки входа 
        if(e.target.closest('.more-detailed__to-account')) {
            e.preventDefault();

            this.d.showClosePopUp();

            // определяем десктоп или мобилка отменяем стандартное
            // поведение чтоб не прокручивалось и эмулируем клик
            const toAccountMobile = document.querySelector('.account-logo-mobile');
            if(getComputedStyle(toAccountMobile).display !== 'block') {
                const toAccountDesctop = document.querySelector('#lkbuttonpc');
                toAccountDesctop.addEventListener('click', (e) => e.preventDefault(),
                 {once : true});

                toAccountDesctop.click();
                return;
            }
            toAccountMobile.addEventListener('click', (e) => e.preventDefault(),
             {once : true});

            toAccountMobile.click();
        }
    }
}