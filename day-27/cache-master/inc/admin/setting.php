<?php
/**
 * Cache Master - Setting page.
 *
 * @author Terry Lin
 * @link https://terryl.in/
 * @since 1.0.0
 * @version 1.0.0
 */

add_action( 'admin_init', 'scm_settings' );

 /**
  * Add settings.
  *
  * @return void
  */
function scm_settings() {

	register_setting( 'scm_setting_group_1', 'scm_option_driver' );
	register_setting( 'scm_setting_group_1', 'scm_option_ttl' );
	register_setting( 'scm_setting_group_1', 'scm_option_uninstall' );

	add_settings_section(
		'scm_setting_section_1',
		__( 'Basic', 'cache-master' ),
		'scm_cb_setting_section',
		'scm_setting_page_1'
	);

	add_settings_field(
		'scm_option_id_1',
		__( 'Cache Driver', 'cache-master' ),
		'scm_cb_driver',
		'scm_setting_page_1',
		'scm_setting_section_1'
	);

	add_settings_field(
		'scm_option_id_2',
		__( 'Time to Live', 'cache-master' ),
		'scm_cb_ttl',
		'scm_setting_page_1',
		'scm_setting_section_1'
	);

	add_settings_field(
		'scm_option_id_3',
		__( 'Uninstall Option', 'cache-master' ),
		'scm_cb_uninstall_option',
		'scm_setting_page_1',
		'scm_setting_section_1'
	);
}

function scm_cb_setting_section() {
	echo __( '', 'cache-master' );
}

/**
 * Setting block - Choose a data driver for cache functionality.
 *
 * @return void
 */
function scm_cb_driver() {
	$option_driver_type = get_option( 'scm_option_driver', 'local' );

	$option_list = array(
		'file'      => __( 'File', 'cache-master' ),
		'redis'     => __( 'Redis', 'cache-master' ),
		'memcache'  => __( 'Memcache', 'cache-master' ),
		'memcached' => __( 'Memcached', 'cache-master' ),
		'apc'       => __( 'APC', 'cache-master' ),
		'apcu'      => __( 'APCu', 'cache-master' ),
		'wincache'  => __( 'WinCache', 'cache-master' ),
		'mysql'     => __( 'MySQL', 'cache-master' ),
		'sqlite'    => __( 'SQLite', 'cache-master' ),
	);

	?>
		<div>
			<?php foreach ( $option_list as $k => $v ) : ?>
				<div>
					<input type="radio" name="scm_option_driver" id="scm-cache-driver-1" value="<?php echo $k; ?>" <?php checked( $option_driver_type, $k ); ?>>
					<label for="scm-cache-driver-1">
						<?php echo $v; ?>
						<?php if ( 'file' === $k ) : ?>
							(<?php echo __( 'default', 'cache-master' ); ?>)
						<?php endif; ?>
					<label>
				</div>
			<?php endforeach; ?>
			<p><em><?php echo __( 'Choose a driver to cache your posts and pages.', 'cache-master' ); ?></em></p>
		</div>
	<?php
}

/**
 * Setting block - TTL
 *
 * @return void
 */
function scm_cb_ttl() {
	$option_ttl = get_option( 'scm_option_ttl', 'yes' );
	?>
		<div>
			<div>
				<input type="text" name="scm_option_ttl" value="<?php echo esc_attr( $option_ttl ); ?>">
			</div>
		</div>
		<p><em><?php echo __( 'Please fill in a number between 300-86400. (in seconds)', 'cache-master' ); ?></em></p>
	<?php
}

/**
 * Setting block - Uninstalling option.
 *
 * @return void
 */
function scm_cb_uninstall_option() {
	$option_uninstall = get_option( 'scm_option_uninstall', 'yes' );
	?>
		<div>
			<div>
				<input type="radio" name="scm_option_uninstall" id="cache-master-uninstall-option-yes" value="yes" 
					<?php checked( $option_uninstall, 'yes' ); ?>>
				<label for="cache-master-uninstall-option-yes">
					<?php echo __( 'Remove Cache Master generated data.', 'cache-master' ); ?><br />
				<label>
			</div>
			<div>
				<input type="radio" name="scm_option_uninstall" id="cache-master-uninstall-option-no" value="no" 
					<?php checked( $option_uninstall, 'no' ); ?>>
				<label for="cache-master-uninstall-option-no">
					<?php echo __( 'Keep Cache Master generated data.', 'cache-master' ); ?>
				<label>
			</div>	
		</div>
		<p><em><?php echo __( 'This option only works when you uninstall this plugin.', 'cache-master' ); ?></em></p>
	<?php
}
