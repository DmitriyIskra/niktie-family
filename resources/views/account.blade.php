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
                <div class="user__wr-balance">
                    <p>Ваш баланс: <span class="user__balance">50</span>  баллов</p>
                </div>

                <div class="user__data">
                    <div class="data-item green--border account__lastname"></div>
                    <div class="data-item btn-gradient-2 account__firstname"></div>
                    <div class="data-item account__patronymic"></div>
                    <div class="data-item account__phone"></div>
                    <div class="data-item account__mail"></div>

                    <ul class="user-data__address-list">
                        <li class="user-data__address-item user-data__address-item_first">
                            <div class="user-data__data user-data__data_index"></div>
                            <div class="user-data__data user-data__data_area"></div>
                            <div class="user-data__data user-data__data_district"></div>
                        </li>
                        <li class="user-data__address-item user-data__address-item_second">
                            <div class="user-data__data user-data__data_city"></div>
                            <div class="user-data__data user-data__data_street"></div>
                            <div class="user-data__data-numbers">
                                <div class="user-data__data user-data__data_house"></div>
                                <div class="user-data__data user-data__data_apartment"></div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="up-cheque">
                    <div class="up-cheque__notice up-cheque__notice_success">Ваш чек успешно загружен</div>
                    <div class="up-cheque__notice up-cheque__notice_fail">Не удалось загрузить чек, попробуйте еще раз</div>
                    <div class="up-cheque__notice up-cheque__notice_no-valid">Файл должен быть изображением и не превышать 10мб</div>
                    <div class="up-cheque__notice up-cheque__notice_no-limit">За один раз Вы можете выбрать не более 6 чеков</div>

                    <form class="up-cheque__wr-form" name="form-cheque">
                            <div class="up-cheque__upload-cheque">
                                <label>
                                    <input type="file" name="file" id="up-cheque__upload-cheque" multiple accept="image/*">
                                </label>
                                <div class="up-cheque__button-back" for="#up-cheque__upload-cheque">
                                    <button type="button">загрузить фото чека</button>
                                </div>
                            </div> 
                    </form>
                    
                    <div class="up-cheque__instruction">
                        <p>Убедитесь, что Ваш чек хорошо читается, а также он не должен превышать 10Мб и файл должен быть изображением.</p>
                        <p>Баллы будут начислены после проверки чека. В случае если ваш чек некорректен, баллы не будут начислены!</p>
                    </div>
                    <div class="up-cheque__back-wr-preview">
                        <div class="up-cheque__wr-preview">
                            <div class="up-cheque__preview-wr-close">
                                <div class="up-cheque__preview-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_3031_1566)">
                                            <path d="M1.76465 1.76465L26.7214 26.7214" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                            <path d="M26.4705 1.76465L1.76465 26.4705" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3031_1566">
                                                <rect width="30" height="30" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                            <ul class="up-cheque__preview-list">
                                <!-- Для превью загруженных чеков -->
                            </ul>
    
                            <div class="up-cheque__preview-wr-button">
                                <div class="up-cheque__button-back up-cheque__button-back_submit">
                                    <button type="button">отправить</button>
                                </div>
                            </div>
                        </div>
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

                    <!-- класс активации - exchange__modal-wrapper_active -->
                    <div class="exchange__modal-wrapper">
                        <!-- класс активации самой модалки -  exchange__modal_active -->
                        <div class="exchange__modal-confirm">
                            <div class="exchange__modal-wr-close">
                                <div class="exchange__modal-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_3031_1566)">
                                            <path d="M1.76465 1.76465L26.7214 26.7214" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                            <path d="M26.4705 1.76465L1.76465 26.4705" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3031_1566">
                                                <rect width="30" height="30" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
    
                            <div class="exchange__modal-confirm-wr-title">
                                <h1 class="exchange__modal-confirm-title">
                                    Подтвердите Ваш адрес доставки:
                                </h1>
                            </div>
    
                            <div class="exchange__modal-confirm-wr-address">
                                <div class="exchange__modal-confirm-address"></div>
                            </div>
    
                            <div class="exchange__modal-confirm-wr-submit">
                                <div class="exchange__modal-button-back exchange__modal-confirm-submit">
                                    <button type="button">подтвердить</button>
                                </div>
                            </div>
    
                            <div class="exchange__modal-confirm-wr-change">
                                <div class="exchange__modal-button-back exchange__modal-confirm-change">
                                    <button type="button">изменить адрес</button>
                                </div>
                            </div>
                        </div>

                        <div class="exchange__modal-change">
                            <div class="exchange__modal-wr-close">
                                <div class="exchange__modal-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_3031_1566)">
                                            <path d="M1.76465 1.76465L26.7214 26.7214" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                            <path d="M26.4705 1.76465L1.76465 26.4705" stroke="white" stroke-width="3" stroke-linecap="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_3031_1566">
                                                <rect width="30" height="30" fill="white"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>

                            <ul class="exchange__modal-change-address-list">
                                <div class="exchange__modal-change-address-item">
                                    <div class="exchange__modal-change-address-wr">
                                        <input type="text" class="exchange__modal-change-index" value="Адрес 123">
                                    </div>
                                </div>
                                <div class="exchange__modal-change-address-item">
                                    <div class="exchange__modal-change-address-wr">
                                        <input type="text" class="exchange__modal-change-area" value="Адрес 123">
                                    </div>
                                    <div class="exchange__modal-change-address-wr">
                                        <input type="text" class="exchange__modal-change-district" value="Адрес 123">
                                    </div>
                                </div>
                                <div class="exchange__modal-change-address-item">
                                    <div class="exchange__modal-change-address-wr">
                                        <input type="text" class="exchange__modal-change-city" value="Адрес 123">
                                    </div>
                                    <div class="exchange__modal-change-address-wr">
                                        <input type="text" class="exchange__modal-change-street" value="Адрес 123">
                                    </div>
                                </div>
                                <div class="exchange__modal-change-address-item">
                                    <div class="exchange__modal-change-address-wr">
                                        <input type="text" class="exchange__modal-change-house" value="Адрес 123">
                                    </div>
                                    <div class="exchange__modal-change-address-wr">
                                        <input type="text" class="exchange__modal-change-apartment" value="Адрес 123">
                                    </div>
                                </div>
                            </ul>

                            <div class="exchange__modal-change-wr-buttons">
                                <div class="exchange__modal-button-back exchange__modal-confirm-save">
                                    <button type="button">сохранить</button>
                                </div>
                                <div class="exchange__modal-button-back exchange__modal-confirm-cancel">
                                    <button type="button">отмена</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="code__group">      

                    <div class="slider__group">

                        <h1>Ваши чеки</h1>

                        <!-- <div class="check__slider-container">
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
                        </div> -->

                        <div class="chequebook">
                            <ul class="chequebook__cheque-list">

                            </ul>
                            <div class="chequebook__pagination">
                                <div class="chequebook__arrow chequebook__arrow-prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 20" fill="none">
                                        <path d="M10 2L2 10L10 18" stroke="white" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="chequebook__wr-pagination-list">
                                    <ul class="chequebook__pagination-list"></ul>
                                </div>

                                <div class="chequebook__arrow chequebook__arrow-next">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 20" fill="none">
                                        <path d="M2 2L10 10L2 18" stroke="white" stroke-width="2.5" stroke-linecap="square" stroke-linejoin="round"/>
                                    </svg>
                                </div>
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
                    <p class="api-res__content-text api-res__content-text_lottery">После обмена баллов <br> Вы стали участником розыгрыша!</p>                
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
