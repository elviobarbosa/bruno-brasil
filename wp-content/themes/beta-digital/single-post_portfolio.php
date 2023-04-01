<?php get_header(); ?>

<div data-barba="container" id="single-work-page" <?php body_class(); ?> >
    <div class="">
        <?php
            $n = 0;
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>