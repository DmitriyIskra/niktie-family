<!DOCTYPE html>
<html lang="ru">

<head>
    @include('template_parts.header_css_js')
    <title>Промостраница в честь 15-летия чайного бренда NIktea!</title>
    <meta name="description" content="Наши призы: сертификат на путешествие мечты, Macbook, IPhone, Sony PlayStation, электросамокат Bork, годовой запас чая NIktea и многое другое!"/>
    <link rel="stylesheet" href="{{ asset("css/round-slider.css?v=").time()}}">
</head>

<body class="main-body__image" data-variant="main-page">

<header>
    <div class="header-wrapper header-wrapper__main-page">
        @include('template_parts.header_menu') 
        <div class="header-wrapper__main-page--img">

            <div class="slider-hm">

                <div class="slider-hm__slides">
                    <ul class="slider-hm__slides-list">
                        <li class="slider-hm__slides-item">
                            <img class="slider-hm__slides-img" src="./img/content/banner-winners-desc-1.webp" alt="winner" class="src">
                        </li>
                        <li class="slider-hm__slides-item">
                            <img class="slider-hm__slides-img" src="./img/content/banner-winners-desc-2.webp" alt="winner" class="src">
                        </li>
                        <li class="slider-hm__slides-item">
                            <img class="slider-hm__slides-img" src="./img/content/banner-winners-desc-1.webp" alt="winner" class="src">
                        </li>
                        <li class="slider-hm__slides-item">
                            <img class="slider-hm__slides-img" src="./img/content/banner-winners-desc-2.webp" alt="winner" class="src">
                        </li>
                    </ul>
                </div>

                <div class="slider-hm__controll">
                    <div class="slider-hm__controll-arrow slider-hm__controll-prev">
                        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.5731 58.593C44.082 58.593 43.5988 58.4011 43.2369 58.0392L26.5338 41.338C26.1794 40.9836 25.98 40.504 25.98 40.0019C25.98 39.4999 26.1794 39.0202 26.5338 38.6658L43.2369 21.9606C43.7797 21.4178 44.5915 21.2632 45.2963 21.551C46.0012 21.8428 46.4625 22.5328 46.4625 23.2968V56.7031C46.4625 57.4671 46.0032 58.1575 45.2963 58.4488C45.0622 58.5452 44.8166 58.593 44.5731 58.593Z" fill="white"/>
                            <path d="M40 80.0005C17.9434 80.0005 0 62.0591 0 40.002C0 17.9448 17.9434 0 40 0C62.0566 0 80 17.9453 80 40.002C80 62.0586 62.0571 80.0005 40 80.0005ZM40 3.77925C20.0286 3.77925 3.77925 20.0301 3.77925 40.002C3.77925 59.9739 20.0286 76.2208 40 76.2208C59.9714 76.2208 76.2208 59.9734 76.2208 40.002C76.2208 20.0306 59.9719 3.77925 40 3.77925Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="slider-hm__controll-arrow slider-hm__controll-next">
                        <svg viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.4272 58.5927C35.9183 58.5927 36.4015 58.4009 36.7633 58.039L53.4664 41.3379C53.8208 40.9835 54.0201 40.5038 54.0201 40.0018C54.0201 39.4998 53.8208 39.0201 53.4664 38.6657L36.7633 21.9606C36.2205 21.4178 35.4088 21.2632 34.704 21.551C33.9991 21.8428 33.5379 22.5328 33.5379 23.2968V56.7029C33.5379 57.4669 33.9972 58.1573 34.704 58.4486C34.9381 58.545 35.1837 58.5927 35.4272 58.5927Z" fill="white"/>
                            <path d="M40.0002 80C62.0568 80 80 62.0587 80 40.0017C80 17.9447 62.0568 0 40.0002 0C17.9437 0 0.000495911 17.9452 0.000495911 40.0017C0.000495911 62.0582 17.9432 80 40.0002 80ZM40.0002 3.77923C59.9715 3.77923 76.2208 20.0299 76.2208 40.0017C76.2208 59.9735 59.9715 76.2203 40.0002 76.2203C20.029 76.2203 3.77972 59.973 3.77972 40.0017C3.77972 20.0304 20.0285 3.77923 40.0002 3.77923Z" fill="white"/>
                        </svg>
                    </div>
                </div>

            </div>

            <div class="slider-hm_mobile">
                <div class="swiper swiper__main-header">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-slide-img" src="./img/content/banner-winners-mobile-1.webp" alt="winner">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-slide-img" src="./img/content/banner-winners-mobile-2.webp" alt="winner">
                        </div>
                    </div>
                </div>
            </div>

            <div class="header__main-page--wr-img_bottom">
                <img class="header__main-page--img_bottom" src="./img/content/header-bg-flower_bottom.png" alt="">
            </div>
        </div>
    </div>
