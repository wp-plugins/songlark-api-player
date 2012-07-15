<?php
/*
Plugin Name: SongLark API Player
Plugin URI: http://songlark.com/docs/api-player
Description: Simple SongLark player embeding for wordpress.
Version: 0.1
Author: SongLark
Author URI: http://songlark.com/
License: GPL2
*/

 /* SongLark API Player
  * Embeds the Lark player by means of a simple shortcode. 
  * Input arguments: 
  * 	query - the name of a song.
  * Returns: HTML code to embed the Lark player <iframe> 
  */

function songlark_api_player($atts) 
  {
	$query = $atts['query'];
	$embed_string =
		'<iframe height="50"
		 src="http://songlark.com/api/song.player/'.$query.'" 
		 width="350">
		</iframe>';


	return $embed_string;  
}

add_shortcode("embed_songlark", "songlark_api_player");

?>