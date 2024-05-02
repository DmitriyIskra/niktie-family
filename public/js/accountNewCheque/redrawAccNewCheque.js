export default class RedrawAccNewCheque {
    constructor(cheque) {
        this.cheque = cheque;
        this.form = this.cheque.querySelector('form');
        this.loadButton = this.cheque.querySelector('.up-cheque__upload-cheque input');

        this.statesAddCheque = {
            activate: 'up-cheque__notice_active',
            elements: {
                success: this.cheque.querySelector('.up-cheque__notice_success'),
                fail: this.cheque.querySelector('.up-cheque__notice_fail'),
                noValid: this.cheque.querySelector('.up-cheque__notice_no-valid'),
            }
        }

        this.currentStateAdd = null; // какая инфо строка активна при добавлении чека
        this.lastCloseTimeOutID = null; // timeout для исчезновения инфо строки при загрузке чека
    }

    resultAddCheque(type) { 
        // если загружен новый файл, а таймаут старого еще не истек
        if(this.lastCloseTimeOutID) {
            this.clearResultAdd();
        };

        this.currentStateAdd = this.statesAddCheque.elements[type];
        this.currentStateAdd.classList.add(this.statesAddCheque.activate);
        

        this.lastCloseTimeOutID = setTimeout(() => {
            this.clearResultAdd();
        }, 10000)
    }


    clearResultAdd() {
        this.currentStateAdd.classList.remove(this.statesAddCheque.activate);
        this.currentStateAdd = null;

        clearTimeout(this.lastCloseTimeOutID);
        this.lastCloseTimeOutID = null;
    }

}