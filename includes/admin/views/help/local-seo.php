<?php
/**
 * Local SEO tab.
 *
 * @package    Classic_SEO
 * @subpackage Classic_SEO\Admin\Help
 */

use Classic_SEO\Helper;
?>
<h3><?php esc_html_e( 'Local SEO', 'cpseo' ); ?></h3>
<p>
	<?php esc_html_e( 'Local SEO is a way for you to rank better for searches made by your people in the area where you operate. It is the best way for you to get your products and services in front of the local customers.', 'cpseo' ); ?>
</p>
<p>
	<?php esc_html_e( 'There are various methods for optimizing your website for local SEO but the easiest method is built right inside the Classic SEO plugin.', 'cpseo' ); ?>
</p>
<p>
	<?php
	printf(
		/* translators: link to local-seo */
		__( 'Simply <a rel="nofollow noopener noreferrer" href="" target="_blank">setup your business as Local Business</a> during the setup wizard.', 'cpseo' )
	);
	?>
</p>
<p>
	<?php esc_html_e( 'Make sure the Local SEO & Google Knowledge Graph module is enabled.', 'cpseo' ); ?>
</p>
<p>
	<?php
	printf(
		/* translators: link to local seo settings */
		__( 'Then, head over to <a href="%1$s">Classic SEO > Titles and Meta > Local SEO</a> and add more information about your Local Business like your Company Name, Logo, Email ID, Phone number, Address, And Contact/About pages.', 'cpseo' ),
		Helper::get_admin_url( 'options-titles#setting-panel-local' )
	);
	?>
</p>

