import anime from 'animejs/lib/anime.es.js';

export default class Work {

    constructor() {
        this.selector = '#work-page';
        this.init();
    }

    init() {
        const selector = document.querySelector(this.selector);

        if (selector.length === 0) return;

        setTimeout( () => {
            anime({
                targets: '.c-card-video__bg',
                translateY: {
                    value: ['-=200px', 0],
                    duration: 500,
                    easing: 'easeInOutQuad'
                },
                delay: anime.stagger(100) // increase delay by 100ms for each elements.
            });
    
            anime({
                targets: '.back',
                height: 0,
                duration: 500,
                easing: 'easeInOutQuad',
                delay: anime.stagger(200) // increase delay by 100ms for each elements.
            });

        }, 1000)

        
    }
}
