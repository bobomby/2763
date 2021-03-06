<?php /* Template Name: archive template */ ?>
 <?php get_header(); ?>
 <div id = "wrapper" class = "clearfix">
	<main>
		 <b>archive template</b><br>
		 <b>Start WordPress Loop</b><br>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/post/thumbnail' ); ?>
			<?php get_template_part( 'template-parts/post/title' ); ?>
		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<b>End WordPress Loop</b>
	</main>
	<div id = "sidebar">
		<div id="sidebar-primary" class="sidebar">
			<?php get_sidebar(); ?>
		</div>
		
	</div> <!-- sidebar -->
</div><!-- wrapper -->
<?php get_footer(); ?>