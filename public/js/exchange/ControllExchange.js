export default class ControllExchange {
    constructor(d) {
        this.d = d;

        this.click = this.click.bind(this);
    }

    init() {
        this.registerEvents();
        this.d.parseAmountPoints();
    }

    registerEvents() {
        this.d.el.addEventListener('click', this.click);
    }

    click(e) {
        if(e.target.closest('.exchange__extraction-button-back')) {
            const el = e.target.closest('.exchange__extraction-button-back');
            this.d.clickExchange(el);
        }
    }
}