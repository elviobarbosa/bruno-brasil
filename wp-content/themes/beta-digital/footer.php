        <footer id="footer" class="footer">
            <div class="informations">
                <div class="informations__container">
                    <div class="informations__left">
                        <small>Fale com o </small>
                        <span>COMERCIAL</span>
                    </div>

                    <div class="informations__right">
                        <div class="informations__item">
                            <a href="<?php echo WHATSAPP_LINK_1 ?>">
                                <?php the_SVG('ico-wapp') ?>
                                <span>POR WHATSAPP</span>
                            </a>
                        </div>

                        <!-- <div class="informations__item">
                            <a href="/">
                                <?php the_SVG('ico-email') ?>
                                <span>POR EMAIL</span>
                            </a>
                        </div> -->

                       <!-- <div class="informations__item">
                            <a href="/">
                                <?php the_SVG('ico-telefone') ?>
                                <span>POR TELEFONE</span>
                            </a>
                        </div> -->

                       <div class="informations__item">
                            <a href="<?php echo site_url('/onde-comprar') ?>">
                                <?php the_SVG('ico-pin') ?>
                                <span>ONDE COMPRAR</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__container">
                <div class="footer__nav-container">
                <?php 
                    wp_nav_menu( 
                    array( 
                        'theme_location' 	=> 'footer-menu',
                        'menu_class'		=> 'footer__nav',
                        'container'			=> 'nav',
                        'container_class' 	=> 'footer__menu'
                    ) ); 
                ?>
                </div>

                <div class="footer__brand">
                    <ul>
                        <li><a href="<?php echo site_url('/')  ?>" alt="Voltar para o início"><?php the_SVG('logo-reduzida') ?></a></li>
                        <li><a href="https://www.facebook.com/duraplik.argamassas" target="_blank"><?php the_SVG('ico-facebook') ?></a></li>
                        <li><a href="https://www.instagram.com/duraplikargamassas/" target="_blank"><?php the_SVG('ico-instagram') ?></a></li>
                    </ul>
                    <p><a href="https://g.page/argamassasduraplik?share" target="_blank">Av. Principal - Pref. José Walter<br>Maracanaú - CE, 61931-050</a></p>
                </div>
            </div>

        </footer>

        <?php get_template_part('template-parts/products/calc'); ?>

    </body>
    <?php wp_footer() ?>
    <script type="module" src="<?php echo URLTEMA ?>/dist/scripts/bundle.js"></script>
</html>