<img class="facebook-button" src="<?php echo get_theme_file_uri("/images/icons/facebook-blue-vertical-200.png") ?>" alt="">
<div class="facebook-plugin">

  <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
    <ul id="sidebar">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </ul>
    <?php endif; ?>
</div>