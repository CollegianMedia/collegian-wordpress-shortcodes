<?php
//[horoscopes]
function horoscope_picker_func( $atts, $content = null ){
	return '<center><div class="cmg-horoscopes picker"><a href="#cmg-horoscopes-aquarius"><img src="' . plugins_url( 'images/aquarius.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-pisces"><img src="' . plugins_url( 'images/pisces.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-aries"><img src="' . plugins_url( 'images/aries.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-taurus"><img src="' . plugins_url( 'images/taurus.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-gemini"><img src="' . plugins_url( 'images/gemini.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-cancer"><img src="' . plugins_url( 'images/cancer.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-leo"><img src="' . plugins_url( 'images/leo.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-virgo"><img src="' . plugins_url( 'images/virgo.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-libra"><img src="' . plugins_url( 'images/libra.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-scorpio"><img src="' . plugins_url( 'images/scorpio.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-sagittarius"><img src="' . plugins_url( 'images/sagittarius.png', __FILE__ ) . '"></a><a href="#cmg-horoscopes-capricorn"><img src="' . plugins_url( 'images/capricorn.png', __FILE__ ) . '"></a></div><h4>Tap or click your sign to jump to that horoscope.</h4></center><style>.td-post-featured-image { display: none; }</style>';
}
add_shortcode( 'horoscopes', 'horoscope_picker_func' );

//[aquarius]
function horoscope_aquarius_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-aquarius"><img src="' . plugins_url( 'images/aquarius.png', __FILE__ ) . '"><h2 class="horoscopes-aquarius">AQUARIUS</h2><h3>Jan. 20 – Feb. 18</h3></div>';
}
add_shortcode( 'aquarius', 'horoscope_aquarius_func' );

//[aries]
function horoscope_aries_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-aries"><img src="' . plugins_url( 'images/aries.png', __FILE__ ) . '"><h2 class="horoscopes-aries">ARIES</h2><h3>March 21 – April 19</h3></div>';
}
add_shortcode( 'aries', 'horoscope_aries_func' );

//[cancer]
function horoscope_cancer_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-cancer"><img src="' . plugins_url( 'images/cancer.png', __FILE__ ) . '"><h2 class="horoscopes-cancer">CANCER</h2><h3>June 21 – July 22</h3></div>';
}
add_shortcode( 'cancer', 'horoscope_cancer_func' );

//[capricorn]
function horoscope_capricorn_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-capricorn"><img src="' . plugins_url( 'images/capricorn.png', __FILE__ ) . '"><h2 class="horoscopes-capricorn">CAPRICORN</h2><h3>Dec. 22 – Jan. 19</h3></div>';
}
add_shortcode( 'capricorn', 'horoscope_capricorn_func' );

//[gemini]
function horoscope_gemini_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-gemini"><img src="' . plugins_url( 'images/gemini.png', __FILE__ ) . '"><h2 class="horoscopes-gemini">GEMINI</h2><h3>May 21 – June 20</h3></div>';
}
add_shortcode( 'gemini', 'horoscope_gemini_func' );

//[leo]
function horoscope_leo_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-leo"><img src="' . plugins_url( 'images/leo.png', __FILE__ ) . '"><h2 class="horoscopes-leo">LEO</h2><h3>July 23 – Aug. 22</h3></div>';
}
add_shortcode( 'leo', 'horoscope_leo_func' );

//[libra]
function horoscope_libra_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-libra"><img src="' . plugins_url( 'images/libra.png', __FILE__ ) . '"><h2 class="horoscopes-libra">LIBRA</h2><h3>Sept. 23 – Oct. 22</h3></div>';
}
add_shortcode( 'libra', 'horoscope_libra_func' );

//[pisces]
function horoscope_pisces_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-pisces"><img src="' . plugins_url( 'images/pisces.png', __FILE__ ) . '"><h2 class="horoscopes-pisces">PISCES</h2><h3>Feb. 19 – March 20</h3></div>';
}
add_shortcode( 'pisces', 'horoscope_pisces_func' );

//[sagittarius]
function horoscope_sagittarius_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-sagittarius"><img src="' . plugins_url( 'images/sagittarius.png', __FILE__ ) . '"><h2 class="horoscopes-sagittarius">SAGITTARIUS</h2><h3>Nov. 22 – Dec. 21</h3></div>';
}
add_shortcode( 'sagittarius', 'horoscope_sagittarius_func' );

//[scorpio]
function horoscope_scorpio_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-scorpio"><img src="' . plugins_url( 'images/scorpio.png', __FILE__ ) . '"><h2 class="horoscopes-scorpio">SCORPIO</h2><h3>Oct. 23 – Nov. 21</h3></div>';
}
add_shortcode( 'scorpio', 'horoscope_scorpio_func' );

//[taurus]
function horoscope_taurus_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-taurus"><img src="' . plugins_url( 'images/taurus.png', __FILE__ ) . '"><h2 class="horoscopes-taurus">TAURUS</h2><h3>April 20 – May 20</h3></div>';
}
add_shortcode( 'taurus', 'horoscope_taurus_func' );

//[virgo]
function horoscope_virgo_func( $atts, $content = null ){
	return '<div class="cmg-horoscopes" id="cmg-horoscopes-virgo"><img src="' . plugins_url( 'images/virgo.png', __FILE__ ) . '"><h2 class="horoscopes-virgo">VIRGO</h2><h3>Aug. 23 – Sept. 22</h3></div>';
}
add_shortcode( 'virgo', 'horoscope_virgo_func' );

// Add the CSS for the horoscopes
function horoscope_style_func() {
	wp_enqueue_style('cmg-horoscopes', plugin_dir_url( __FILE__ ) . 'horoscopes1.css');
}
add_action('wp_enqueue_scripts', 'horoscope_style_func');
