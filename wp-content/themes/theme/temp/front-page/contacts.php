<section class="section relative">
  <div class="title__left">
    <?php the_field('form1__left_title', 'option'); ?>
  </div>
  <div class="margin__container row before__footer">
    <div class="form-bottom__wrapper">
      <div class="section__title form-bottom__title">
        <?php the_field('form1__title', 'option'); ?>
      </div>
      <div class="form-bottom__description">
        <?php the_field('form1__desc', 'option'); ?>
      </div>
      <div class="form">
        <?= do_shortcode('[contact-form-7 id="99" title="form_type_1"]'); ?>
      </div>
    </div>
    <div class="map__wrapper">
      <?php the_field('form1__map', 'option'); ?>
    </div>
  </div>
</section>