<section class="section slider__container oh">
  <div class="swiper services__slider container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide__inner">
          <h2 class="section__title title__slide">
            <?php the_field('fs_title'); ?>
          </h2>
          <div class="description__slide">
            <?php the_field('fs_desc'); ?>
          </div>
        </div>
      </div>
      <?php if (have_rows('slider')) : ?>

        
        <?php while (have_rows('slider')) : the_row(); ?>

          <div class="swiper-slide">
            <div class="slide__inner">
              <div class="number__slide">
                0<?= get_row_index(); ?>

              </div>
              <div class="title__slide">
                <?php the_sub_field('title'); ?>
              </div>
              <div class="description__slide">
                <?php the_sub_field('desc'); ?>
              </div>
              <?php $images = get_sub_field('technology');
              if ($images) : ?>
                <div class="technology__slide">
                  <?php foreach ($images as $image) : ?>
                    <div class="technology__logo">
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <?php if (get_sub_field('link') || get_sub_field('p_lik')) : ?>
                <div class="navigation__slide">
                  <div class="navigation__more btn btn__blue">
                    <a href="<?php the_sub_field('link'); ?>">
                      Подробности
                    </a>
                  </div>
                  <div class="navigation__portfolio">
                    <a href="<?php the_sub_field('p_link'); ?>">

                      Смотреть портфолио

                    </a>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          </div>

        <?php endwhile; ?>

      <?php endif; ?>

    </div>
    <div class="swiper-scrollbar"></div>
  </div>
  <div class="services__form">
    <div class="form__inner col">
      <div class="form__title f-b">
        <?php the_field('form_title'); ?>
      </div>
      <div class="form__subtitle f-b">
        <?php the_field('form_subtitle'); ?>
      </div>
      <div class="form f-b">
        <?= do_shortcode('[contact-form-7 id="5" title="slider-form"]'); ?>
      </div>
    </div>
  </div>
</section>