<?php get_header(); ?>

<section class="row">

<div class="small-12 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<div class="post" id="post-<?php the_ID(); ?>">
      
<h3><a href="<?php the_permalink() ?>" title="Click Image to read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<p><?php the_content(); ?>.</p>

</div>

  
<?php endwhile; endif; ?>

  

</section>
   


<?php get_footer(); ?>