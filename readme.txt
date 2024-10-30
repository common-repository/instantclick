=== InstantClick ===
Contributors: ericakfranz
Tags: performance, instantclick, links, pagespeed
Requires at least: 3.9
Tested up to: 6.1.1
Stable tag: 1.0.3
License: MIT
License URI: http://opensource.org/licenses/MIT

Dramatically speed up your WordPress site and make navigation effectively instant by loading the next link on hover.

== Description ==

InstantClick dramatically speeds up your website, making navigation effectively instant in most cases. This plugin is the easiest way of adding InstantClick to your WordPress theme.

> Before visitors click on a link, they hover over that link. Between these two events, 200 ms to 300 ms usually pass by ([test yourself here](http://instantclick.io/click-test)). InstantClick makes use of that time to preload the page, so that the page is already there when you click.

See [InstantClick.io](http://instantclick.io/) for more information on InstantClick.

This plugin simply adds InstantClick to your website using the WordPress scripts API. Some customization may be required.

== Installation ==

Install and activate the plugin. InstantClick should be automatically added to your website.

= Fine Tuning =

In WP-Admin you will find a new options page called 'InstantClick' under 'Settings'. On the options page you can:

* Set the preload mode (on hover with a 0, 50 or 100ms delay, or on mousedown)
* Exclude scripts from reloading with InstantClick (adding `data-no-instant`)
* Add custom JavaScript to be loaded before or after InstantClick has initialized

See the documentation on [InstantClick.io](http://instantclick.io/download) for details on how the script works and how to ensure compatibility with other scripts. To add the `data-no-instant` attribute to scripts, use the 'No-Instant Scripts' setting on the options page.

To add any custom JavaScript around the InstantClick initialization, use the script editor on the admin page.

== Frequently Asked Questions ==

None yet. Checkout the [support forum](http://wordpress.org/support/plugin/instantclick), the [GitHub repo](https://github.com/mgmartel/WP-InstantClick) and [InstantClick](http://instantclick.io) website for the answers to most questions.

== Screenshots ==

1. The InstantClick settings page

== Changelog ==

= 1.0.3 = 

* Update author information
* Compatibility tested to WP 6.1.1

= 1.0.2 =

* PHP 5.2 compatibility

= 1.0.1 =

* Fix warning in script handle sanitation

= 1.0 =

* Initial release to WP.org plugin repository.
