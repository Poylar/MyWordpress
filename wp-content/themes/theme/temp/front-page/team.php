<section class="section relative">
  <div class="title__left">
    <?php the_field('team__left'); ?>
  </div>
  <div class="container">
    <div class="section__title">
      <?php the_field('team__title'); ?>
    </div>
  </div>
  <div class="margin__container">
    <div class="team__wrapper swiper">
      <div class="swiper-wrapper">
        <?php
        $posts = get_posts(array(
          'post_type' => 'team',
          'numberposts' => '999'
        ));
        ?>
        <?php foreach ($posts as $post) : ?>
          <div class="team__item swiper-slide">
            <div class="item__image">
              <img src="<?php the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="item__info">
              <div class="info__position">
                <?php the_field('position', $post); ?>
              </div>
              <div class="info__name">
                <span class="lastname">
                  <?php the_field('lastname', $post); ?>
                </span>
                <span class="name">
                  <?php the_field('name', $post); ?>
                </span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <div class="swiper-slide"></div>
      </div>
      <div class="container navigation-container">
        <div class="navigation">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
  </div>
</section>