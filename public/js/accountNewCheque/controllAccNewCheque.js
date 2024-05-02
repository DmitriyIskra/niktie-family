export default class ControllAccNewCheque {
    constructor(api, d) {
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
        
    }

    submit(e) {
        e.preventDefault();

        const file = e.target.files && e.target.files[0];
        console.log(e.target.file.files[0])
    }

    change(e) {
        const file = e.target.files && e.target.files[0];
        const fileType = file.type;
        const fileSize = file.size;
        console.log(file)
        if(!file) {
            this.d.resultAddCheque('fail');
        }

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