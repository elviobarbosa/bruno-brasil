import $ from 'jquery';
export default class Menu {
    constructor() {
        this.selector = '.js-menu';
        this.classes = {
            navContainer: '.nav-container',
            navMain: '.nav-main'
        };
        this.init();
    }

    init() {
        const page = window.location.pathname.replace(/^\/([^\/]*).*$/, '$1');
        if (page.length > 0) {
            $(this.classes.navMain).removeClass('nav-main--home');
        } else {
            $(this.classes.navMain).addClass('nav-main--home');
        }
    }
}
