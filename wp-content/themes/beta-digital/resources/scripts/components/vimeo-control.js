import $ from 'jquery';
import Player from '@vimeo/player';
import { isMob } from '../utils/utils';
import { visibleElement } from './visible-element';

function getPlayer(videoContainer) {
    const $iframe = $('iframe', videoContainer);
    const id = $iframe.attr('id');
    const player = new Player(id);
    return { player, id };
}

export default class VimeoControl {

    constructor() {
        this.selector = '.js-on-play';
        console.log(this.selector)
        this.init();
    }

    init() {
        const $selectors = $(this.selector);

        if ($selectors.length > 0) {
            this.start($selectors);
        }
    }

    start($elements) {

        if ( isMob() ) {
            const $firstVideo = new Player('player0');
            $firstVideo.play().then(function() {
                // the video was played
            }).catch(function(error) {
                switch (error.name) {
                    case 'PasswordError':
                        // the video is password-protected and the viewer needs to enter the
                        // password first
                        break;
            
                    case 'PrivacyError':
                        // the video is private
                        break;
            
                    default:
                        // some other error occurred
                        break;
                }
            });

            $(window).on("scroll", function() {
                var scrollPosition =  $(window).scrollTop();
                
                $elements.each(function () {
                    const vimeoPlayer = getPlayer(this);

                    if ( visibleElement(`#${vimeoPlayer.id}`).full === true ) {
                        vimeoPlayer.player.play().then(function() {
                            // the video was played
                        }).catch(function(error) {
                            switch (error.name) {
                                case 'PasswordError':
                                    // the video is password-protected and the viewer needs to enter the
                                    // password first
                                    break;
                        
                                case 'PrivacyError':
                                    // the video is private
                                    break;
                        
                                default:
                                    // some other error occurred
                                    break;
                            }
                        });
                    } else {
                        vimeoPlayer.player.pause();
                    }
                });
                
            });
        }

        $elements.each(function (index) {
            const $vimeoBox = $(this);
            
            if ( !isMob() ) {
                $vimeoBox.on('mouseover', () => {
                    const vimeoPlayer = getPlayer(this);

                    vimeoPlayer.player.play().then(function() {
                        // the video was played
                    }).catch(function(error) {
                        switch (error.name) {
                            case 'PasswordError':
                                // the video is password-protected and the viewer needs to enter the
                                // password first
                                break;
                    
                            case 'PrivacyError':
                                // the video is private
                                break;
                    
                            default:
                                // some other error occurred
                                break;
                        }
                    });
                });

                $vimeoBox.on('mouseleave', () => {
                    const vimeoPlayer = getPlayer(this);

                    vimeoPlayer.player.pause()
                })
            }
        });
    }
}
