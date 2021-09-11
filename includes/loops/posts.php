<?php

/**
 * Related News
 */
$paged = (get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
  'post_type' => 'post',
  'posts_per_page' => 9,
  'paged'          => $paged,
);

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="news news--related">

  <div class="container-fluid padding-contendor-elemetos">
    <div class="row">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item col-md-4">
        <div class="news__image image-ar image-ar--32">
        <a href="<?php the_permalink(); ?>" class="d-block">
            <picture class="news__image image-ar image-ar--32">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </pictute>
          </a>
        </div>
        <div class="block-beige">

        </div>
        <div class="news__caption">
          <h3 class="headline headline--4">
            <?php the_title(); ?>
          </h3>
          <p>
          <?php the_excerpt() ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="body body--bd">Leer más</a>
        </div>
      </div>
        <?php
    endwhile;
    ?>

    </div>
  </div>
</section>
    <?php
endif;
wp_reset_postdata();

if (function_exists('custom_pagination')) {
  custom_pagination($query->max_num_pages, "", $paged);
}