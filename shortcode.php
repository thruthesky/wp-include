<?php

add_shortcode( 'wp_log_in', function() {
    return
        '로그인 성공<br>
        어서오십시오, ' .
        user()->get_username() .
        '님';
});