<?php get_header(); ?>

<div data-barba="container" id="work-page" <?php body_class(); ?> >
    <div class="work__grid">
        <?php
            $n = 0;
            while (have_posts()) : the_post();
                $video_url = get_field('video_url', $loop->ID);
                get_template_part('template-parts/components/card-video', null, [
                    'class'    => 'js-on-play c-card-video--square', 
                    'id'       => $n,
                    'video_id' => beta_vimeo_url( $video_url )
                ]);
                $n += 1;
            endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>