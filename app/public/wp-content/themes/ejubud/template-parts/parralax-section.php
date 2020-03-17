<div class="parralax-section">
  
    <?php
    $args__parallax = array(
        "post_type"=>"parallax"
      );
      $parallax_query = new WP_Query($args__parallax); ?>

      <?php if ($parallax_query->have_posts()) : ?>

      <?php while ($parallax_query->have_posts()) : $parallax_query->the_post(); 

      $parallax = get_field("pierwsze_tlo");
      $parallax_size_small = $parallax['sizes'][ "parallax-Small" ];
      $parallax_size_xlarge = $parallax['sizes'][ "parallax-XLarge" ];
      
      $parallax2 = get_field("drugie_tlo");
      $parallax2_size_small = $parallax2['sizes'][ "parallax-Small" ];
      $parallax2_size_xlarge = $parallax2['sizes'][ "parallax-XLarge" ];
      ?>

    <div class="parralax-section__img">
      <picture>
      <source class="lazyload" media="(min-width:1380px)" data-srcset=' <?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-XLarge")." 1920w"   ?>,  <?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-XLarge-hdpi")." 3840w"  ?>'>

      <source class="lazyload" media="(min-width:990px)" data-srcset="<?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-Large")." 1380w"   ?>,  <?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-Large-hdpi")." 2760w"  ?>">

      <source class="lazyload" media="(min-width:640px)" data-srcset="<?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-Medium")." 990w"   ?>,  <?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-Medium-hdpi")." 1980w"  ?>">

      <img class="lazyload" data-srcset="<?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-Small")." 640w"   ?>,  <?php echo get_the_post_thumbnail_url(get_the_ID(),"parallax-Small-hdpi")." 1280w"  ?>" alt="" /> 
      </picture>

    <h1 class="parralax-section__title">
      <?php echo esc_html( get_the_title() ); ?>
    </h1>
    </div>
    <!-- different image on mobile -->

    <div class="parralax-section__desktop-hidden">
    <div class="parralax-section parralax-section__bg lazyload" style='background-image: url("<?php echo $parallax_size_small ?>");'>
    
    <h1 class="parralax-section__title">
      <?php the_field("tytul_pierwszego_obrazka") ?>
    </h1>
    </div>
    <div class="parralax-section parralax-section__bg lazyload" style='background-image: url("<?php echo $parallax2_size_small ?>");'>
    <h1 class="parralax-section__title">
    <?php the_field("tytul_drugiego_obrazka") ?>
    </h1>
    </div>

    </div>
    <!-- different image on desktop -->
    <div class="parralax-section__mobile-hidden">
    <div class="parralax-section parralax-section__bg lazyload" style='background-image: url("<?php echo $parallax_size_xlarge ?>");'>
    
    <h1 class="parralax-section__title">
      <?php the_field("tytul_pierwszego_obrazka") ?>
    </h1>
    </div>
    <div class="parralax-section parralax-section__bg lazyload" style='background-image: url("<?php echo $parallax2_size_xlarge ?>");'>
    <h1 class="parralax-section__title">
    <?php the_field("tytul_drugiego_obrazka") ?>
    </h1>
    </div>

    </div>
    

    
    
    <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?>
    </p>
    <?php endif; ?>
  
  
</div>



