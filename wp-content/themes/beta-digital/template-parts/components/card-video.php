<div class="c-card-video <?php echo $args['class'] ?>">
	<div class="flip">
		<div class="c-card-video__bg">
			
			<div class="c-card-video__inner">
				<iframe width="640" height="360" class="c-card-video__video" loading="lazy"
				frameborder="0" id="player<?php echo esc_attr( $args['id'] ); ?>" allow="autoplay;" allowfullscreen=""
				webkitallowfullscreen="" mozallowfullscreen=""
				src="<?php echo esc_attr( $args['video_id'] ); ?>" data-ready="true">
				</iframe>
			</div>

			<section class="c-card-video__content">
				<h1 class="c-card-video__title"><?php the_title() ?></h1>
				<h3 class="c-card-video__description"><?php echo 'çhar' ?></h3>
			</section>
			
		</div>
		<div class="back"></div>
	</div>
	<a href="#" class="c-card-video__link"></a>
</div>