export default class ControllExchange {
    constructor(d) {
        this.d = d;

        this.click = this.click.bind(this);
    }

    init() {
        this.d.init();
        this.registerEvents();
    }

    registerEvents() {
        this.d.el.addEventListener('click', this.click);
    }

    click(e) {
        if(e.target.closest('.exchange__extraction-button-back')) {
            const el = e.target.closest('.exchange__extraction-button-back');
            const checkResult = this.d.checkPoints(el);

            // не хватает баллов
            if(!checkResult) {
                this.d.openModalnoEnough();
                return;
            }
    
            // хватает баллов
            this.d.showCoverModal();
            this.d.showConfirmModal();
        }

        if(e.target.closest('.exchange__modal-confirm-submit')) {
            // отправляем какой был выбран подарок (индекс) и адрес
            console.log('адрес', this.d.addressConfirm.textContent);
            console.log('баллы подарка', this.d.costPoints);
            // закрываем модалки
            this.d.hideCoverModal();
            this.d.hideModal();
        }

        /**открываем модалку смены адреса, кнопка для модалки смены адреса**/ 
        if(e.target.closest('.exchange__modal-confirm-change')) {
            this.d.showChangeModal();
        }

        /**сохранение нового адреса, кнопка сохранить в модалке смены адреса**/ 
        if(e.target.closest('.exchange__modal-confirm-save')) {
            this.d.saveNewAddress();
            this.d.showConfirmModal();
        }

        /**отмена ввода нового адреса, кнопка отмена в модалке смены адреса**/ 
        if(e.target.closest('.exchange__modal-confirm-cancel')) {
            this.d.showConfirmModal();
        }

        /**закрыть модалку для подтверждения или корректировки адреса**/
        if(e.target.closest('.exchange__modal-close')) {
            this.d.hideCoverModal();
            this.d.hideModal();
        }
    }
} 