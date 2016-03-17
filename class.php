<?php
/**
 * @file class.php
 */

/**
 * Class WP_INCLUDE_USER
 */
class WP_INCLUDE_USER {
    public function username() {
        echo "jaeho song";
    }
}

/**
 * @return WP_INCLUDE_USER
 */
function user() {
    return new WP_INCLUDE_USER();
}
