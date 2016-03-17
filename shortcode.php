<?php

add_shortcode( 'wp_log_in', function() {
    user()->username();
});