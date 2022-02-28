<div class="header__menu_fixed">
  <div class="header__nav_top">
    <div class="container row align-center space-between">
      <div class="header__logo">
        <?php the_custom_logo() ?>
      </div>
      <div class="header__phone">
        <a href="<?= get_field('phone', 'option'); ?>">
          <?php the_field('phone', 'option'); ?>
        </a>
      </div>
      <div class="header__nav-btn" data-event="menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <div class="header__menu">
    <?php wp_nav_menu(array(
      'menu' => 'main-menu',
      'container_class' => 'container',
      'container' => 'nav',
      'walker' => new Custom_Menu
    )) ?>
  </div>
</div>
<div id="fp">
  <!-- fp open -->
  <header class="header-front header section ">

    <div class="container header__top row space-between align-center">
      <div class="header__logo">
        <?php the_custom_logo() ?>
      </div>
      <?php wp_nav_menu(array(
        'menu' => 'main-menu',
        'container' => 'nav',
        'container_class' => 'header__nav nav'
      )) ?>
    </div>

    <div class="header__main row align-center">
      <div class="main__block main__text col">
        <h1 class="main__title">
          <?php the_field('title'); ?>
        </h1>
        <div class="main__button btn" data-event="modal">
          <?php the_field('button_text'); ?>
        </div>
      </div>
      <div class="main__block main__project">
        <?php if (have_rows('projects')) : ?>

          <?php while (have_rows('projects')) : the_row(); ?>

            <div class="project__item" data-color="<?php the_sub_field('color'); ?>">
              <div class=" item__logo">
                <img src="<?php the_sub_field('logo'); ?>" alt="">
              </div>
              <div class="hidden__info">
                <div class="item__desc">
                  <?php the_sub_field('desc'); ?>
                </div>
                <div class="item__btn">
                  <a href="<?php the_sub_field('link'); ?>">
                    Подробнее
                  </a>
                </div>
                <div class="item__preview">
                  <img src="<?php the_sub_field('image'); ?>" alt="">
                </div>
              </div>
            </div>

          <?php endwhile; ?>

        <?php endif; ?>


      </div>
      <div class="main__email">
        <a href="mailto:<?php the_field('email', 'option'); ?>">
          <?php the_field('email', 'option'); ?>
        </a>
      </div>
    </div>

  </header>