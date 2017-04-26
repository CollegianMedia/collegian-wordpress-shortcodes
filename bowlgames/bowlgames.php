<?php
//[bowlad] - These classes are specific to the Collegian website, and may be different if the site changes, or if the Google Ad changes on DoubleClick.
function bowlad_func( $atts, $content = null ){

    return "<div class='td-a-rec td-a-rec-id-bowl_ad'><span class='td-adspot-title'>Bowl Content Sponsored By</span>
<center>
<div class='cmg-ad cmg-hidden-mobile cmg-hidden-tabletl cmg-hidden-tabletp' id='div-gpt-ad-1481560987084-1' style='height:90px; width:728px;'></div>
<div class='cmg-ad cmg-hidden-mobile cmg-hidden-desktop' id='div-gpt-ad-1481560987084-0' style='height:60px; width:468px;'></div>
<div class='cmg-ad cmg-hidden-desktop cmg-hidden-tabletp cmg-hidden-tabletl' id='div-gpt-ad-1481560987084-2' style='height:50px; width:320px;'></div>
</center>
</div>";
}
add_shortcode( 'bowlad', 'bowlad_func' );


//[bowllogomenu]
function bowllogomenu_func( $atts, $content = null ){

    return "<img src='" . plugins_url( 'images/smallATB.png', __FILE__ ) . "' alt='Texas Bowl' class='menu-bowl-logo' style='max-height: 22px; vertical-align: middle;'>";
}
add_shortcode( 'bowllogomenu', 'bowllogomenu_func' );
