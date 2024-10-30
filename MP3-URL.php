<?php
/*
Plugin Name: MP3 URL
Description: Replaces MP3 URL's wrapped in "[" and "]" with a MP3 player, so you can listen to the MP3 on your site.
Version: 1.1
Author: LMP
Author URI: http://liamparker.com/
*/
function mp3_url($content){
$patterns = array("/\[([^\n]+.mp3)\]/");
$replacements = array("<audio src='$1' controls='controls'>Your browser does not support the audio element.</audio>");
return preg_replace($patterns , $replacements, $content);
}
function mp3_replace(){
	ob_start('mp3_url');
}
add_action('template_redirect', 'mp3_replace'); 
?>