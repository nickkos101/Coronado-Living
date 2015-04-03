<?php get_header(); ?>
<main>
	<div class="container col-wrap">
		<div class="column two-thirds">
			<div class="content-area">
				<section class="blog-post">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</section>
		</div>
	</div>
	<div class="column third">
		<?php get_sidebar(); ?>
	</div>
</div>
</main>
<?php get_footer(); ?>