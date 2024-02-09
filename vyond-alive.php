<?php
/*
 * Plugin Name:       Viewyonder Plugin-Alive
 * Plugin URI:        https://github.com/viewyonder/vyond-alive
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Author:            Steve Chambers
 * Author URI:        https://viewyonder.com/about/steve-chambers
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/viewyonder/vyond-alive
 * Text Domain:       vyond-alive
 * Domain Path:       /languages
 */

/*
Viewyonder Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Viewyonder Plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Viewyonder Plugin. If not, see {URI to Plugin License}.
*/

// Check if get_plugins() function exists. This is required on the front end of the
// site, since it is in a file that is normally only loaded in the admin.
if ( ! function_exists( 'get_plugins' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

$all_plugins = get_plugins();

// Save the data to the error log so you can see what the array format is like.
error_log( print_r( $all_plugins, true ) );
