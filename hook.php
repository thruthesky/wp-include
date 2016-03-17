<?php
/**
 * @file hook.php
 * Do hooks.
 *
 */

add_action( 'wp_footer', function () {
    $option = get_option( '_option' );
    $html = $option['html_bottom'];
    if ( ! empty( $html ) ) {
        echo $html;
    }
});
