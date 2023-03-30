<?php
/* Template name: Front Page */
get_header();
?>

<main id="front-page" <?php post_class('front-page__grid') ?>>
    <?php
    $loop = new WP_Query( array(
		'post_type'         => 'post_portfolio', 
		'posts_per_page'    => 7,
	));
    $n = 0;
	while($loop->have_posts()) : $loop->the_post();
		$video_url = get_field('video_url', $loop->ID);
        get_template_part('template-parts/home/hero', null, [
            'class'    => 'js-on-play', 
            'id'       => $n,
            'video_id' => beta_vimeo_url( $video_url )
        ]);
        $n += 1;

    endwhile;
    wp_reset_postdata();
    ?>
</main>
 
<?php
get_footer();
?>