export default class {
    constructor () {
        this.languageItem = document.querySelectorAll('.language-switch_item');
        this.init();
    }

    init () {
        const { languageItem } = this;
        console.log(languageItem);
        languageItem[0].classList.add("language-switch_item_active");

        for (var i=0; i<languageItem.length; i++) {
            console.log(languageItem[i]);
            languageItem[i].addEventListener("click", function() {
                languageItem.forEach(function(item, i, languageItem) {
                    languageItem[i].classList.remove("language-switch_item_active");
                    event.target.parentNode.classList.add("language-switch_item_active");
                });
            }, false);
        }

    }
}