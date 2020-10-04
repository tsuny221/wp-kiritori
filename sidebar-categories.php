<div class="blog-side__inner scroll-up">
      <p class="side-title">Category</p>
      <ul class="blog-side__list">
          <?php $args=array('title_li'=>'');wp_list_categories($args);?>
      </ul>
</div>
