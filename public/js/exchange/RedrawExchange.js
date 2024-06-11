import ModalInfoExchange from "../modalInfoExchange/ModalInfoExchange.js";

export default class RedrawExchange extends ModalInfoExchange {
    constructor(el, state) {
        super(state);
        this.el = el;
        this.address = null;

        this.wrapperModal = this.el.querySelector('.exchange__modal-wrapper');

        this.modalConfirm = this.el.querySelector('.exchange__modal-confirm');
        this.addressConfirm = this.el.querySelector('.exchange__modal-confirm-address');

        this.modalChange = this.el.querySelector('.exchange__modal-change');

        // баллы выбранного подарка
        this.costPoints = null;
        this.activeModal = null;
    }

    init() {
        this.parseAmountPoints();
    }
    
    /**
     * активируем обертку модалок, оно же покрытие на страницу**/ 
    showCoverModal() {
        this.wrapperModal.classList.add('exchange__modal-wrapper_active');

        // если модалку открываем первый раз и поле 
        // не содержит объект с данными по адресу
        // заполняем его из sessionStorage
        if(!this.address) {
            this.address = JSON.parse(sessionStorage.infoAccount);
        }
    }

    hideCoverModal() {
        this.wrapperModal.classList.remove('exchange__modal-wrapper_active');
        this.costPoints = null;
    }

    /**
     * активируем модалку подтверждения**/ 
    showConfirmModal() {
        // если другое окно открыто (смена адреса), оно закроется
        this.hideModal();

        this.activeModal = this.modalConfirm;
        this.activeModal.classList.add('exchange__modal_active');

        this.addressConfirm.textContent = `
        ${this.address.index}, ${this.address.area} обл, ${this.address.district} р-он,
         ${this.address.city}, ул.${this.address.street}, д. ${this.address.house},
          кв. ${this.address.apartment}
        `;

        /**адрес указанный при регистрации, при первом открытии модалки подтверждения адреса, 
         * будет сохранен в this.address если пользователь изменит адрес, то пока страница 
         * не перезагружалась, там будет закеширован новый адрес, если страницу перезагрузить при первом 
         * открытии модалки подтверждения адреса снова загрузится адрес указанный при регистрации.
         * 
         * При выходе из аккаунта sessionStorage очищается**/ 
    }

    hideModal() {
        if(this.activeModal) {
            this.activeModal.classList.remove('exchange__modal-wrapper_active');
        };
    }

    /**
     * Проверка хвататет ли баллов**/ 
    checkPoints(el) {
        // получаем стоимость выбранного подарка
        this.costPoints = +el.dataset.points;

        // количество баллов у пользователя
        const elBalance = document.querySelector('.user__balance');
        const available = +elBalance.textContent; 

        return available > this.costPoints ? true : false;
    }

    parseAmountPoints() {
        // прописываем кнопкам обменять сколько баллов по данному бонусу
        // находим строки li с бонусами
        const collItemsPoints  = this.el.querySelectorAll('.exchange__extraction-item');
        
        [...collItemsPoints].forEach(item => {
            // парсим цифру по бонусам
            const elWidthPoint = item.querySelector('.exchange__extraction-text span');
            const point = parseFloat(elWidthPoint.textContent);
            // добавляем количество бонусов к кнопке
            const button = item.querySelector('.exchange__extraction-button-back');
            button.dataset.points = point;
        })
    }
}