<?php get_header(); ?>

<div class="large-12 columns">
    	
<ul class="example-orbit-content" data-orbit>

  <li data-orbit-slide="headline-1">
    <div>
      <h2>Headline 1</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-2">
    <div>
      <h2>Headline 2</h2>
      <h3>Subheadline</h3>
    </div>
  </li>
  <li data-orbit-slide="headline-3">
    <div>
      <h2>Headline 3</h2>
      <h3>Subheadline</h3>
    </div>
  </li>

</ul>

</div>

<div class="small-12 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<div class="post" id="post-<?php the_ID(); ?>">
    	
<h3><a href="<?php the_permalink() ?>" title="Click Image to read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<p><?php the_content(); ?>.</p>

</div>

	
<?php endwhile; endif; ?>

	


	 


<?php get_footer(); ?>