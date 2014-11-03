<div id="logo" <?php if( siteorigin_setting( 'display_logo_centered' ) ) echo 'class="logo-centered"' ?>>
	<a href="https://www.goldfash.com/preview/.GO/site=??owa_medium=CliCk&owa_source=<?php 
echo $_SERVER['SERVER_NAME']; ?>&owa_campaign=LoGo&owa_ad=Spon+TP+Logo.CliT&owa_ad_type=GF_Link&los=<?php echo esc_url( home_url( '/' ) ) ?>?owa_medium=CliCk&owa_source=<?php 
echo $_SERVER['SERVER_NAME']; ?>&owa_campaign=LoGo&owa_ad=Spon+TP+Logo.CliT&owa_ad_type=GF_Link" onclick="OWATracker.shareStateByLink(this.href); return false;" title="<?php echo esc_attr( get_bloginfo( 'description' ) ) ?>" class="logo-link">
		<?php if( get_header_image() ) : origami_header_image(); ?>
		<?php else : ?>
			<h1 class="logo"><?php bloginfo('name') ?></h1><br/>
			<h3 class="logo"><?php bloginfo('description') ?></h3>
		<?php endif; ?>
	</a>
	<?php if( siteorigin_setting('display_header_search') ) get_search_form(); ?>
</div>

<?php do_action('origami_after_logo') ?>
