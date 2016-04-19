function exp_section($atts, $content){
	$exp_date = $atts['exp_on'];
	$today = date('Ymd');
	if($today < $exp_date) {
		return "$content";
	} else {
	}
}
add_shortcode( 'expire', 'exp_section' );
