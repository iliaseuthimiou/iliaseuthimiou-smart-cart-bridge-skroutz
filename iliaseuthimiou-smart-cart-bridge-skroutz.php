<?php
/**
 * Plugin Name:       IliasEuthimiou Smart Cart Bridge for Skroutz
 * Plugin URI:        https://github.com/iliaseuthimiou/iliaseuthimiou-smart-cart-bridge-skroutz
 * Description:       Imports Skroutz Marketplace order webhooks into WooCommerce and synchronizes order and shipment updates.
 * Version:           1.0.2
 * Author:            Ilias Euthimiou
 * Author URI:        https://iliaseuthimiou.com
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       iliaseuthimiou-smart-cart-bridge-skroutz
 * Requires at least: 6.3
 * Requires PHP:      7.4
 * Requires Plugins:  woocommerce
 * WC requires at least: 8.0
 *
 * @package SmartCartBridgeForSkroutz
 */

/*
 * Copyright (C) 2026 Ilias Euthimiou
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * (at your option) any later version.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SSCB_VERSION', '1.0.2' );
define( 'SSCB_PLUGIN_FILE', __FILE__ );
define( 'SSCB_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once SSCB_PLUGIN_DIR . 'includes/class-plugin.php';

register_activation_hook(
	SSCB_PLUGIN_FILE,
	array( 'IliasEuthimiou\\SmartCartBridgeForSkroutz\\Plugin', 'activate' )
);

add_action(
	'before_woocommerce_init',
	array( 'IliasEuthimiou\\SmartCartBridgeForSkroutz\\Plugin', 'declare_woocommerce_compatibility' )
);

IliasEuthimiou\SmartCartBridgeForSkroutz\Plugin::instance();
