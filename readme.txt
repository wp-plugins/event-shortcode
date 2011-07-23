=== Event Shortcode ===
Contributors: francismaile
Donate link: http://francismaile.com/plugins/
Tags: shortcodes, expire content
Requires at least: 3.0
Tested up to: 3.0
Stable tag: 1.0

Place time sensitive content into a post or page. When it expires it can be replaced by pre-set content or left blank.
== Description ==

Event Shortcode allows you to easily place time sensitive content into a post or page, which is automatically removed when it expires. This could be an upcoming event, information or a link to a news item that will not hold its freshness. Place this shortcode in each post up to the date of the event. The content will expire on the date and time you set. After that, the content is replaced by whatever text you specify or it can be left blank. This plugin offers a simple solution for sites where a full on event management system would be overkill.

Features include:
* Easy installation
* Simple interface
* Set it and forget it

== Installation ==

1. Install Event Shortcode either via the WordPress.org plugin directory, or by uploading to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. See below for how to use the shortcode.

== Usage ==
[expired date="7/20/11" time="12:00pm" message="The party is over. Hope you were there!"]On 7/20/11 at 12:00pm (PDT)
we will have really cool party event.[/expired]

Will show in post untill 7/20 at 12 noon as:
On 7/20/11 at 12:00pm (PDT) we will have an event.

After 7/20 at 12 noon, it will show:
The party is over. Hope you were there!

Parameters:

    date => the date the content will expire in the format mm/dd/yy or dd/mm/yyyy
    time => the time the content will expire. Can be espressed in 12 or 24 hour format.
    message => the content that will replace the original content. This can be left blank.
    [expired]original content goes here[/expired]

== Frequently Asked Questions ==

= How do I get help? =

Go the plugin web page: http://francismaile.com/plugins/event-shortcode/

== Screenshots ==

1. Basic usage.

== Changelog ==

= 0.9b =
* There isn't much to this so I am putting out the first version as .9 in beta.
  - post bug reports to the comments of the above page