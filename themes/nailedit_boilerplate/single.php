<?php get_header(); ?>

<section>

<div class="content large-9 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
    	
        <div class="post-content">
        	 <h1><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h1>
        	<div class="content">
        		
        	
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			
			</div>
        </div>
    </div>
	
  <?php endwhile; endif; ?>
  
</div>

<?php include(TEMPLATEPATH . '/sidebar.php'); ?>

</section>

<?php get_footer(); ?>