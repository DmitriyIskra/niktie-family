export default class ControllСhequesbook {
    constructor(d, api) {
        this.d = d;
        this.api = api;
    
        this.click = this.click.bind(this);
    }

    async init() {
        const arr = await this.api.read();
        this.d.init(arr);

        this.registerEvents();
    }

    registerEvents() {
        this.d.pagination.addEventListener('click', this.click);
    }

    click(e) {
        if(e.target.closest('.chequebook__arrow-next')) {
            this.d.next();
        }

        if(e.target.closest('.chequebook__arrow-prev')) {
            this.d.prev();
        }

        if(e.target.closest('.chequebook__pagination-item')) {
            this.d.num(e.target);
        }
    }
}