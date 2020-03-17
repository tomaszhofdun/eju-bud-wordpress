<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title></title>
</head>

<body <?php body_class(); ?>>
  <!-- top-footer -->
  <section id="top-footer" class="top-footer">
    <div class="wrapper">
      <?php
        // Polska Data
        $dzien = date('d');
        $dzien_tyg = date('l');
        $miesiac = date('n');
        $rok = date('Y');

        $miesiac_pl = array(1 => 'stycznia', 'lutego', 'marca', 'kwietnia', 'maja', 'czerwca', 'lipca', 'sierpnia', 'września', 'października', 'listopada', 'grudnia');

        $dzien_tyg_pl = array('Monday' => 'poniedziałek', 'Tuesday' => 'wtorek', 'Wednesday' => 'środa', 'Thursday' => 'czwartek', 'Friday' => 'piątek', 'Saturday' => 'sobota', 'Sunday' => 'niedziela');

        ?>
      <div class="row row__medium-6 top-footer__currentDate"><?php echo $dzien_tyg_pl[$dzien_tyg].", ".$dzien." ".$miesiac_pl[$miesiac]." ".$rok."r."; ?>
      </div>
      <div class="row row__medium-6 hiddencontent-md">
        <div class="top-footer__socials">
          <?php
          if (is_user_logged_in()) {?>
          <div class="top-footer__socials__icons">
            <a class="btn btn--red btn--medium" href="<?php echo wp_logout_url(); ?>"> <?php echo get_avatar(get_current_user_id(), 40, "", "", ["class"=>"verticalCenter"]); ?> Wyloguj</a>
          </div>

          <?php
        } else { ?>
          <div class="top-footer__socials__icons">
            <a class="btn btn--orange btn--medium" href="<?php echo esc_url(site_url("/wp-admin")) ?>">Zaloguj</a>
          </div>
          <?php }
         ?>

          <div class="top-footer__socials__icons"><a href="https://www.facebook.com/Zaklad-Og%C3%B3lnobudowlany-Patryk-Springer-285270644961803/" target="_blank"><img class="top-footer__socials__icons--facebook" src="<?php echo get_theme_file_uri("images/icons/facebook-icon-preview-1-400x400.png") ?>" alt=""></a></div>
          <div class="top-footer__socials__icons"><a href="mailto:patryk.springer@op.pl"><span class="icon <?php if(file_exists(dirname(__FILE__)."/icon-local.php")) {echo "icon-local";}  ?> icon--svg--envelope "></span><span class="top-footer__socials__icons--envelope">patryk.springer@op.pl</span> </a></div>
          <div class="top-footer__socials__icons"><span class="icon <?php if(file_exists(dirname(__FILE__)."/icon-local.php")) {echo "icon-local";}  ?> d icon--svg--telephone-symbol-button top-footer__socials__icons--telephone"></span>727 531 213</div>
        </div>
      </div>
    </div>
  </section>

  <!-- main-header -->
  <header class="main-header">
    <div class="wrapper">
      <div class="row__medium-2">
        <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>
        <a href="<?php echo site_url(); ?>"><img class='main-header__logo' src="<?php echo has_custom_logo()? $image[0]: get_theme_file_uri('/images/icons/logo_black.png')?>"></a>
      </div>
      <div class="row__medium-10">
        <h1 class="main-header__title <?php echo is_home() || is_front_page() ? '': 'main-header__title--big' ?>"><?php
        if (is_home()|| is_front_page()) {
            echo strtoupper(get_bloginfo("description"));
        } else {
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
          <?php echo strtoupper(wp_trim_words(get_the_title(), 3, "..."));
                }
            }
        }
        ?>
        </h1>
      </div>
    </div>

  </header>

  <!-- nav -->
  <header id="menu-header" class="wrapper--maxWidth menu-header">
    <div class="wrapper wrapper--noTopPadding">
      <nav class="menu-header__nav">
        <ul>
          <a href="<?php echo site_url(); ?>">
            <div class="menu-header__nav__icon-home">
              <span class="icon <?php if(file_exists(dirname(__FILE__)."/icon-local.php")) {echo "icon-local";}  ?> icon--svg--home-nav"></span>
            </div>
          </a>
          <li class="menu-header__nav--always-visible-button">&equiv;</li>
          <div class="menu-header__nav--toggleVisibility">
            <li><a id="oferta-link" href="<?php echo site_url("/#oferta"); ?>">OFERTA</a></li>
            <li><a id="nasze-realizacje-link" href="<?php echo site_url("/#nasze-realizacje"); ?>">NASZE REALIZACJE</a></li>
            <li><a class="<?php echo is_page("cennik")?"is-current-link":""; ?>" href="<?php echo site_url("/cennik") ?>">CENNIK</a></li>
            <li><a id="skontaktuj-sie-z-nami-link" href="<?php echo site_url("/#skontaktuj-sie-z-nami"); ?>">KONTAKT</a></li>
          </div>
        </ul>
      </nav>
    </div>
  </header>