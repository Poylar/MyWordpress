<section class="section relative projects">
  <div class="title__left">
    Портфолио
  </div>

  <div class="container row align-center space-between">
    <div class="section__title">
      Наши проекты
    </div>
    <div class="tab-nav__wrapper projects__category row align-center">
      <?php
      $args = array(
        'taxonomy'      => 'type',
      );

      $terms = get_terms($args);

      foreach ($terms as $key => $term) :
      ?>
        <div class="tab-nav__item category__item <?php if (($key + 1) == 1) : echo 'active';
                                                  endif;
                                                  ?>" data-tab="<?= $key + 1 ?>">
          <?= $term->name ?>
        </div>
      <?php
      endforeach;
      ?>
    </div>
  </div>

  <div class="margin__container">
    <div class="projects__wrapper">
      <?php
      foreach ($terms as $key => $term) :
        $query = new WP_Query(array(
          'post_type' => 'projects',
          'tax_query' => array(
            array(
              'taxonomy' => 'type',
              'field' => 'slug',
              'terms' => $term->slug,
            )
          )
        ));
      ?>
        <div class="swiper tab-content 
        <?php
        if (($key + 1) == 1) :
          echo 'active';
        endif;
        ?>" data-content="<?= $key + 1 ?>
        ">
          <div class="swiper-wrapper ">
            <?php
            if ($query->have_posts()) {
              while ($query->have_posts()) {
                $query->the_post();
                setup_postdata($post)
            ?>

                <div class="swiper-slide tab-content_item">
                  <a href="<?php the_permalink(); ?>">
                    <div class="slide-description">
                      <?php the_field('desc-slider'); ?>
                    </div>
                    <div class="slide-image">
                      <img src="<?php the_field('front-slider-img', $post); ?>" alt="">
                    </div>
                  </a>
                </div>

            <?php
              }
            }

            ?>
          </div>
          <div class="container navigation-container row space-between">
            <div class="k">
              <a href=" <?php echo get_term_link($term); ?>">
                Перейти в портфолио
              </a>
            </div>
            <div class="navigation ">
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      <?php
      endforeach;
      wp_reset_postdata($post);
      ?>
    </div>

  </div>
</section>