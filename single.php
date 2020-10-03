 <!-- メイン　ここからindex.php -->
 <?php get_header(); ?>
<div id="content">
<div class="main-visual">
  <div class="main-visual__inner">
    <p class="main-visual__title main-title text-animation pop">
      Blog
    </p>
    <?php the_post_thumbnail( 'full', array( 'class' => 'main-visual__img' ) ); ?>
  </div>
</div>
<!-- 記事 -->
<main class="blog blog-content">
  <article class="blog-main">
    <div class="blog__inner">
      <p class="blog-info fade-up">
        <span class="blog__date"><?php the_time('Y.m.d'); ?></span
        ><a href="" class="blog__category"><?php the_category(', '); ?></a>
      </p>
      <p class="main-title fade-up"><?php the_title(); ?></p>
      <div class="fade-up"><?php the_content(); ?></div>
    </div>
  </article>

  <div class="blog-side blog__inner">
    <div class="blog-side__inner scroll-up">
      <p class="side-title">Recent Entry</p>
      <ul>
        <li class="blog-side__li">
          <a href="#" class="blog-side__link">タイトル</a>
        </li>
      </ul>
    </div>
    <div class="blog-side__inner scroll-up">
      <p class="side-title">ARCHIVES</p>
      <ul>
        <li class="blog-side__li">
          <a href="#" class="blog-side__link">タイトル</a>
        </li>
      </ul>
    </div>
    <div class="blog-side__inner scroll-up">
      <p class="side-title">CATEGORY</p>
      <ul class="blog-side-title__ul">
        <li class="blog-side__li">
          <a href="#" class="blog-side__link">タイトル</a>
        </li>
      </ul>
    </div>
</div>
</main>
</div>
<!-- ここまでindex.php -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
