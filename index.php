<?php get_header(); ?>

<div id="content" class="row">

	<div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">

		<?php if (have_posts()) : ?>
		<div class="container">
                <div class="row">
		<?php while (have_posts()) : the_post(); ?>


                  <div class="col-xs-6 col-md-4">
		  <?php
		    $before_more = explode('<!--more-->', $post->post_content)[0];
                  ?>
                    <a href="<?php echo the_permalink(); ?>" class="thumbnail">
            		<?php echo $before_more; ?>
                    </a>
                 </div>

		<?php endwhile; ?>
                </div>
		</div>

<!--		<?php simple_boostrap_page_navi(); ?>	-->

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
