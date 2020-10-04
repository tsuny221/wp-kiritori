<div class="blog-side__inner scroll-up">
      <p class="side-title">Recent Entry</p>
      <?php $wp_query = new WP_Query(); $posts = array('post_type' => 'post','posts_per_page'=> '6',);
          $wp_query->query( $posts );
          if( $wp_query->have_posts() ): while( $wp_query->have_posts() ) : $wp_query->the_post();?>
      <ul class="blog-side__list">
          <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </li>
      </ul>
       <?php endwhile; endif; ?>
</div>
