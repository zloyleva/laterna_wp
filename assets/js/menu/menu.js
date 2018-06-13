export class Menu {
    constructor(){
        console.log('Menu script was loaded');

        this.openLanguageBlock();
    }

    openLanguageBlock(){
        $('li.wpglobus-current-language > a.nav-link').off('click').on('click', e => {
            e.preventDefault();
            console.log('click toggle menu');
            console.log($(e.target).closest('li.wpglobus-current-language').find('ul.dropdown-menu').toggle());

        });
    }
}