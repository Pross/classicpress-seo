<?php
/**
 * The misc settings.
 *
 * @package    Classic_SEO
 * @subpackage Classic_SEO\Settings
 */

use Classic_SEO\Helper;

$cmb->add_field([
	'id'      => 'cpseo_enable_auto_update',
	'type'    => 'switch',
	'name'    => esc_html__( 'Auto Update', 'cpseo' ),
	'desc'    => esc_html__( 'Enable auto update of the plugin', 'cpseo' ),
	'default' => 'off',
]);

$cmb->add_field([
	'id'              => 'cpseo_rss_before_content',
	'type'            => 'textarea_small',
	'name'            => esc_html__( 'RSS Before Content', 'cpseo' ),
	'desc'            => esc_html__( 'Add content before each post in your site feeds.', 'cpseo' ),
	'sanitization_cb' => false,
]);

$cmb->add_field([
	'id'              => 'cpseo_rss_after_content',
	'type'            => 'textarea_small',
	'name'            => esc_html__( 'RSS After Content', 'cpseo' ),
	'desc'            => esc_html__( 'Add content after each post in your site feeds.', 'cpseo' ),
	'sanitization_cb' => false,
]);

$cmb->add_field([
	'id'              => 'cpseo_rss_after_content',
	'type'            => 'textarea_small',
	'name'            => esc_html__( 'RSS After Content', 'cpseo' ),
	'desc'            => esc_html__( 'Add content after each post in your site feeds.', 'cpseo' ),
	'classes'         => 'nob',
	'sanitization_cb' => false,
]);

$cmb->add_field([
	'id'   => 'cpseo_serp_preview',
	'type' => 'raw',
	'file' => cpseo()->includes_dir() . 'settings/general/rss-vars-table.php',
]);
