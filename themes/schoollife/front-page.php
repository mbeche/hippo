<?php get_header(); ?>

<?php
  $homepagePosts = new WP_Query(array(
    'posts_per_page' => 1,
'author_name' => 'Mellanie',
));

  while ($homepagePosts->have_posts()) {
    $homepagePosts->the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

<?php } wp_reset_postdata();
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
