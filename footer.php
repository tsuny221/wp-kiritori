        <!-- フッター　ここからfooter.php -->
        <footer class="footer">
          <span class="footer__scissors"><div>✂︎</div></span>
          <div class="logo">
            <a href="<?php echo home_url();?>"
              ><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" class="logo__img"
            /></a>
          </div>
          <nav class="footer__nav">
            <ul class="footer__ul">
              <li class="footer__li"><a href="<?php echo home_url('/about');?>">About</a></li>
              <li class="footer__li"><a href="<?php echo home_url('/blog');?>">Blog</a></li>
              <li class="footer__li"><a href="<?php echo home_url('/contact');?>">Contact</a></li>
            </ul>
            <div class="footer__copyright">&copy; tsuny</div>
          </nav>
        </footer>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
<!-- ここまでfooter.php -->
