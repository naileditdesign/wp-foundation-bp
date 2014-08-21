<?php get_header(); ?>

<div class="row">

<div class="large-8 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<div class="post" id="post-<?php the_ID(); ?>">
      
<h3><a href="<?php the_permalink() ?>" title="Click Image to read <?php the_title(); ?>"><?php the_title(); ?></a></h3>

<h4>Content</h4>

<?php the_content(); ?>

<h4>Excerpt</h4>

<p><?php echo excerpt(4); ?></p>

<h4>Time Ago</h4>

<p><?php k99_relative_time();?></p>

<h4>View Count</h4>

<p><?php echo getPostViews(get_the_ID()); ?></p>

<div id="shareme" data-url="<?php the_permalink();?>" data-text="Make your sharing widget with Sharrre (jQuery Plugin)"></div>
</div>

  
<?php endwhile; endif; ?>

</div>

<?php include(TEMPLATEPATH . '/sidebar.php'); ?>

</div>




<?php get_footer(); ?>