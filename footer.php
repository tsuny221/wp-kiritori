        <!-- フッター　ここからfooter.php -->
        <footer class="footer">
          <span class="footer__scissors"><div>✂︎</div></span>
          <div class="logo">
            <a href="index.html"
              ><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="" class="logo__img"
            /></a>
          </div>
          <nav class="footer__nav">
            <ul class="footer__ul">
              <li class="footer__li"><a href="about.html">About</a></li>
              <li class="footer__li"><a href="blog.html">Blog</a></li>
              <li class="footer__li"><a href="contact.html">Contact</a></li>
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
