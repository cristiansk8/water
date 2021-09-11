<?php
  /**
   *
   Main Slider -> main_slider
    - Item Slider (repater) -> main_slider__item
      - Imagen de fondo -> main_slider__image
      - Imagen de fondo en mobile (opcional) -> main_slider__image_mobile
      - Texto -> main_slider__body
      - Vinculo -> main_slider__cta
   */

   $main_slider = get_field('main_slider');

  ?>
  <section class="main-slider">
    <div class="js-slider">
      <?php
      while(have_rows('main_slider')): the_row();
          $ms_image = get_sub_field('main_slider__image');
          $ms_image_mobile = get_sub_field('main_slider__image_mobile');
          $ms_text = get_sub_field('main_slider__body');
          $ms_link = get_sub_field('main_slider__cta');
        ?>
        <div class="main-slider__item">
          <?php if ($ms_link) : ?>
            <a href="<?php echo $ms_link; ?>">
          <?php endif; ?>
          <picture class="main-slider__image">
            <?php if ($ms_image_mobile) : ?>
              <source media="(max-width: 799px)" srcset="<?php echo esc_url($ms_image_mobile['url']); ?>">
            <?php endif;?>
            <?php if ($ms_image) : ?>
              <img src="<?php echo esc_url($ms_image['url']); ?>" alt="<?php echo esc_attr($ms_image['alt']); ?>"/>
            <?php endif; ?>
          </picture>
          <?php if ($ms_text) : ?>
            <div class="main-slider__caption container  <?php the_sub_field('color')?>">
             <?php echo $ms_text; ?>
            </div>
          <?php endif; ?>
          <?php if ($ms_link) : ?>
            </a>
          <?php endif; ?>
        </div>
        <?php
        endwhile; ?>
    </div>
    <div class="main-slider__pagination__dots js_gn_carousel__dots"></div>

  </section>
<?php
