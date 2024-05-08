export default class PatternNewCheque {

    create(data) {
        // data - это массив

    }

    createElement(tag, classes = [], content) {
        const el = document.createElement(tag);

        if(classes) {
            el.classList.add(...classes);
        }

        if(content) {
            el.textContent = content;
        }

        return el;
    }

}