<?php
/**
 * Plugin Name:     SEO Index Alert
 * Description:     SEO Index Alert is a lightweight tool inspired by the work of Nerd-Rush on GitHub. It visually warns administrators when the 'Discourage search engines from indexing this site' option is enabled. The plugin enhances usability by modifying the admin bar's appearance and displaying a dismissible admin notice, ensuring your site's SEO visibility settings are always in check.
 * Author:          Ermal Senja | <a href="https://gist.github.com/Nerd-Rush/cdb8e611478d9b554afc845fe23784af" target="_blank">Nerd-Rush on GitHub</a>
 * Version:         1.0.0
 *
 */

if (!defined('ABSPATH')) {
	die;
}

include_once __DIR__ . '/WFPCore/WordPressContext.php';


include_once 'snippets/seo_index_alert.php';
// Snippets will go before this line, do not edit
