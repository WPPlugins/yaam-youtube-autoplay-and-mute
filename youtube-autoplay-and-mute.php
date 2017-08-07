<?php
/*
Plugin Name: YouTube AutoPlay and Mute
Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Gives you the option to auto play YouTube videos and/or mute them. 
Version:     0.0.6
Author:      Ben Fhala
Author URI:  http://02geek.com/
License:     GPL2

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see {URI to Plugin License}.

License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

//if(!class_exists('WP_02GEEK_YoutubeAutoplayAndMute')){
	class WP_02GEEK_YoutubeAutoplayAndMute{
		private $ytid=0;

		public function __construct(){
			
			add_filter('oembed_dataparse', array($this, 'oembed_dataparse'),1,3);
			add_action( 'wp_enqueue_scripts', array($this, 'enqueue_scripts') );
			


			//https://youtu.be/qQIsdod0LWo?autoplay=1
			//<iframe width="1201" height="1034" src="https://www.youtube.com/embed/qQIsdod0LWo" frameborder="0" allowfullscreen></iframe>
		}

		public function enqueue_scripts(){
			wp_enqueue_script('yaam', plugin_dir_url(__FILE__) . '/js/yaam.js', array(), '0.0.6', true);
		}

		
		public function oembed_dataparse($return, $data, $url){
			if($data->provider_name =='YouTube'){
				$purl = parse_url($url);
				$q = $purl['query'];
				if($purl['query']){
					parse_str($purl['query'], $query);
					
					if($query['mute']){
						$pos = strpos($return,'width');
						$return = substr($return, 0, $pos)."class='yaam-api' ".substr($return, $pos); //yt$this->ytid
						$q .='&enablejsapi=1';

					}


					$pos = strpos($return,'" fr');
					$nre = substr($return, 0, $pos).'&'.$q.substr($return, $pos);



					return $nre;
				}
			}
			return $return;
		}

	}

	$wp__02GEEK_yaam = new WP_02GEEK_YoutubeAutoplayAndMute();
//}
?>