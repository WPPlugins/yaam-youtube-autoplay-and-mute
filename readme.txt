=== YAAM - YouTube Autoplay And Mute ===
Contributors: 02GEEK
Tags: youtube, autoplay, mute, autohide, cc_load_policy, color, controls, disablekb, end, fs, hl, iv_load_policy, loop, start
Donate link: http://www.02skills.com/courses/learning-javascript-with-animations
Requires at least: 2.9.0
Tested up to: 4.2.2
Stable tag: 0.0.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The lightest weight YouTube extension for WordPress. YouTube has a built in capabilities that enable you to link to specific points in time, auto play and many other built-in features through the use of url parameters. With this plug-in you can autoplay, pause, skip to and many other features are exposed through URL parameters. 

== Description ==
The lightest weight YouTube extension for WordPress. YouTube has a built in capabilities that enable you to link to specific points in time, auto play and many other built-in features through the use of url parameters. With this plug-in you can autoplay, pause, skip to and many other features are exposed through URL parameters. 

WordPress default configuration ignores the URL parameters when embedding urls into a post using oEmbed. This plug-in fixes that behavior enabling you to use the built in URL parameters that are available to YouTube video with extra features (namely muting videos).

For example:
https://youtu.be/rRr4N2nN_X8?autoplay=1

Will embed the YouTube player and have it automatically start playing.

You can copy any URL from Youtube such as starting from 1 minute into the video:
https://youtu.be/rRr4N2nN_X8?t=1m

and it will embed the video and start it at minute 1. 

One extra feature that is not available in the built in youtube player parameters that we added to the plugin is the option to mute the video as well. For example:

https://youtu.be/rRr4N2nN_X8?autoplay=1&t=1m&mute=1

this will embed the youtube player and have it start playing automatically at minute 1. To explore more of the URL parameter options please review the Google Youtube URL parameters list:
https://developers.google.com/youtube/player_parameters#Parameters

== Installation ==
Download and activate. that\'s it. 

Now any time you want to add a youtube video to a post you can past the link including the built in URL parameters and it will work and if you want to add a mute capability just include it into the url in your post and it will automatically build out your player. 

== Frequently Asked Questions ==
1. is there any configurations needed?
no.

2. is there a a GUI for this plugin?
no as we are leaning on the urls that are created when you copy them from youtube. 

3. how do i get a video to autoplay and mute at the same time?
Just grab a url from youtube and add to the url at the end : ?autoplay=1&mute=1 before pasting it into your WordPress post. The plug in will do all the rest. 

== Changelog ==
Version 0.0.6
First public release of the plugin including the Youtube IFRAME API for muting videos. 