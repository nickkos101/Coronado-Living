<?php get_header(); ?>
<main>
	<div class="container col-wrap">
		<div class="column two-thirds">
			<div class="content-area">
				<section class="blog-post building">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="gmap">
						<?php echo get_post_meta(get_the_ID(), 'googlemap', true); ?>
					</div>
					<div class="building-wrap">
						<h2>
							<?php the_title(); ?>
						</h2>
						<div class="facts-area">
							<h3>FACTS</h3>
							<?php echo apply_filters('the_content', get_post_meta(get_the_ID(), 'factsarea', true)); ?>
						</div>
						<div class="carousel">
							<?php imageGallery('neighborhoodimages'); ?>
						</div>
						<div class="building-content">
							<?php the_content(); ?>
						</div>
						<div class="buildings">
							<?php
							$featuredPosts = new WP_Query();
							$featuredPosts->query(array('post_type' => 'Buildings', 'posts_per_page' => 5));
							while ($featuredPosts->have_posts()) : $featuredPosts->the_post();
							?>
							<div class="building-list-item">
								<?php the_post_thumbnail(); ?>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<?php the_excerpt(); ?>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_query(); ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
</div>
</div>
<div class="column third">
	<?php get_sidebar(); ?>
</div>
</div>
</main>
<?php get_footer(); ?>