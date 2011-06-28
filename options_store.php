<?php
/*
Plugin Name: Options Store
Description: 管理画面からoptionsテーブルにデータを入れ、引き出すだけの機能を持たせた汎用プラグイン
Version: 1.0
Author: Yuya Terajima
Author URI: http://www.e2esound.com/
*/
/* Copyright 2011 Yuya Terajima/e2esound.com (email:terra@e2esound.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/


/* When Activate Plugin
==================================================================== */
function os_activate() {

    if( ! get_option('os_store')) {
        update_option('os_store','');
		}

}

register_activation_hook(__FILE__, 'os_activate');


/* Call Data from Options Table
==================================================================== */
function get_osdata() {
	return get_option('os_store');
}
function osdata() {
	echo esc_html(get_osdata());
}

/* Admin
==================================================================== */
require_once 'os_admin_view.php';

function os_add_admin_menu(){
    add_menu_page('Options Store','Options Store','5',__FILE__,'os_add_admin_page');
}
add_action('admin_menu','os_add_admin_menu');

/* End of file options_store.php */
