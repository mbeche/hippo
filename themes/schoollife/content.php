<div class="main">
  <div class="sub">
    <a href="#"><img class="headshot" src='<?php echo get_bloginfo('template_directory'); ?>/img/mellanie-post.png' />
    <div class="author">by <?php the_author(); ?></div></a>
    <h2><?php the_title(); ?></h2>
    <div class="date"><?php the_date(); ?></div>
       <?php the_content(); ?>
  </div>
  <div class="crosslist">
    <p class="categories"><span class="category">Categories:</span> <?php echo get_the_category_list(', '); ?></p>
	<p class="tags"><span class="tag">Tags</span>: <?php echo get_the_tag_list('', ', '); ?></p>
  </div>
</div>

<div class="bottom">
  <div class="page ">
          <h3>Share and Comment</h3>
          <img src='<?php echo get_bloginfo('template_directory'); ?>/img/comment.png' class="round" alt="Use plugin for this?"/>
  </div>
</div>
</div>
