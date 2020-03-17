<?php

      $args_gallery_upper = array(
        "post_type"=>"gallery-upper"
      );
      $gallery_upper_query = new WP_Query($args_gallery_upper); ?>

    <?php if ($gallery_upper_query->have_posts()) : ?>

    <?php while ($gallery_upper_query->have_posts()) : $gallery_upper_query->the_post(); 
    
      $galeria_gorna_big = get_field("zdjecie_duze");
      $galeria_gorna_big_size = $galeria_gorna_big['sizes'][ "galeria_gorna-duze" ];
      $galeria_gorna_small_screen = $galeria_gorna_big['sizes'][ "parallax-Small" ];

      $galeria_gorna_small = get_field("zdjecie_male");
      $galeria_gorna_small_size = $galeria_gorna_small['sizes'][ "galeria_gorna-male" ];

      $galeria_gorna_small_2 = get_field("zdjecie_male_2");
      $galeria_gorna_small_size_2 = $galeria_gorna_small_2['sizes'][ "galeria_gorna-male" ];

      $galeria_gorna_medium = get_field("zdjecie_srednie");
      $galeria_gorna_medium_size = $galeria_gorna_medium['sizes'][ "galeria_gorna-srednie" ];
    
    ?>



    <div id="main-section" class="main-section">
  <div class="wrapper main-section--smaller-padding">
    <div class="row">
      <div class="row__medium-8 row__gutter-right-md">
        <div class="large-hero">
          <img class="large-hero__bar" src="<?php echo get_theme_file_uri("/images/gif/gif-zadzwon-blue.gif") ?>" alt="" />
          <picture>
            <source sizes="739px" media="(min-width:500px)" srcset="<?php echo esc_url($galeria_gorna_big_size); ?>" /> 
            <img class="large-hero__image" src="<?php echo esc_url($galeria_gorna_small_screen); ?>" alt="" />
          </picture>
          <div class="large-hero__frame">
            <div class="large-hero__text-content">
              <h1 class="large-hero__title">
                <?php echo get_the_title(); ?>
              </h1>
              <a class="btn btn--transparent btn--large" href="#oferta">
                <?php echo get_field("przycisk") ?>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row__medium-4 ">
        <!-- pierwszy obrazek -->
        <div class="mini-gallery mini-gallery--md-none row__small-6 row__gutter-left-md row__gutter-right-sm row__gutter-bottom-md">
          <div class="mini-gallery__container">
            <picture>
              <img src="<?php echo esc_url($galeria_gorna_small_size);  ?>" alt="" />
            </picture>
          </div>

          <a class="btn btn--transparent btn--large mini-gallery__button" id="nasze-realizacje-link" href="#nasze-realizacje">GALERIA</a>

        </div>
        <!-- drugi obrazek -->
        <div class="mini-gallery mini-gallery--md-none row__small-6 row__gutter-left row__gutter-right-md row__gutter-bottom-md ">
          <div class="mini-gallery__container">
            <picture>
              <img src="<?php echo esc_url($galeria_gorna_small_size_2);  ?>" alt="" />
            </picture>
          </div>
          <a class="btn btn--transparent btn--large mini-gallery__button" id="nasze-realizacje-link" href="#nasze-realizacje">GALERIA</a>

        </div>
        <!-- trzeci obrazek -->
        <div class="mini-gallery mini-gallery--md-none row__small-12 row__gutter-left-md  row__gutter-right-md row__gutter-top-md ">
          <div class="mini-gallery__container">
            <img src="<?php echo esc_url($galeria_gorna_medium_size);  ?>" alt="" />
          </div>
          <a class="btn btn--transparent btn--large mini-gallery__button" id="nasze-realizacje-link" href="#nasze-realizacje">GALERIA</a>

        </div>
      </div>

    </div>
  </div>
</div>

      </div>
    </div>


    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

    <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?>
    </p>
    <?php endif; ?>
