<?php
/*
Plugin Name: K-State Collegian Shortcodes
Plugin URI: http://www.collegianmedia.com
Description: Adds shortcodes to the Collegian WordPress site for special features the Collegian uses.
Version: 1.2
Author: George Walker
Author URI: http://georgewwalker.com
License: GPL2
*/

// This file contains commonly used or single-shortcode functions.
// If adding a group of shortcodes, create a subdirectory with those and include them here:
include_once('horoscopes/horoscopes.php');
include_once('bowlgames/bowlgames.php');

//[gofundmetitleix]
function gofundmetitleix_func( $atts, $content = null ){

    return "<iframe src='https://funds.gofundme.com/index.php?route=widgets/typeb&amp;url=collegianTitleIX&amp;c=0&amp;t=3&amp;iframe=1&amp;nocache=1' style='height: 370px; width: 265px; border: none; display: inline-block; float: left; margin: 25px;'></iframe>";
}
add_shortcode( 'gofundmetitleix', 'gofundmetitleix_func' );

//[sponsored]
function sponsored_func( $atts, $content = null ){
    return "<div class='author-box-wrap sponsored-content'><h4>Sponsored</h4><p>" . $content . '</p></div>';
}
add_shortcode( 'sponsored', 'sponsored_func' );

//[editors-note]
function editorsnote_func( $atts, $content = null ){
    return "<div class='author-box-wrap editors-note'><h4>Editor's Note:</h4>" . $content . '</div>';
}
add_shortcode( 'editors-note', 'editorsnote_func' );

//[hideimage]
function hideimage_func( $atts, $content = null ){
	return '<style>.td-post-featured-image { display: none; }</style>';
}
add_shortcode( 'hideimage', 'hideimage_func' );


//[purchase]
function purchase_func( $atts, $content = null ){
	$a = shortcode_atts( array(
        'url' => 'http://photos.collegianmedia.com/'
    ), $atts );

    return '<br><br><a class="wpb_button_a" title="Purchase a Photo" href="' . esc_attr($a['url']) . '"><span class="wpb_button wpb_btn-large" style="text-align: center; width: 100%; padding-top: 10px; padding-bottom: 10px; background: #7f54a3 !important; color: #fff;">Purchase a Photo</span></a>';
}
add_shortcode( 'purchase', 'purchase_func' );

//[quote]
function quote_func( $atts, $content = null ){
	return '<blockquote class="td_pull_quote td_pull_center"><p>' . $content . '</p></blockquote>';
}
add_shortcode( 'quote', 'quote_func' );

//[right]
function right_func( $atts, $content = null ){
	return '<p style="text-align: right;">' . $content . '</p>';
}
add_shortcode( 'right', 'right_func' );

//[question]
function question_func( $atts, $content = null ){
	return '<div class="street-talk-question"><div class="street-talk-question-inner"><span>' . $content . '</span></div></div><style>.street-talk-question-inner::before, .street-talk-question-inner::after { background: url("' . plugins_url( 'images/street-talk-q-marks.png', __FILE__ ) . '") no-repeat; }</style>';
}
add_shortcode( 'question', 'question_func' );

//[related]
function related_func( $atts, $content = null ){
	$a = shortcode_atts( array(
        'title' => 'Related Article',
        'url' => 'http://www.kstatecollegian.com/',
    ), $atts );

    return '<blockquote class="td_quote_box td_box_left cmg_related"><h6 style="margin-top: 0;">Related:</h6><a href="' . esc_attr($a['url']) . '"><h4>' . esc_attr($a['title']) . '</h4></a><p><a href="' . esc_attr($a['url']) . '">Read Now <i class="td-icon-menu-right"></i></a></p></blockquote>';
}
add_shortcode( 'related', 'related_func' );

//[retake]
function retake_func( $atts, $content = null ){
	return '<br><br><a class="wpb_button_a" title="Retake Quiz" href="javascript:window.location.reload(false);"><span class="wpb_button wpb_btn-large" style="text-align: center; width: 100%; padding-top: 10px; padding-bottom: 10px; background: #7f54a3 !important; color: #fff;">Retake Quiz</span></a>';
}
add_shortcode( 'retake', 'retake_func' );

//[channel8newsbutton]
function channel8newsbutton_func( $atts, $content = null ){
    return "<img id='channel8newsbutton' class='cmg-menu-button' src='" . plugins_url( 'images/channel8-button.png', __FILE__ ) . "' style='max-height: 28px;margin-top: 10px;margin-bottom: -10px;' alt='Channel 8 News'>";
}
add_shortcode( 'channel8newsbutton', 'channel8newsbutton_func' );

//[bestofmanhattanbutton]
function bestofmanhattanbutton_func( $atts, $content = null ){
    return "<img id='bestofmanhattanbutton' src='" . plugins_url( 'images/bestofmanhattan-button.png', __FILE__ ) . "' style='max-height: 42px;margin-bottom: -19px;' alt='Best of Manhattan' title='Best of Manhattan: Purple Apple Awards'>";
}
add_shortcode( 'bestofmanhattanbutton', 'bestofmanhattanbutton_func' );

// Add the CSS for shortcodes
function cmgshortcode_style_func() {
	wp_enqueue_style('cmg-shortcodes', plugin_dir_url( __FILE__ ) . 'shortcode.css');
}
add_action('wp_enqueue_scripts', 'cmgshortcode_style_func');
