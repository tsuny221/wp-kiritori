<?php get_header(); ?>
        <!-- メイン　ここからindex.php -->
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
                <a href="#">
                  <div class="blog__item scroll-up">
                    <!-- <span class="blog__category">Category</span> -->
                    <div class="blog__img hover-animation">
                      <img src="<?php echo get_template_directory_uri();?>/images/melon.jpg" alt="" class="" />
                    </div>
                    <div class="blog__inner">
                      <p class="blog__title">日常を切り取る</p>
                      <p class="blog__date">2020.07.29</p>
                      <p class="blog__text">
                        くまもとアートポリス事業の設計競技を経て実際に建てられた公衆トイレ。
                        （入選当時は在学中であったため、実施設計及び現場監理はA.I.R（設計事務所/熊本市）と共同体を組み竣工に至る）
                      </p>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="blog__item scroll-up">
                    <!-- <span class="blog__category">Category</span> -->
                    <div class="blog__img hover-animation">
                      <img src="<?php echo get_template_directory_uri();?>/images/melon.jpg" alt="" class="" />
                    </div>
                    <div class="blog__inner">
                      <p class="blog__title">日常を切り取る</p>
                      <p class="blog__date">2020.07.29</p>
                      <p class="blog__text">
                        くまもとアートポリス事業の設計競技を経て実際に建てられた公衆トイレ。
                        （入選当時は在学中であったため、実施設計及び現場監理はA.I.R（設計事務所/熊本市）と共同体を組み竣工に至る）
                      </p>
                    </div>
                  </div>
                </a>
                <a href="#">
                  <div class="blog__item scroll-up">
                    <!-- <span class="blog__category">Category</span> -->
                    <div class="blog__img hover-animation">
                      <img src="<?php echo get_template_directory_uri();?>/images/melon.jpg" alt="" class="" />
                    </div>
                    <div class="blog__inner">
                      <p class="blog__title">日常を切り取る</p>
                      <p class="blog__date">2020.07.29</p>
                      <p class="blog__text">
                        くまもとアートポリス事業の設計競技を経て実際に建てられた公衆トイレ。
                        （入選当時は在学中であったため、実施設計及び現場監理はA.I.R（設計事務所/熊本市）と共同体を組み竣工に至る）
                      </p>
                    </div>
                  </div>
                </a>
                <a href="blog.html" class="blog__inner">
                  <div class="blog__item scroll-up">
                    <!-- <span class="blog__category">Category</span> -->
                    <div class="blog__img hover-animation">
                      <img src="<?php echo get_template_directory_uri();?>/images/melon.jpg" alt="" />
                    </div>
                    <div class="blog__inner">
                      <p class="blog__title">日常を切り取る</p>
                      <p class="blog__date">2020.07.29</p>
                      <p class="blog__text"></p>
                    </div>
                  </div>
                </a>
              </section>
            </div>
          </main>
        </div>
        <!-- ここまでindex.php -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
