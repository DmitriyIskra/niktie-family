export default class RedrawAccNewCheque {
    constructor(cheque, pattern) {
        this.cheque = cheque;
        this.pattern = pattern;
        this.form = this.cheque.querySelector('form');
        this.loadButton = this.cheque.querySelector('.up-cheque__upload-cheque input');
        this.sendButton = this.cheque.querySelector('.up-cheque__wr-submit');
        this.previews = this.cheque.querySelector('.up-cheque__preview-list');

        this.statesAddCheque = {
            activate: 'up-cheque__notice_active', 
            elements: {
                success: this.cheque.querySelector('.up-cheque__notice_success'),
                fail: this.cheque.querySelector('.up-cheque__notice_fail'),
                noValid: this.cheque.querySelector('.up-cheque__notice_no-valid'),
                noLimit: this.cheque.querySelector('.up-cheque__notice_no-limit'),
            }
        }

        this.currentStateAdd = null; // какая инфо строка активна при добавлении чека
        this.lastCloseTimeOutID = null; // timeout для исчезновения инфо строки при загрузке чека

        this.amountPreview = 0; // количество показываемых превью
    }

    resultAddCheque(type) { 
        // если загружен новый файл, а таймаут старого еще не истек
        if(this.lastCloseTimeOutID) {
            this.clearResultAdd();
        };

        // активируем инфо строку с необходимым контентом, по результату добавления файла (чека)
        this.currentStateAdd = this.statesAddCheque.elements[type];
        this.currentStateAdd.classList.add(this.statesAddCheque.activate);
        

        this.lastCloseTimeOutID = setTimeout(() => {
            this.clearResultAdd();
        }, 10000)
    }

    // очистка данных по инфо строке при добавлении чека
    clearResultAdd() {
        this.currentStateAdd.classList.remove(this.statesAddCheque.activate);
        this.currentStateAdd = null;

        clearTimeout(this.lastCloseTimeOutID);
        this.lastCloseTimeOutID = null;
    }

    renderPreview(files) {
        // const data = [...files].map(file => {
        //     let num = String(this.amountPreview += 1);
        //     num = num.padStart(3, '0'); // добавляем нули если нужно
    
        //     return {
        //         num,
        //         file,
        //     };
        // })
        
        // формируем превью
        const previews = this.pattern.create(files);
       
        // Активируем блок с превью
        this.previews.classList.add('up-cheque__preview-list_active');

        // добавляем превью
        this.previews.append(...previews);
    }

    clearPreview() {
        // [...this.previews.children].forEach(item => item.remove());
        this.previews.replaceChildren()
        this.previews.classList.remove('up-cheque__preview-list_active');
    }
}