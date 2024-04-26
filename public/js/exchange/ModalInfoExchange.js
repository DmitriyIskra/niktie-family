export default class ModalInfoExchange {
    constructor() {
        this.state =  {
            activate: 'api-res__wrapper_active',
            type: {
                lottery : 'api-res__lottery',
                noEnough : 'api-res__no-enough',
                success : 'api-res__success',
                failSend : 'api-res__fail-send',
            }
        };

        this.modal = null;
        this.click = this.click.bind(this);
    }

    registerEvents() {
        if(this.modal) {
            this.modal.addEventListener('click', this.click);
        }
    }

    removeEvents() {
        this.modal.removeEventListener('click', this.click);
    }

    click(e) {
        if(e.target.closest('.api-res__close')) {
            this.unactivateModal();
            this.removeEvents();
        }

        if(e.target.matches('.api-res__wrapper')) {
            this.unactivateModal();
            this.removeEvents();
        }
    }

    activateModal() {
        if(!this.modal) {
            this.modal = document.querySelector('.api-res__wrapper');
        }

        this.registerEvents();

        if(this.modal) this.modal.classList.add(this.state.activate);
    }

    unactivateModal() {
        if(this.modal) this.modal.className = 'api-res__wrapper';
    }

    openModalLottery() {
        this.activateModal();
        this.modal.classList.add(this.state.type.lottery);
    }

    openModalnoEnough() {
        this.activateModal();
        this.modal.classList.add(this.state.type.noEnough);
    }
    
    openModalSuccess() {
        this.activateModal();
        this.modal.classList.add(this.state.type.success);
    }
    
    openModalFailSend() {
        this.activateModal();
        this.modal.classList.add(this.state.type.failSend);
    }
}