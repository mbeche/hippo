<?php get_header(); ?>

<div class="intro">
  <div class="mellanie-bio">
  <img class="mellanie-full" src="<?php echo get_bloginfo('template_directory'); ?>/img/mellanie-full.png">
    <div class="heading">
      Mellanie
    </div>
    <div class="bio-text">
		<span id="bio">
			<p>Junior<br>From South Lake, Mississippi</p>
		</span>
		<p>
      Tootsie roll pie ice cream candy <br>pastry wafer. Marshmallow marshmallow dessert. Cookie marshmallow chocolate gummi bears cake jelly-o.
		</p>

		<p>
Candy canes pie jujubes bonbon toffee bear claw macaroon. Toffee sweet roll cotton candy tootsie roll toffee sesame snaps. Fruitcake caramels bear claw pudding macaroon lollipop.
		</p>

		<p>
Chocolate sesame snaps jujubes dessert icing pudding pastry. Tart jelly beans marzipan pie jujubes.
		</p>
		<br>
		<a href="https://www.twitter.com/mdevstix"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/twitter.png"></a>&nbsp;&nbsp;
		<a href="https://github.com/mbeche"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/rss.png"></a>
		<br>
    </div>

  </div>
</div>

<div class="main">

<?php
  $homepagePosts = new WP_Query(array(
    'posts_per_page' => 5,
'author_name' => 'Mellanie',
));

	while ($homepagePosts->have_posts()) {
    $homepagePosts->the_post(); ?>
<a href="<?php the_permalink()?>">
        <div class="sub">
          <h2><?php the_title(); ?></h2>
          <div class="date"><?php the_date(); ?></div>
             <?php the_excerpt(); ?>
        </div>
        <div class="crosslist">
          <p class="categories"><span class="category">Categories:</span> <?php echo get_the_category_list(', '); ?></p>
      	<p class="tags"><span class="tag">Tags</span>: <?php echo get_the_tag_list('', ', '); ?></p>
        </div>
	<br><hr><br>
	</a>
<?php } wp_reset_postdata();
?>

</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
