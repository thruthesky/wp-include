<?php


add_shortcode( 'wp_log_in', function() {
	$username = user()->getUsername();
	if ( $username ) {
	$url = get_logout_url();
    return <<<EOH
        로그인 성공<br>
        <strong>$username</strong> 님 환영합니다.<br>
		<a href="$url">로그아웃</a>
EOH;
	}
	else {
		return "로그인 하기<br>" . do_shortcode("[wordpress_social_login]");
	}
});
