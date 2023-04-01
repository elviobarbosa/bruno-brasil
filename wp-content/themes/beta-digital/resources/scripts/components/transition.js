import barba from '@barba/core';
import anime from 'animejs/lib/anime.es.js';
import Menu from './menu';
import VimeoControl from './vimeo-control';

export default class Transition {

    constructor() {
        this.selector = '.js-scroll';
        this.init();
    }

    init() {
        barba.hooks.after(() => {
            new Menu();
            new VimeoControl();
        });
        barba.init({
            transitions: [{
                name: 'default-transition',
                leave(data) {
                    console.log(data)
                  // create your stunning leave animation here
                    anime({
                        targets: data.current.container,
                        opacity: 0
                    });
                },
                enter(data) {
                    console.log(data, 'fim')
                    anime({
                        targets: data.next.container,
                        opacity: 1
                    });
                  // create your amazing enter animation here
                }
            }]
        });
    }

    start(elements) {
        
    }
}
