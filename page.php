<?php get_header(); ?>
<div class="top-4">
	<div class="container">
		<div class="col-sm-12"><?php echo do_shortcode( '[breadcrumb]' ); ?><br></div>
		<div class="col-sm-3">
			<?php if (function_exists('sidebar-menu-1') || is_active_sidebar('sidebar-menu-1')): ?>
				<?php dynamic_sidebar('sidebar-menu-1'); ?>
			<?php endif; ?>
		</div>
		<div class="col-sm-9" id="maintext">		
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<h1 class="rdt-heading"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
