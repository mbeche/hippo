<div class="menu" id="full">
  <div class="tabs">
    <a href="#">
      <div class="search">
        <div class="search-shadow"></div>
        <span class="fas">M</span>
        <img src='<?php echo get_bloginfo('template_directory'); ?>/img/search.png' class="search-text"/>
      </div>
    <div class="tab">
      <a href="#"><div class="tab"><div class="cast">Cast & Crew<div class="far">y</div></div></div></a>
      <a href="#"><div class="tab"><div class="vid">Videos<div class="far">V</div></div></div></a>
      <a href="#"><div class="tab"><div class="topics">Topics<div class="far">g</div></div></div></a>
      <a href="#"><div class="tab"><div class="archive" id="archive">Archive<div class="far">5</div></div></div></a>
    </div>
  </div>

  <div class="sidebar">

    <div class="blogger-posts">
      <div class="heading">Lastest posts from <span id="auth">Mellanie</span></div>
          <?php
            $homepagePosts = new WP_Query(array(
              'posts_per_page' => 5,
        'author_name' => 'Mellanie',
      ));

            while ($homepagePosts->have_posts()) {
              $homepagePosts->the_post(); ?>

        <a href="<?php the_permalink()?>">
        <div class="post"><?php the_title()?>
          <br><span class="date">posted on <?php the_time('F')?> <?php the_time('j')?>, <?php the_time('Y')?></span>
        </div>
        <hr>

      <?php } wp_reset_postdata();
    ?>
      <div class="post">
        <a href="#"><div class="button author-more">View All</div></a>
      </div>
    </div>

    <div class="recent-posts">
      <div class="heading">Latest posts</div>
          <?php
            $homepagePosts = new WP_Query(array(
              'posts_per_page' => 5 //default is 10 posts
            ));

            while ($homepagePosts->have_posts()) {
              $homepagePosts->the_post(); ?>

        <a href="<?php the_permalink()?>">
        <div class="post"><?php the_title()?>
          <br><em>by <?php the_author()?></em> <span class="date">posted on <?php the_time('F')?> <?php the_time('j')?>, <?php the_time('Y')?></span>
        </div>
        <hr>

      <?php } wp_reset_postdata();
    ?>
      <div class="post">
        <a href="#"><div class="button all-more">View All</div></a>
      </div>
    </div>
    <hr class="menu-hr"/>

    <div class="btm-menu">
      <a href="#">What is School Life?</a>
      <br/>
      <a href="#">Ask a Question</a>
      <br/>
      <a href="#">Live Broadcast Schedule</a>
      <br/>
      <a href="#">Join the Cast</a>
      <br/>
      <a href="#">Subscribe</a>
    </div>

    <hr class="menu-hr"/>

    <div class="recent-posts">
      <div class="copyright">&copy; 2012 School Life.</div>
    </div>

  </div>
</div>
