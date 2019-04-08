<?php
/*
Plugin Name: شورتکد فایل تصویری از سایت آپارات
Plugin URI: http://txtzoom.com
Description: با نوشتن این شورتکد در متن مقاله می توانید، فایل تصویری مدنظر خودرا در متن مقاله نمایش دهید
Version: 1.0
Author: Taghi Nooshifard
Author URI: http://txtzoom.com
License: GPLv2
Text Domain: txtzoom
*/

add_shortcode("aparat","wp_aparat_shortcode_handler");
function wp_aparat_shortcode_handler($atts){


    $values = shortcode_atts(array('url'=> 'https://www.aparat.com/v/7Pf4d'),$atts,'aparat');

    $url = explode("/v/",$values["url"])[1];

    return "<div id=\"15547476141486835\"><script type=\"text/JavaScript\" src=\"https://www.aparat.com/embed/".$url."?data[rnddiv]=15547476141486835&data[responsive]=yes\"></script></div>";
}