<div id="nasze-realizacje" class="wrapper">
  <h1 data-matching-link="#nasze-realizacje-link" class="gallery-thumbnails__title">Ostatnie nasze realizacje</h1>
</div>

<div class="wrapper gallery-thumbnails ">

  <div class="gallery-thumbnails__button-left"><span class="icon <?php if(file_exists(dirname(__FILE__)."/icon-local.php")) {echo "icon-local";}  ?> icon--svg--play-button-left"></span></div>
  <div class="gallery-thumbnails__button-right"><span class="icon <?php if(file_exists(dirname(__FILE__)."/icon-local.php")) {echo "icon-local";}  ?> icon--svg--play-button-right"></span></div>


  <div class="wrapper--infinite gallery-thumbnails--slides">
    <?php

      $args = array(
        "post_type"=>"gallery"
      );
      $gallery_query = new WP_Query($args); ?>

    <?php if ($gallery_query->have_posts()) : ?>

    <?php while ($gallery_query->have_posts()) : $gallery_query->the_post(); ?>
    <div class="row gallery-thumbnails__container__slide row__gutter-left row__gutter-right">
      <div class="gallery-thumbnails__container">

        <?php

            $image_bigger = get_field("zdjecie_duze");
            $image_bigger_normal = $image_bigger['sizes'][ "galeria-wieksze" ];
            $image_bigger_lightbox = $image_bigger['sizes'][ "medium_large" ];

            $image_smaller_one = get_field("zdjecie_male");
            $image_smaller_one_normal = $image_smaller_one['sizes'][ "galeria-mniejsze" ];
            $image_smaller_one_lightbox = $image_smaller_one['sizes'][ "medium_large" ];

            $image_smaller_two = get_field("zdjecie_male_2");
            $image_smaller_two_normal = $image_smaller_two['sizes'][ "galeria-mniejsze" ];
            $image_smaller_two_lightbox = $image_smaller_two['sizes'][ "medium_large" ];

            ?>

        <a data-lightbox="gallery-modal" href="<?php echo esc_url($image_bigger_lightbox); ?>">
          <div class="gallery-thumbnails__container__big-img">
            <img class="lazyload gallery-thumbnails__img" data-src="<?php echo esc_url($image_bigger_normal); ?>">
          </div>
        </a>
        <a data-lightbox="gallery-modal" href="<?php echo esc_url($image_smaller_one_lightbox); ?>">
          <div class="gallery-thumbnails__container__small-img">
            <img class="lazyload gallery-thumbnails__img" data-src="<?php echo esc_url($image_smaller_one_normal); ?>">
          </div>
        </a>
        <a data-lightbox="gallery-modal" href="<?php echo esc_url($image_smaller_two_lightbox); ?>">
          <div class="gallery-thumbnails__container__small-img">
            <img class="lazyload gallery-thumbnails__img" data-src="<?php echo esc_url($image_smaller_two_normal); ?>">
          </div>
        </a>
        <p class="gallery-thumbnails__container__subtitle"><?php  echo get_the_title()? wp_trim_words(get_the_title(), 12, "..."):get_the_date()  ?>
        </p>
      </div>
    </div>


    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php _e('Brak zdjęć w galerii.'); ?>
    </p>
    <?php endif; ?>

  </div>
</div>