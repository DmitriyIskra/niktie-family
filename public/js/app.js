
// Слайдер на главной
import ControllSlHeaderMain from "./sliderHeaderMain/controllSlHeaderMain.js";
import RedrawSlHeaderMain from "./sliderHeaderMain/redrawSlHeaderMain.js";
import MobileSlHeaderMain from "./sliderHeaderMain/mobileSlHeaderMain.js";

// Блок с бонусами
import ControllExchange from "./exchange/ControllExchange.js";
import RedrawExchange from "./exchange/RedrawExchange.js";
import ApiExchange from "./exchange/ApiExchange.js";

// Добавление нового чека в аккаунте -- слайдер с чеками в аккаунте
import ControllAccNewCheque from "./accountNewCheque/controllAccNewCheque.js";
import RedrawAccNewCheque from "./accountNewCheque/redrawAccNewCheque.js";
import ApiAccNewCheque from "./accountNewCheque/ApiAccNewCheque.js";
import PatternNewCheque from "./accountNewCheque/patternNewCheque.js";
// import RedrawVoucherSlider from "./accountNewCheque/redrawVoucherSlider.js";

// Книга с фото чеков в аккаунте
import ControllСhequesbook from "./chequebook/controllСhequesbook.js";
import RedrawСhequesbook from "./chequebook/redrawСhequesbook.js";
import ApiСhequesbook from "./chequebook/apiСhequesbook.js";
import PatternChequesbook from "./chequebook/patternChequesbook.js";



window.addEventListener('load', () => {

    // Слайдер для HEADER
    const sliderHead = document.querySelector('.slider-hm');

    if(sliderHead) {
        const redrawSlHeaderMain = new RedrawSlHeaderMain(sliderHead);
        const controllSlHeaderMain = new ControllSlHeaderMain(redrawSlHeaderMain);
        controllSlHeaderMain.init();
    }

    // Слайдер для HEADER mobile
    const swiper__mainSL = document.querySelector('.swiper__main-header')

    if(swiper__mainSL) {
        const mobileSlHeaderMain = new MobileSlHeaderMain(swiper__mainSL);
        mobileSlHeaderMain.initSlider();
    }

    // Блок с бонусами
    const exchange = document.querySelector('.exchange__wrapper');
    if(exchange) {
        const apiExchange = new ApiExchange();
        const redrawExchange = new RedrawExchange(exchange);
        const controllExchange = new ControllExchange(redrawExchange);
        controllExchange.init();
    }

    // Добавление нового чека в аккаунте и управление книгой с чеками
    const cheque = document.querySelector('.up-cheque');
    if(cheque) {
        // const voucherSlider = '.account__slider-check';
        // const slidesWrapper = document.querySelector('.account__slider-check-wrapper');
        // const pagination = document.querySelector('.pagination__container');
        const chequebook = document.querySelector('.chequebook');
        const patternCh = new PatternChequesbook();
        const apiCh = new ApiСhequesbook();
        const redrawCh = new RedrawСhequesbook(chequebook, patternCh);
        const controllCh = new ControllСhequesbook(redrawCh, apiCh);
        controllCh.init();
        // метод для обновления фото чеков в книге
        const update = redrawCh.update;
     
        // const sliderCheque = new RedrawVoucherSlider(voucherSlider, slidesWrapper, pagination);
        const pattern = new PatternNewCheque();
        const redraw = new RedrawAccNewCheque(cheque, pattern);
        const api = new ApiAccNewCheque();
        const controll = new ControllAccNewCheque(api, redraw, update); //sliderCheque
        controll.init();
    }
})
 