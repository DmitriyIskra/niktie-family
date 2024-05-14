import ModalInfoExchange from "../modalInfoExchange/ModalInfoExchange.js";

export default class ControllAccNewCheque extends ModalInfoExchange {
    constructor(api, d, state) {
        super(state);
        this.api = api;
        this.d = d;
        this.dropZone = document.body;

        this.files = []; // Массив загруженных файлов

        this.click = this.click.bind(this);
        this.change = this.change.bind(this);
        this.submit = this.submit.bind(this);
        this.drop = this.drop.bind(this);
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

        this.dropZone.addEventListener('dragenter', e => e.preventDefault());
        this.dropZone.addEventListener('dragover', e => e.preventDefault());
        this.dropZone.addEventListener('dragleave', e => e.preventDefault());
        this.dropZone.addEventListener('drop', this.drop);
    }
    
    click(e) {
        if(e.target.closest('.exchange__extraction-button-back')) {
            const el = e.target.closest('.exchange__extraction-button-back');
            this.d.clickExchange(el);
        } 
    }

    submit(e) {
        e.preventDefault();
        
        if(!this.files.length) {
            this.d.resultAddCheque('fail');
            return;
        }

        const formData = new FormData();
        this.files.forEach(item => {
            formData.append(`file`, item);
        })

        // TO DO: this place for send file 
        // super.openModalSuccess();
        this.files = [];
        this.d.form.reset();
        this.d.amountPreview = 0;
        this.d.clearPreview();
    }

    change(e) { // РЕАЛИЗОВАТЬ drag and drop и показ превью
        const files = e.target.files;     

        if(!files.length) {
            // если файл не загружен, показываем предупреждение
            this.d.resultAddCheque('fail');
            return;
        }

        this.saveFiles(files);
    }
    
    drop(e) {
        e.preventDefault();
        const files = e.dataTransfer.files;
        
        this.saveFiles(files);
    }
    
    saveFiles(files) {
        
        const val = this.validation(files);

        // не больше 30 файлов за одно добавление
        if(!val.isLength) {
            this.d.resultAddCheque('noLimit');
            this.d.form.reset();
    
            return;
        }
    
        // соответствует заданному типу и размеру
        if(!val.isValid) {
            this.d.resultAddCheque('noValid');
            this.d.form.reset();
            return;
        }
    
        // показываем пользователю что все успешно загружено
        this.d.resultAddCheque('success');
    
        // отрисовка превью
        this.d.renderPreview(files);
    
        // сохраняем загруженные файлы в массив для дальнейшей отправки
        this.files = this.files.length === 0 ? [...files] : [this.files, ...files];
    }

    validation(files) {
        // Можно выбрать не более 30 файлов
        const isLength = files.length <= 10;

        // все файлы должны быть валидны 
        const isValid = [...files].every(item => {
            const fileType = item.type;
            const fileSize = item.size;
    
            return /^image\/.+$/.test(fileType) && fileSize <= 10485760;
        })

        return {
            isLength,
            isValid,
        };
    }
}