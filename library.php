<?php
/**
 * Removes admin bar for users only.
 */

echo "HI";
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}