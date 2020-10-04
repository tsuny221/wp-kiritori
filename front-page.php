<?php get_header(); ?>
  <!-- トップページ -->
  <div id="content">
    <div class="slider main-visual">
      <div class="slider__catch fade-in">
        <img
          src="<?php echo get_template_directory_uri();?>/images/logo-white.png"
          alt=""
          class="slider__catch__img"
        />
        <p class="slider__catch__text">日常をきりとる</p>
      </div>
      <div class="slider__item fade-in">
        <img src="<?php echo get_template_directory_uri();?>/images/nichijo1.jpg" alt="" class="slider__img" />
        <img src="<?php echo get_template_directory_uri();?>/images/nichijo2.jpg" alt="" class="slider__img" />
        <img src="<?php echo get_template_directory_uri();?>/images/nichijo3.jpg" alt="" class="slider__img" />
      </div>
    </div>
    <main class="main-content">
      <div class="main-content__inner">
        <section class="blog">
          <p class="blog__head main-title">Blog</p>
          <!-- 記事一個分 -->
          <?php $wp_query = new WP_Query(); $posts = array('post_type' => 'post');
          $wp_query->query( $posts );
          if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();?>
              <a href="<?php the_permalink(); ?>">
                <div class="blog__item scroll-up">

                  <div class="blog__img hover-animation">
                    <?php the_post_thumbnail('full'); ?>
                  </div>
                    <div class="blog__inner">
                      <p class="blog__title"><?php the_title(); ?></p>
                      <p class="blog__date"><?php the_date(); ?></p>
                      <p class="blog__text"><?php echo wp_trim_words( get_the_content(), 100, '...' ); ?></p>
                    </div>
                </div>
              </a>
          <?php endwhile; endif; ?>
          <div class="page-nation"><a href="<?php echo home_url('/blog');?>">ブログ一覧へ</a></div>
        </section>
      </div>
    </main>
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
