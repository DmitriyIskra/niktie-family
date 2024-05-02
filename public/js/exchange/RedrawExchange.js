import ModalInfoExchange from "../modalInfoExchange/ModalInfoExchange.js";

export default class RedrawExchange extends ModalInfoExchange {
    constructor(el, state) {
        super(state);
        this.el = el;
    }

    clickExchange(el) {
        // получаем количество баллов и проверяем хватает ли
        const points = +el.dataset.points;
        const check = this.checkPoints(points);
        
        if(!check) {
            super.openModalnoEnough();
            return;
        }
    }

    checkPoints(points) {
        const el = document.querySelector('.user__balance');
        const available = +el.textContent;

        return available > points ? true : false;
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