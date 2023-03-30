<?php 
    $images = get_field('galeria_de_fotos', $args['id']);
?>

<div class="c-card-portfolio">
    <div class="c-card-portfolio__swiper" >
        <?php if( $images ): ?>
            <div class="swiper" data-params=<?php echo wp_json_encode($args['swiper_params']) ?>>
                <ul class="swiper-wrapper c-card-portfolio__wrapper">
                    <?php foreach( $images as $image_id ): ?>
                        <li class="swiper-slide c-card-portfolio__slide">
                            <div class="c-card-portfolio__image">
                                <?php echo wp_get_attachment_image( $image_id['ID'], 'large' ); ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul><!--swiper-wrapper-->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        <?php endif; ?>
        

        <div class="c-card-portfolio__head" <?php if (has_post_thumbnail()) echo 'style="display:grid"'; ?>>
            <?php if (has_post_thumbnail()) : ?>
                <div class="c-card-portfolio__head-logo"><?php the_post_thumbnail() ?></div>
            <?php endif; ?>
            <div class="c-card-portfolio__head-info">
                <?php 
                    the_title('<h3>','</h3>'); 
                    the_content();
                    //$products = get_product_thumbnail_rand(1, 3);
                ?>
                
            </div>
        </div>
        <!-- <span>Produtos utilizados</span> -->
        
        <!-- <ul class="c-card-portfolio__products">
            <?php 
                // while($products->have_posts()) : $products->the_post(); 
                //     $ID = get_the_ID();
            ?>
                    <li class="c-card-portfolio__products-item">
                        <a href="<?php //echo the_permalink() ?>">
                            <?php //the_post_thumbnail('medium'); the_title('<strong>','</strong>'); ?>
                        </a>
                    </li>
            <?php
                // endwhile;
                // wp_reset_postdata();
            ?>
        </ul> -->
    </div>
</div>