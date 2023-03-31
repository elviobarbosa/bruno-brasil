        <footer id="footer" class="footer">
            <div class="footer__container">
                <div class="footer__logo">
                    <figure>
                        <img src="<?php echo IMGPATH ?>/logo-color-compact.png" alt="Bruno Brasil">
                    </figure>
                </div>

                <div class="footer__contact">
                    <div class="footer__social">
                        <p class="footer__title">
                            <?php _e('FIND ME:') ?>
                        </p>
                        <ul>
                            <li>
                                <a href="" title="<?php _e('Follow me on Instagram') ?>">
                                    <?php the_SVG('ico-instagram') ?>
                                </a>
                            </li>
                            <li>
                                <a href="" title="<?php _e('Twitter') ?>">
                                <?php the_SVG('ico-twitter') ?>
                                </a>
                            </li>
                            <li>
                                <a href="" title="<?php _e('Linkedin') ?>">
                                    <?php the_SVG('ico-youtube') ?>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__immediate">
                        <p class="footer__title"><?php _e('CONTACT ME:') ?></p>
                        <ul>
                            <li><a href="tel:+5585981544771" title="<?php _e('Call me') ?>">+55 85 981544771</a></li>
                            <li><a href="mailto:bruno@brasil.com" title="<?php _e('Email me') ?>">BRUNO@BRBRASIL.COM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </body>
    <?php wp_footer() ?>
    <script type="module" src="<?php echo URLTEMA ?>/dist/scripts/bundle.js"></script>
</html>