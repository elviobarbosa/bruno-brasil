<?php
/* Template name: Front Page */
get_header();

$video_format = [
    'c-card-video--hero',
    'c-card-video--horizontal',
    'c-card-video--horizontal',
    'c-card-video--line',
    'c-card-video--square',
    'c-card-video--square',
    'c-card-video--square'
];
?>

<main id="front-page">
    <div class="front-page__grid">
        <?php
        $loop = new WP_Query( array(
            'post_type'         => 'post_portfolio', 
            'posts_per_page'    => 7,
        ));
        $n = 0;
        while($loop->have_posts()) : $loop->the_post();
            $video_url = get_field('video_url', $loop->ID);
            get_template_part('template-parts/components/card-video', null, [
                'class'    => 'js-on-play ' . $video_format[$n], 
                'id'       => $n,
                'video_id' => beta_vimeo_url( $video_url )
            ]);
            $n += 1;

        endwhile;
        wp_reset_postdata();
        ?>
    </div>

    <div class="c-more">
        <a href="<?php home_url("/work") ?>" >SEE +</a>
    </div>
</main>
 
<?php
get_footer();
?>