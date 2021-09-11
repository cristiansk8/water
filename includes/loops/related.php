<?php

/**
 * Related News
 */

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3
  );

$query = new WP_Query($args);

if ($query->have_posts() ) : ?>
<section class="proyects news--related">
  <header class="section__headline">
    <h2>
      ¡Mira lo último!
    </h2>
  </header>
  <div class="container-fluid padding-contendor-elemetos">
    <div class="row">
    <?php
    while($query->have_posts()):$query->the_post();
        ?>
      <div class="news__item col-md-4">
          <a href="<?php the_permalink(); ?>" class="d-block">
            <picture class="news__image image-ar image-ar--32">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </pictute>
          </a>
        <div class="news__caption">
          <h3 class="headline headline--4">
            <?php the_title(); ?>
          </h3>
          <p>
          <?php the_excerpt() ?>
          </p>
          <a href="<?php the_permalink(); ?>" class="body body--bd">Saber más</a>
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