<!-- footer -->
<div class="wrapper__maxWidth text-center">
  <footer class="footer row">
    <!-- wordpress menu -->
    <?php wp_nav_menu(array(
            "theme_location"=>"footer",
            "menu_class"=>"footer__list",
            "fallback_cb"=>"false",
            "container"=>"div",
            "container_class"=>"row__medium-3",
          ));  ?>

    <div class="row__medium-3">
      <ul class="footer__list">
        <li><a id="oferta-link" href="<?php echo site_url("/#oferta"); ?>">Oferta</a></li>
        <li><a id="nasze-realizacje-link" href="<?php echo site_url("/#nasze-realizacje"); ?>">Realizacje</a></li>
        <li><a href="<?php echo site_url("/cennik") ?>">Cennik</a></li>
        <li><a id="skontaktuj-sie-z-nami-link" href="<?php echo site_url("/#skontaktuj-sie-z-nami"); ?>">Kontakt</a></li>
      </ul>
    </div>
    <div class="row__medium-3">
      <a href="<?php echo site_url(); ?>"><img class="lazyload footer__logo" src="<?php echo get_theme_file_uri("/images/icons/logo_white.png") ?>" alt=""></a>
    </div>
    <div class="row__medium-3">
      <p class="footer__follows">Śledź nas na <a href="https://www.facebook.com/Zaklad-Og%C3%B3lnobudowlany-Patryk-Springer-285270644961803/" target="_blank"><img class="lazyload footer__facebook" data-src="<?php echo get_theme_file_uri("/images/icons/facebook.png") ?>" alt=""></a> </p>
    </div>
    <div class="footer__license">
      <div class="row row__medium-12">
        <div>Copyright © 2020<a href="" title="Tomasz Hofdun" target="_blank"> Tomasz Hofdun</a> </div>
        <div>Icons made by- <a href="https://www.flaticon.com/authors/dave-gandy" title="Dave Gandy">Dave Gandy</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a> <span>Icons made by Smashicons from www.flaticon.com</span> </div>
        <div>Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
      </div>
    </div>
</div>

<!-- Scroll to top icon -->

<a class="scrollToTopIcon" href="#top-footer"><span class="icon <?php if(file_exists(dirname(__FILE__)."/icon-local.php")) {echo "icon-local";}  ?> icon--svg--arrow-up-on-a-black-circle-background "></span></a>

</footer>

<?php wp_footer(); ?>
</body>

</html>