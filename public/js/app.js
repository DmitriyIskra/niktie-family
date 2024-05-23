
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
import RedrawVoucherSlider from "./accountNewCheque/redrawVoucherSlider.js";




window.addEventListener('load', () => {
    // УДАЛИТЬ!!!!!!
    // const accAddCodeGroup = document.querySelector('.code__input--group');

    // if(accAddCodeGroup) {
    //     // добавление кодов и чеков (управление слайдером чеков)
    //     const domainReg = '/api/auth/register';
    //     const domainVoucher = `/api/code/checkout`;
    //     const domains = [domainReg, domainVoucher];
    //     
    //     

    //     const drawAccAddCodes = new RedrawAccountAddCodes(accAddCodeGroup); 
    //     const fetchAccAddCodes = new FetchAccountAddCodes(domains);
    //       const redrawVoucherSlider = new RedrawVoucherSlider(voucherSlider, slidesWrapper, voucherPaginContainer);
    //     const arr = [drawAccAddCodes, fetchAccAddCodes, redrawVoucherSlider]
    //     const controllAccAddCodes = new ControllAccountAddCodes(arr);

    //     controllAccAddCodes.init(); 

    // }


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

    // Добавление нового чека в аккаунте
    const cheque = document.querySelector('.up-cheque');
    if(cheque) {
        const voucherSlider = '.account__slider-check';
        const slidesWrapper = document.querySelector('.account__slider-check-wrapper');
        const pagination = document.querySelector('.pagination__container');

        const sliderCheque = new RedrawVoucherSlider(voucherSlider, slidesWrapper, pagination);
        const pattern = new PatternNewCheque();
        const redraw = new RedrawAccNewCheque(cheque, pattern);
        const api = new ApiAccNewCheque();
        const controll = new ControllAccNewCheque(api, redraw, sliderCheque);
        controll.init();
    }
})
