<?php
/*
Plugin Name: Event Shortcode
Plugin URI: http://francismaile.com/plugins/event-shortcode
Description: A configurable, expireable shortcode for adding notices to posts and pages
Version: 1.0b
Author: Francis Maile
Author URI: http://francismaile.com
License: GPL3
*/

/*  Copyright 2011  Francis Maile  (email : francismaile@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
    or http://www.fsf.org/
*/
?><?php

add_shortcode( 'expired', 'tyzj_content_expire' );
// attributes = name, date, time, message

function tyzj_content_expire( $attr, $content ) {
  $content = esc_html( $content ); // sanitize content
  $blogtime = current_time('mysql'); // this sets the time and date based on your settings under: Settings|General in the admin
  $now = strtotime($blogtime); // convert to UNIX timestamp
  $event_time = strtotime($attr['date'] . ' ' . $attr['time']);  // convert your date and time to timestamp
  if( $now > $event_time ) {  // compare them - has the content expired
    return $attr['message'];  // replace the content with the expiration message
  } else {
    return $content;   // or just return the content
  }
}

?>