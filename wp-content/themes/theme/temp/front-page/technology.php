<section class="section relative">
  <div class="title__left">
    <?php the_field('back__text'); ?>
  </div>
  <div class="title__top">
    <?php the_field('top__text'); ?>
  </div>
  <div class="container">
    <?php if (get_field('tech__title')) : ?>
      <h2 class="section__title"><?php the_field('tech__title'); ?></h2>
    <?php endif; ?>
    <?php if (get_field('tech__subtitle')) : ?>
      <div class="section__content"><?php echo get_field('tech__subtitle'); ?></div>
    <?php endif; ?>
    <?php $gallery = get_field('tech__gallery');
    if ($gallery) : ?>

      <div class="tech__wrapper row">
        <?php foreach ($gallery as $gallery_item) : ?>

          <div class="tech__item">

            <img src="<?php echo esc_url($gallery_item['url']); ?>" alt="<?php echo esc_attr($gallery_item['alt']); ?>" />

          </div>


        <?php endforeach; ?>
      </div>

    <?php endif; ?>
  </div>
</section>