<section id="servicios">
    <div class="servicios">
        <header>
            <h2>
                servicios
            </h2>
        </header>
        <?php
      while(have_rows('icons')): the_row();

        ?>
        <div class="card">
            <figure>
                <img src="<?php the_sub_field('icono') ?>" alt="">
            </figure>
            <p><?php the_sub_field('texto') ?></p>
        </div>
        <?php endwhile ?>
    </div>
</section>