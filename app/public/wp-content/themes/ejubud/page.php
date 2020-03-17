<?php get_header();?>
<?php

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
    <div id="skontaktuj-sie-z-nami" class="wrapper--scroll-positioner"></div>
    <form class="form" method="POST" action="mail.php">

    <h2 data-matching-link="#skontaktuj-sie-z-nami-link" class="wrapper form__container form__desc"><?php echo wp_strip_all_tags(get_the_content()); ?></h2>
    <h1 data-matching-link="#skontaktuj-sie-z-nami-link" class="form__title">SKONTAKTUJ SIĘ Z NAMI</h1>
    <div class="row__medium-8">
      <label class="form__labels" for="message">Twoja wiadomość*</label>
      <textarea class="form__textarea" rows="8" cols="65" type="text" id="message" name="message" placeholder="Witam, chciałbym zapytać......"></textarea>
    </div>
    <div class="row__medium-4 form__container">
      <label class="form__labels" for="fname">Imię</label>
      <input class="form__input" type="text" id="fname" name="fname">

      <label class="form__labels" for="email">Twój email*</label>
      <input class="form__input" type="email" id="email" name="email">

      <label class="form__labels" for="tel">Nr telefonu</label>
      <input class="form__input" type="tel" id="tel" name="tel">

      <input class="form__button" type="submit" value="Wyślij">
    </div>
  </form>
 
    <?php }
}

?>
<?php get_footer(); ?>