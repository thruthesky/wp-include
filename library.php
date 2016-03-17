<?php
/**
 * wp-include/library.php
 */

/**
 *
 */
if ( ! function_exists('di') ) {
    function di($o) {
        $re = print_r($o, true);
        $re = str_replace(" ", "&nbsp;", $re);
        $re = explode("\n", $re);
        echo implode("<br>", $re);
    }
}

if ( ! function_exists('segment') ) {
    function segments($n = NULL) {
        $u = strtolower(site_url());
        $u = str_replace("http://", '', $u);
        $u = str_replace("https://", '', $u);
        $r = strtolower($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        $uri = str_replace( "$u/", '', $r);
        $re = explode('/', $uri);
        if ( $n !== NULL ) return $re[$n];
        else return $re;
    }
    function segment($n) {
        return segments($n);
    }
}


/**
 * Removes admin bar for users only.
 */
if ( ! function_exists('remove_admin_bar') ) {
    function remove_admin_bar() {
        if (!current_user_can('administrator') && !is_admin()) {
            show_admin_bar(false);
        }
    }
}

