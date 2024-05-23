<!DOCTYPE html>
<html lang="ru">

<head>
    @include('template_parts.header_css_js')
    <title>Ваш личный кабинет на промостранице бренда Niktea</title>
    <meta name="description" content="Здесь вы можете выиграть путешествие, главные или чайные призы."/>
</head>

<body data-variant="user-account">

<body data-variant="user-account">

<header>
    <div class="header-wrapper header-wrapper--white">
        @include('template_parts.header_menu')
    </div>
</header> 
<script>

    
    // если пользователь не авторизован, редирект на главную
    if (auther.is_auth === false) {
        window.location.href = "/";
    }

    // каждый раз при загрузке страницы вызывается
    // для заполнения данных о пользователе
    (async () => {
        const responce = await accountInfo()
        const result = await responce.json()

        // разделяем потому что иногда нужно получить данные
        // без отрисовки данных на всей странице
        document.addEventListener('DOMContentLoaded', fillAccountData(result))
    })()
</script>


@include('template_parts.modal')

<main class="main">



    <div class="user-account__container">

        <section class="user-account">

            <div class="account-form">
                <div class="wr-exit">
                    <div class="wr-button-exit">
                        <button class="log-out__button">ВЫХОД</button>
                    </div>
                </div>
                <div class="user_wr-title">
                    <h1>Личный кабинет</h1>
                    <div class="user_prezent-icon"></div>    
                </div>
                <img src="https://s405vlx.storage.yandex.net/rdisk/5e24b66a91af28691a4dace47fde995288c3698cd09f531c0a059eb4960c54bc/66488cfd/0JuFFzj6vEKtTl6asCetFak9aTFJ5XBPIGOXGd8vM29sb-Gd7hLFuZySE2ykhPgH8El9YsVXjg7Okld9ggp6mA==?uid=858722928&filename=200.jpg&disposition=inline&hash=&limit=0&content_type=image%2Fjpeg&owner_uid=858722928&fsize=5465&hid=0490bac22f43f1689eef7b9106daf3b7&media_type=image&tknv=v2&etag=9b5e7d12bd2dcdfb26b8cfabfe518ef6&ts=618b8894f7940&s=4c65a6456e0a4af19244edb7f85c18aca5ea47a69d75f08d2f3c8e684f09c813&pb=U2FsdGVkX1-zhClRoIqBJvZCNknmt_v9bcJgSylt2xTalgLTOeTlPuvQ_8lNBiPjkfETdM0I-KdO4MK2m2h1Y21xutx-3yp__pXPsRWEo1Q" height="100" width="100" alt="">
                <div class="user__wr-balance">
                    <p>Ваш баланс: <span class="user__balance">50</span>  баллов</p>
                </div>

                <div class="user__data">
                    <div class="data-item green--border account__lastname"></div>
                    <div class="data-item btn-gradient-2 account__firstname"></div>
                    <div class="data-item account__patronymic"></div>
                    <div class="data-item account__phone"></div>
                    <div class="data-item account__mail"></div>
                </div>

                <div class="up-cheque">
                    <div class="up-cheque__notice up-cheque__notice_success">Ваш чек успешно загружен</div>
                    <div class="up-cheque__notice up-cheque__notice_fail">Не удалось загрузить чек, попробуйте еще раз</div>
                    <div class="up-cheque__notice up-cheque__notice_no-valid">Файл должен быть изображением и не превышать 10мб</div>
                    <div class="up-cheque__notice up-cheque__notice_no-limit">За один раз Вы можете выбрать не более 10 чеков</div>

                    <form class="up-cheque__wr-form" name="form-cheque">
                            <div class="up-cheque__upload-cheque">
                                <label>
                                    <input type="file" name="file" id="up-cheque__upload-cheque" multiple accept="image/*">
                                </label>
                                <div class="up-cheque__button-back" for="#up-cheque__upload-cheque">
                                    <button type="button">загрузить фото чека</button>
                                </div>
                            </div> 
                            <div class="up-cheque__wr-submit">
                                <div class="up-cheque__button-back up-cheque__button-back_submit">
                                    <button type="submit">отправить</button>
                                </div>
                            </div>
                            <ul class="up-cheque__preview-list">
                                <!-- Для превью загруженных чеков -->
                            </ul>
                    </form>
                    
                    <div class="up-cheque__instruction">
                        <p>Убедитесь, что Ваш чек хорошо читается, а также он не должен превышать 10Мб и файл должен быть изображением.</p>
                        <p>Баллы будут начислены после проверки чека. В случае если ваш чек некорректен, баллы не будут начислены!</p>
                    </div>
                </div>

                <div class="exchange__wrapper">
                    <div class="exchange__wr-title">
                        <h2 class="exchange__title">Обмен баллов</h2>
                    </div>  

                    <div class="exchange__wr-extraction">
                        <ul class="exchange__extraction-list">
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>10 баллов</span> одиннадцатая пачка в подарок
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>20 баллов</span> чайный набор (чай+кружка)
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>40 баллов</span> годовой запас чая
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>60 баллов</span> термокружка Bork
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>80 баллов</span> сертификат на электронику
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>100 баллов</span> Яндекс станция 2, с Алисой
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>125 баллов</span> чайник Bork
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>150 баллов</span> Наушники Apple AirPods Pro
                                    </p>
                                </div>
                                <div class="exchange__extraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            <li class="exchange__extraction-item">
                                <div class="exchange__extraction-descr">
                                    <div class="exchange__extraction-img">
                                        <img src="img/content/exchange__prize-exemple.png" alt="extraction">
                                    </div>
                                    <p class="exchange__extraction-text">
                                        <span>200 баллов</span> Фен Dyson Supersonic (hd07)
                                    </p>
                                </div>
                                <div class="exchange__e=xtraction-wr-button">
                                    <div class="exchange__extraction-button-back">
                                        <button type="button">
                                            <span class="exchange__extraction-button-text">обменять</span>
                                        </button>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>

                        <div class="exchange__wr-price">
                            <p class="exchange__price">1 пачка чая = 1 балл</p>
                        </div>
                    </div>
                </div>


                <div class="code__group">      

                    <div class="slider__group">

                        <h1>Ваши чеки</h1>

                        <div class="check__slider-container">
                            <div class="slider-button-prev account__slider-check-arrow" tabindex="0" role="button"></div>

                            <div class="swiper checkSlider account__slider-check">

                                <div class="swiper-wrapper checkSlides account__slider-check-wrapper">
                                    
                                </div>

                            </div> 

                            <div class="slider-button-next account__slider-check-arrow account__slider-check-arrow_active" tabindex="0" role="button"></div>

                        </div>
                        <div class="pagination__container">
                            <div class="pagination-prev account__pagination-arrow pagination-prev--check">
                                <img src="{{ asset('img/icons/pagination-arrow-left.svg') }}" class="account__pag-arrow-img" alt="pagination-arrow-left">
                            </div>

                            <div class="pagination">
                                <div class="account__pagination-list"></div>
                            </div>

                            <div class="pagination-next account__pagination-arrow pagination-next--check">
                                <img src="{{ asset('img/icons/pagination-arrow-right.svg') }}" class="account__pag-arrow-img" alt="pagination-arrow-right">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
    </div>


    <!-- 
                    -- == ИНСТРУКЦИЯ == --
       --- === МАЛЕНЬКИЕ ИНФОРМАЦИОННЫЕ МОДАЛКИ === --- 
                 для класса "api-res__wrapper"

        api-res__wrapper_active - активация api-res
        --------------------------------------------
        api-res__lottery - Вы стали участником розыгрыша!
        api-res__no-enough - Для этого заказа у Вас не хватает баллов.
        api-res__success - Ваш запрос успешно отправлен. Менеджер с Вами свяжется.
        api-res__fail-send - Проблема с соединением, попробуйте еще.
    -->
    <div class="api-res__wrapper">
        <div class="api-res__window">
            <div class="api-res__content">
                <div class="api-res__content-icon"></div>
                <div class="api-res__content-wr-text">
                    <p class="api-res__content-text api-res__content-text_lottery">Вы стали участником розыгрыша!</p>                
                    <p class="api-res__content-text api-res__content-text_no-enough">Для этого заказа у Вас не хватает баллов.</p>                
                    <p class="api-res__content-text api-res__content-text_success">Ваш запрос успешно отправлен. Менеджер с Вами свяжется.</p>                
                    <p class="api-res__content-text api-res__content-text_fail-send">Проблема с соединением, попробуйте еще.</p>                
                </div>
                <div class="api-res__content-wr-button">
                    <div class="api-res__content-button-back">
                        <a href="#0" title="Вы стали участником розыгрыша!">подробнее</a>
                    </div>
                </div>
            </div>
            <div class="api-res__close">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                    <path d="M1.76465 1.76465L26.7214 26.7214" stroke="white" stroke-width="3" stroke-linecap="round"/>
                    <path d="M26.4705 1.76465L1.76465 26.4705" stroke="white" stroke-width="3" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
    </div>
</main>

@include('template_parts.footer')
@include('template_parts.copyright')
<!-- событие на кнопку выход -->
<script>
    logout()
</script>
</body>
</html>
