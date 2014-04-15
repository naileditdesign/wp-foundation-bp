<?php get_header(); ?>

<div class="row">

	<div class="large-8 columns">

		<?php while (have_posts()) : the_post(); ?>

			<?php the_content();?>

		<?php endwhile; ?>

	</div>

	<div class="large-4 columns">

		<?php include(TEMPLATEPATH . '/sidebar.php'); ?>

	</div>

</div>

<?php get_footer(); ?>