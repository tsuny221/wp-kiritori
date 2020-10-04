<!-- 固定ページテンプレート -->
<?php get_header(); ?>
  <?php if(have_posts()):?>
    <?php while(have_posts()):the_post();?>
      <div id="content">
        <div class="main-visual">
          <div class="main-visual__inner">
            <p class="main-visual__title main-title text-animation pop">
              <?php the_title();?>
            </p>
            <?php the_post_thumbnail( 'full', array( 'class' => 'main-visual__img' ) ); ?>
          </div>
        </div>
        <?php the_content();?>
      </div>
    <?php endwhile;?>
  <?php endif;?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
