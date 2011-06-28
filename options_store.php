<?php
/*
Plugin Name: Options Store
Description: 管理画面からoptionsテーブルにデータを入れ、引き出すだけの機能を持たせた汎用プラグイン
Version: 1.0
Author: Yuya Terajima
Author URI: http://www.e2esound.com/
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
