<?php
$args = array(
        "post_type"=>"page",
        "name"=>"co-mozemy-dla-ciebie-zrobic"
      );
      $uslugi_query = new WP_Query($args); ?>

<?php if ($uslugi_query->have_posts()) : ?>

<?php while ($uslugi_query->have_posts()) : $uslugi_query->the_post(); ?>
<?php $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium-large');  ?>

<?php
$thumbnail_background = 'background-image: url('.$large_image_url[0].')';


$thumbnail_background_style = "thumbnail_background_style";

?>

<div id="oferta" class="offer <?php if($large_image_url) {echo $thumbnail_background_style; }?>" style='<?php if($large_image_url) {echo $thumbnail_background; }?>'>


	<div class="row">
		<h1 data-matching-link="#oferta-link" class="offer__title"><?php the_title(); ?>
		</h1>
		<div class="row__medium-6">
			<ul class="offer__list">
				<?php
                                    // check if the repeater field has rows of data
                                                    if (have_rows('uslugi_lewa_kolumna')):
                                        // loop through the rows of data
                                        while (have_rows('uslugi_lewa_kolumna')) : the_row();
                                            foreach (get_field('uslugi_lewa_kolumna') as $item) {
                                                if ($item) {
                                                    echo '<li>'.$item.'</li>';
                                                }
                                            }
                                        endwhile;
                                    else :

                                        // no rows found

                                    endif;

                                    ?>
			</ul>
		</div>
		<div class="row__medium-6">
			<ul class="offer__list">
				<?php
                                    // check if the repeater field has rows of data
                                    if (have_rows('uslugi_prawa_kolumna')):
                                        // loop through the rows of data
                                        while (have_rows('uslugi_prawa_kolumna')) : the_row();
                                            foreach (get_field('uslugi_prawa_kolumna') as $item) {
                                                if ($item) {
                                                    echo '<li>'.$item.'</li>';
                                                }
                                            }
                                        endwhile;
                                    else :

                                        // no rows found

                                    endif;

                                    ?>
			</ul>
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
<?php endif;
