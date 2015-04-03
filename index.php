<?php get_header(); ?>
<main>
	<?php $themeoptions = get_option('main_theme_options'); ?>
	<div class="slider">
		<div class="slide-bank">
			<div class="slide">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slide-three.jpg">
			</div>
			<div class="slide">
				<img src="<?php echo get_template_directory_uri(); ?>/images/slide-three.jpg">
			</div>
		</div>
		<div class="overlay">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
	</div>
	<div class="container">
		<div class="content-area home-gradient">
			<section class="blog-post column two-thirds">
				<h2><b>Coronado</b> Real Estate</h2>
				<hr>
				<?php 
				query_posts( 'posts_per_page=1&pagename=coronado-real-estate-agent' );
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_post_thumbnail('full'); ?>
				<?php the_content(); ?>
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</section>
	<aside class="column third blog-post">
		<h2><b>New</b> Listings</h2>
		<hr>
		<ul>
			<?php
			$sliderPosts = new WP_Query();
			$sliderPosts->query(array('showposts' => 5));
			while ($sliderPosts->have_posts()) : $sliderPosts->the_post();
			?>
			<li>
				<?php the_post_thumbnail(); ?>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</li>
		<?php endwhile; ?>
	</ul>
</aside>
</div>
</div>
</main>
<?php get_footer(); ?>