import ModalInfoExchange from "../modalInfoExchange/ModalInfoExchange.js";

export default class ControllAccNewCheque extends ModalInfoExchange {
    constructor(api, d, state) {
        super(state);
        this.api = api;
        this.d = d;

        this.click = this.click.bind(this);
        this.change = this.change.bind(this);
        this.submit = this.submit.bind(this);
    }

    init() {
        // (async () => {
        //     const e = await this.api.a();
        //     console.log('from control', e)
        // })();
        this.registerEvents();
    }

    registerEvents() { 
        this.d.cheque.addEventListener('click', this.click);
        this.d.loadButton.addEventListener('change', this.change);
        this.d.form.addEventListener('submit', this.submit);
    }

    click(e) {
        if(e.target.closest('.exchange__extraction-button-back')) {
            const el = e.target.closest('.exchange__extraction-button-back');
            this.d.clickExchange(el);
        }
    }

    submit(e) {
        e.preventDefault();

        const file = e.target.file.files && e.target.file.files[0];
        
        if(!file) {
            this.d.resultAddCheque('fail');
            return;
        }

        const formData = new FormData(e.target);
        // TO DO: this place for send file 
        // super.openModalSuccess();
    }

    change(e) {
        const file = e.target.files && e.target.files[0];

        if(!file) {
            this.d.resultAddCheque('fail');
            return;
        }

        const fileType = file.type;
        const fileSize = file.size;

        // валидация на тип
        const validateType = /^image\/.+$/.test(fileType);
        // валидация на размер
        const validateSize = fileSize <= 104857600;

        if(validateType && validateSize) {
            this.d.resultAddCheque('success');
        }
        
        if(!validateType || !validateSize) {
            this.d.resultAddCheque('noValid');
            this.d.form.reset();
        }
    }
}