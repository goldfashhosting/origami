		<center><img src="https://objects.dreamhost.com:443/back.e_g3t.live/PlayResponsibly.png" width="350"></center>
		<?php $sidebars_widgets = wp_get_sidebars_widgets(); ?>



		<?php if(!empty($sidebars_widgets['site-footer'])) : ?>

			<?php do_action('origami_before_footer_widgets') ?>

			<?php get_template_part('parts/footer-widgets') ?>

			<?php do_action('origami_after_footer_widgets') ?>

		<?php endif; ?>

		<?php do_action('origami_bottom_page_container') ?>
		##insert footer js

	</div>

	<?php do_action('origami_after_page_container') ?>

	<?php do_action('origami_before_footer') ?>

	

	<?php do_action('origami_after_footer') ?>

</div>

<?php wp_footer() ?>
</body>
</html>
