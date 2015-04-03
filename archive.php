<?php get_header(); ?>
<main>
	<div class="col-wrap container">
		<div class="column two-thirds">
			<div class="content-area">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<section class="blog-post">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<div class="meta-info">
						Posted on <?php the_date(); ?> | by <?php the_author(); ?>
					</div>
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('full', array('class' => " featured-image"));
					}  
					?>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>"><button>Read More</button></a>
				</section>
			<?php endwhile; endif; ?>
		</div>
	</div>
	<div class="column third">
		<?php get_sidebar(); ?>
	</div>
</div>
</main>
<?php get_footer(); ?>