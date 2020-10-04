<?php get_header(); ?>
 <!-- 記事一覧ページ -->
          <main>
            <div class="main-content__inner">
              <section class="blog">
                <p class="blog__head main-title">
                  <?php if(is_month()):?>
                    <?php the_time('Y年m月');?>
                  <?php else:?>
                    <?php wp_title('');?>
                  <?php endif;?>
                </p>
                <!-- 記事一個分 -->
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                      <div class="blog__item scroll-up">

                        <div class="blog__img hover-animation">
                          <?php the_post_thumbnail('full'); ?>
                        </div>
                          <div class="blog__inner">
                            <p class="blog__title"><?php the_title(); ?></p>
                            <p class="blog__date"><?php the_date(); ?></p>
                            <p class="blog__text"><?php echo wp_trim_words(get_the_content(), 100, '...' ); ?></p>
                          </div>
                      </div>
                    </a>
                <?php endwhile; endif; ?>
                 <div class="page-nation"><?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?></div>
              </section>
            </div>
          </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
