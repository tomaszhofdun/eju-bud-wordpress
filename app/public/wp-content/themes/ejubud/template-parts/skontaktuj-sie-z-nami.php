<div class="wrapper--scroll-positioner"></div>
<form class="form" method="POST" action="/wp-content/themes/ejubud/mail.php">
  <h1 id="skontaktuj-sie-z-nami" data-matching-link="#skontaktuj-sie-z-nami-link" class="form__title">SKONTAKTUJ SIĘ Z NAMI</h1>
  <div class="row__medium-8">
    <label class="form__labels" for="message">Twoja wiadomość*</label>
    <textarea class="form__textarea" rows="8" cols="65" type="text" id="message" name="message" placeholder="Witam, chciałbym zapytać......" required></textarea>
  </div>
  <div class="row__medium-4 form__container">
    <label class="form__labels" for="fname">Imię*</label>
    <input class="form__input" type="text" id="fname" name="fname" required>

    <label class="form__labels" for="email">Twój email*</label>
    <input class="form__input" type="email" id="email" name="email" required>

    <label class="form__labels" for="tel">Nr telefonu</label>
    <input class="form__input" type="tel" id="tel" name="tel">

    <input class="form__button" type="submit" value="Wyślij">
  </div>
</form>