</header>
 
<!-- Вход, регистрация -->

@include('template_parts.modal')

<main class="main">

    <div class="main-page__container">


        <h1>Как получить гарантированные подарки?</h1>

        <section class="rules__action">

            <div class="rules__item">
                <div class="rules__item-wrap">
                    <img class="rules__item--img" src="img/content/basket-prize.png" alt="Basket">
                    <span class="rules__item--text">Купите пачку чая NIktea в<br>
                    удобном для вас розничном<br>
                    или интернет-магазине.</span>
                </div>
            </div>
            <div class="rules__item">
                <div class="rules__item-wrap">
                    <img class="rules__item--img" src="img/content/registry-comp.png" alt="Registry">
                    <span class="rules__item--text">
                    Зарегистрируйте чек<br>
                    на сайте в личном кабинете</span>
                </div>
            </div>

            <div class="rules__item">
                <div class="rules__item-wrap">
                    <img class="rules__item--img" src="img/content/tea-cup.png" alt="">
                    <span class="rules__item--text">
                    Копите баллы и<br>обменивайте на подарки<br><span style="color: #FFF500;">1 пачка чая = 1 балл</span></span>
                </div>
            </div>

            <div class="rules__item"> 
                <div class="rules__item-wrap rules__item-wrap_last">
                    <img class="rules__item--img rules__item--img_last" src="img/content/man-icon.png" alt="">
                    <span class="rules__item--text">
                    Ожидайте выбранные<br>
                    подарки</span>
                </div>
            </div>

        </section>

        <div class="links-partner__wrapper">
            <p class="links-partner__text">
                Промо-пачки можно купить на сайтах <a class="links-partner__link" href=" https://oasis-msk.ru/Paketirovannyj-tea-niktea-c-28_109_126.html" title="Oasis" target="_blank">Oasis</a>, <a class="links-partner__link" href="https://www.ozon.ru/brand/niktea-34988836/" title="Ozon" target="_blank">Ozon</a>, в магазинах О'Кей, гипермаркетах Глобус, Перекресток и других.
            </p>
        </div>

        <a href="/rules">
            <button class="recepies__button">ПОДРОБНЕЕ</button>
        </a>


        <section class="main__slider">

            <div class="main__slider--wrap">
                <!-- <div class="slider-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div> -->

                <div class="main__slider__slides">

                    <div class="testSlider roundSlider">

                        <section class="wr-slider-content">
                            <h2>ВЫ МОЖЕТЕ ВЫБРАТЬ:</h2>

                            <div class="active-slide__description"></div>

                            <div class="slider slider_circle_10">
                                <div class="slide__container">
                                    <span class="slide__description">Сертификат на путешествие 300 000р</span>
                                    <div class="slide-img--wrap slide-img--wrap-certif">
                                        <img class="main-slide__img main-slide__img--light"
                                             src="img/content/priz/certif.png"
                                             alt="certif">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Планшет Apple iPad mini 256GB<br>
                                    Цвет: Space Grey </span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/laptop.png" alt="laptop">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Смартфон Apple iPhone 14 Pro 256GB<br>
                                    Цвет: Deep Purple</span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/phone-priz.png"
                                             alt="phone-priz">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Годовой запас чая Niktea<br>
                                    24 упаковки (пакетированный), более 10 вкусов</span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/niktea24.png" alt="niktea24">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Умная колонка Яндекс Станция 2, с Алисой<br>
                                    Цвет: Черный антрацит</span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/alice.png" alt="alice">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Чайник Bork K 703 CH<br>
                                    Цвет: Champagne</span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/teapot-priz.png"
                                             alt="teapot-priz">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Наушники Apple AirPods Pro (2 поколение)<br>
                                    Цвет: Белый </span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/headphones.png"
                                             alt="headphones">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Портативный аккумулятор Bork (L787)<br>
                                    Цвет: Белый </span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img slide-acc-bork-img" src="img/content/priz/borkL787.png" alt="borkL787">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Подарочный чайный набор Niktea<br>
                                    (чай+кружка)</span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/gift-set.png" alt="gift-set">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">
                                    Фен Dyson Supersonic (hd07)<br>
                                    Цвет: Vinca Blue & Rose
                                    </span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/fan-priz.png" alt="fan-priz">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Электросамокат Bork L602<br>
                                    Вес 13 кг и удобная складная конструкция</span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/scooter.png" alt="scooter">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Консоль Sony PlayStation 5<br>
                                    Blu-Ray Edition </span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/playstation.png"
                                             alt="playstation">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Воздухоотчиститель Dyson (HP05)<br>
                                    Pure Hot + Cool </span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/cleaner-priz.png"
                                             alt="cleaner-priz">
                                    </div>
                                </div>

                                <div class="slide__container">
                                    <span class="slide__description">Ноутбук Apple MacBook Air 13 M2, 16/256<br>
                                    Цвет: Midnight</span>
                                    <div class="slide-img--wrap">
                                        <img class="main-slide__img" src="img/content/priz/notebbok.png" alt="notebbok">
                                    </div>
                                </div>


                                <div class="next_button"></div>
                                <div class="prev_button"></div>
                            </div>
                        </section>



                    </div>

                </div>

            </div>

        </section>

        <div class="more-detailed">
            <div class="more-detailed__wr-button">
                <div class="more-detailed__button-back-modal-on">
                    <a href="#">подробнее</a>
                </div>
            </div>
            <!-- Для включения модалки класс more-detailed__modal_active -->
            <div class="more-detailed__modal more-detailed__modal_active">

                <div class="more-detailed__wr-close">
                    <div class="more-detailed__close">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none">
                            <path d="M1.76465 1.76465L26.7214 26.7214" stroke="white" stroke-width="3" stroke-linecap="round"/>
                            <path d="M26.4705 1.76465L1.76465 26.4705" stroke="white" stroke-width="3" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <ul class="more-detailed__tabs-list">
                    <li class="more-detailed__tabs-item more-detailed__tabs_active">Бонусная программа Niktea family</li>
                    <li class="more-detailed__tabs-item">Призы для розыгрыша в бонусной программе</li>
                </ul>
                <!-- Для включения нужного окна класс  more-detailed__wr-content_active -->
                <div class="more-detailed__wr-content more-detailed__wr-content-bonus-prog">
                    <ul class="more-detailed__content-list more-detailed__content-bonus-prog">
                        <li class="more-detailed__content-item">
                            <div class="more-detailed__wr-title">
                                <h2 class="more-detailed__title">Базовый уровень</h2>
                            </div>
                            <ul class="more-detailed__bonus-prog-list">
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-30-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <div class="more-detailed__wr-bonus-prog-text">
                                        <p class="more-detailed__bonus-prog-text">
                                            <span class="more-detailed__bonus-prog-amount-balls">30 баллов - </span>
                                            <span class="more-detailed__bonus-prog-desc">
                                                тренинг по чаю 
                                            </span>
                                            <span class="more-detailed__bonus-prog-desc-dop">(<span class="more-detailed__bonus-prog-desc-dop-color">От любителя до профессионала</span>)</span>
                                        </p>
                                        <p class="more-detailed__bonus-prog-text_dop">Просим Вас учитывать, что тренинг будет проходить в Москве</p>
                                    </div>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-58-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">58 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">чайник для чая и сахарница с ложкой</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-63-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">63 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">коллекция чая NIKTEA в пирамидках (8 шт)</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-71-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">71 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">сумка-холодильник</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-76-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">76 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">зонт автомат</span>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-detailed__content-item">
                            <div class="more-detailed__wr-title">
                                <h2 class="more-detailed__title">Серебрянный уровень</h2>
                            </div>
                            <ul class="more-detailed__bonus-prog-list">
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-91-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">91 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">наша фирменная футболка Niktea</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-95-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">95 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">френч-пресс, 1 л</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-139-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">139 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">подарочный термос и 3 стаканчика</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-207-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">207 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">чайник заварочный, 600 мл</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-245-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">245 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">набор для китайской чайной церемонии, в сумке</span>
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-detailed__content-item">
                            <div class="more-detailed__wr-title">
                                <h2 class="more-detailed__title">Золотой уровень</h2>
                            </div>
                            <ul class="more-detailed__bonus-prog-list">
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-415-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">415 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">термокружка Bork HT600</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-585-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">585 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">подарочная карта М.Видео или Технопарк на 10 000</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-795-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">795 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">Рюкзак UAG STD</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-812-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">812 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">Беспроводной мини-пылесос Bork V515</span>
                                    </p>
                                </li>
                                <li class="more-detailed__bonus-prog-item">
                                    <div class="more-detailed__bonus-prog-wr-image">
                                        <img src="img/content/bonuses-for-balls/bonus-983-balls.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__bonus-prog-text">
                                        <span class="more-detailed__bonus-prog-amount-balls">983 баллов - </span>
                                        <span class="more-detailed__bonus-prog-desc">Яндекс станция 2, с Алисой (несколько цветов)</span>
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="more-detailed__buttons-list">
                        <li class="more-detailed__button-item">
                            <div class="more-detailed__button-back">
                                <a href="#">подробнее об акции</a>
                            </div>
                        </li>
                        <li class="more-detailed__button-item">
                            <div class="more-detailed__button-back">
                                <a href="#">личный кабинет</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="more-detailed__wr-content more-detailed__wr-content-lottery">
                    <ul class="more-detailed__content-list more-detailed__content-lottery">
                        <li class="more-detailed__content-item">
                            <div class="more-detailed__wr-title">
                                <h2 class="more-detailed__title">1 этап (1 вариант)</h2>
                            </div>
                            <ul class="more-detailed__lottery-list">
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image more-detailed__lottery-wr-image_watch">
                                        <img src="img/content/lottery/lottery-level1-1.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <div class="more-detailed__lottery-wr-text">
                                        <p class="more-detailed__lottery-text">
                                            Часы HUAWEI WATCH GT 4,  46мм. (набор)  
                                        </p>
                                        <p class="more-detailed__lottery-text">
                                            Часы Apple Watch SE, 44мм.  
                                        </p>
                                        <p class="more-detailed__lottery-text">
                                            Часы  Samsung 6, 44мм. 
                                        </p>
                                    </div>
                                </li>
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level1-2.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        Фен Dyson Supersonic (hd07) 
                                    </p>
                                </li>
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level1-3.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        Игровая консоль Valve Steam Deck
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-detailed__content-item">
                            <div class="more-detailed__wr-title">
                                <h2 class="more-detailed__title">2 этап (2 вариант)</h2>
                            </div>
                            <ul class="more-detailed__lottery-list">
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level2-1.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        Чайник Bork, K810
                                    </p>
                                </li>
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level2-2.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        Беспроводной вертикальный пылесос Dyson V11
                                    </p>
                                </li>
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level2-3.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        Наушники Apple AirPods Max
                                    </p>
                                </li>
                            </ul>
                        </li>
                        <li class="more-detailed__content-item">
                            <div class="more-detailed__wr-title">
                                <h2 class="more-detailed__title">3 этап (3 вариант)</h2>
                            </div>
                            <ul class="more-detailed__lottery-list">
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level3-1.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        Xbox Series X
                                    </p>
                                </li>
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level3-2.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        Отпариватель Bork i700
                                    </p>
                                </li>
                                <li class="more-detailed__lottery-item">
                                    <div class="more-detailed__lottery-wr-image">
                                        <img src="img/content/lottery/lottery-level3-3.webp" alt="Подарок по бонусной программе Niktie family">
                                    </div>
                                    <p class="more-detailed__lottery-text">
                                        GoPro Hero 11 Black
                                    </p>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="more-detailed__buttons-list">
                        <li class="more-detailed__button-item">
                            <div class="more-detailed__button-back">
                                <a href="#">подробнее об акции</a>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>
        </div>

        <div class="priz-mobile">

            <div class="priz__item">
          <span class="priz__item__text priz__item__text--big">Главный подарок<br>
            - сертификат на путешествие</span>
                <img class="priz__item__img priz__item__img--layout" src="img/content/mobile/certif-mobile.png"
                     alt="certif-mobile">
            </div>


            <div class="priz__item">
                <span class="priz__item__text">Macbook air m2<br>midnight</span>
                <img class="priz__item__img" src="img/content/mobile/notebook.png" alt="notebook.png">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Iphone 14 pro 256<br>deep purple</span>
                <img class="priz__item__img" src="img/content/mobile/iphone.png" alt="iphone">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Ipad mini 256 space<br>grey</span>
                <img class="priz__item__img" src="img/content/mobile/ipad.png" alt="ipad">
            </div>


            <div class="priz__item">
                <span class="priz__item__text">Очиститель воздуха<br>Dyson HP05</span>
                <img class="priz__item__img" src="img/content/mobile/dyson.png" alt="dyson">
            </div>


            <div class="priz__item">
                <span class="priz__item__text">Bork Электросамокат</span>
                <img class="priz__item__img" src="img/content/mobile/scooter-mobile.png" alt="scooter-mobile">
            </div>


            <div class="priz__item">
                <span class="priz__item__text">Sony Playstation 5</span>
                <img class="priz__item__img" src="img/content/mobile/playstation-mobile.png" alt="playstation-mobile">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Фен Dyson</span>
                <img class="priz__item__img" src="img/content/mobile/fan-mobile.png" alt="fan-mobile">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Портативный<br>аккумулятор Bork</span>
                <img class="priz__item__img" src="img/content/mobile/bork-mobile.png" alt="bork-mobile">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Яндекс станция 2<br>с Алисой</span>
                <img class="priz__item__img" src="img/content/mobile/alice-mobile.png" alt="alice-mobile">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Air Pods 2</span>
                <img class="priz__item__img" src="img/content/mobile/airbods-mobile.png" alt="airbods-mobile">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Чайник Bork</span>
                <img class="priz__item__img" src="img/content/mobile/teapot-mobile.png" alt="teapot-mobile">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">300 подарочных наборов<br>Niktea</span>
                <img class="priz__item__img" src="img/content/mobile/300.png" alt="300">
            </div>

            <div class="priz__item">
                <span class="priz__item__text">Годовой запас чая<br>Niktea</span>
                <img class="priz__item__img" src="img/content/mobile/tea-mobile.png" alt="tea-mobile">
            </div>


        </div>

    </div>

</main>



@include('template_parts.footer')
@include('template_parts.copyright')

<script>
    EasySlides('.slider_circle_10', {
        'autoplay': false,
        'delayaftershow': 1200,
        'stepbystep': false,
        'startslide': 8,
        'distancetochange': 10,
        'show': 9
    });
</script>
</body>
</html>
