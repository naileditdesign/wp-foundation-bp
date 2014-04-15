<?php get_header(); ?>
<section>
	<div class="row">
	
		<div class="content full-12 columns">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
     <h1><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h1>
        <div class="post-content">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </div>
    </div>
	
  <?php endwhile; endif; ?>



</div>
</div>
<!--<?php include(TEMPLATEPATH . '/sidebar-right.php'); ?>-->

</section>
<?php get_footer(); ?>