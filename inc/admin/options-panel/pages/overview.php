<h1 class="mswa-admin-options-page-title">
	<img src="<?php echo esc_url( $mspa_url . 'inc/admin/assets/images/logo.png' ); ?>" alt="<?php echo esc_attr_e('MS Web Arts logo', 'simple-product-addons') ?>">
	<span><?php echo esc_html_e( 'MS Web Arts Overview', 'simple-product-addons' ); ?></span>
</h1>
<p><?php echo esc_html_e( 'This page contains the license activations for plugins provided by MS Web Arts and latest news/updates from us', 'simple-product-addons' ); ?></p>

<div class="wrap mswa-settings-page">

	<div id="poststuff">

		<div id="post-body" class="metabox-holder columns-2">

			<!-- main content -->
			<div id="post-body-content">
				
				<div class="inside">
					<div class="mswa-row">
						<?php do_action( 'mswa_overview_content' ); ?>
					</div>
				</div>
				<!-- .inside -->

			</div>
			<!-- post-body-content -->

			<!-- sidebar -->
			<div id="postbox-container-1" class="postbox-container">
				<?php do_action( 'mswa_overview_sidebar' ); ?>
			</div>
			<!-- #postbox-container-1 .postbox-container -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->
