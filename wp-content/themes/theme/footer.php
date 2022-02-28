<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme
 */

?>
<div class="footer fp-auto-height section">
	<div class="container footer__inner row">
		<div class="footer__col col">
			<div class="footer__logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php the_field('logo__footer', 'option'); ?>" alt="">
				</a>
			</div>
			<div class="footer__copyright">
				<a href="<?= get_privacy_policy_url() ?>">
					Политика конфиденциальности
				</a>
			</div>
		</div>
		<nav class="footer__menu">
			<?php wp_nav_menu(array(
				'menu' => 'footer-menu',


			)) ?>
		</nav>
		<div class="footer__info">
			<div class="info__item info__phone">
				<a href="tel:<?= clear_phone(get_field('phone', 'option')); ?>">
					<?php the_field('phone', 'option'); ?>
				</a>
			</div>
			<address class="info__item info__address">
				<?php the_field('address', 'option'); ?>
			</address>
			<div class="info__item info__email">
				<a href="<?php the_field('email', 'option'); ?>">
					<?php the_field('email', 'option'); ?>
				</a>
			</div>
			<div class="btn btn__blue" data-modal>
				Обсудить проект
			</div>
		</div>
	</div>
</div>
<?php if (is_front_page()) : ?>
	</div> <!-- fp close -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>


</html>