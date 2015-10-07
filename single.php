<?php get_header(); ?>

<div id="content" class="row">

	<div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="embed-responsive embed-responsive-16by9">
		<?php
			$after_more = explode('<!--more-->', $post->post_content);
			if( $after_more[1] ) {
				echo $after_more[1];
			} else {
				echo $after_more[0];
			}
		?>
		</div>
		<?php endwhile; ?>

		<?php else : ?>

		<article id="post-not-found" class="block">
		    <p><?php _e("No posts found.", "simple-bootstrap"); ?></p>
		</article>

		<?php endif; ?>

	</div>

	<!--<?php get_sidebar("left"); ?>
	<?php get_sidebar("right"); ?>-->

</div>

<?php get_footer(); ?>
