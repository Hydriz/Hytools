<?php

/**
 *
 *					Footer.php
 * 
 * This is the file that displays the footer in pure HTML.
 * TODO: Migrate this file over to skins/Vector so that
 * we can actually implement other skins seemlessly.
 *
 */

// Get the basic settings first...
require_once(".." . "/LocalSettings.php");

function displayFooter() {
	global $hyVersion;
	$output = '<div id="footer"> 
	<ul id="footer-info"> 
		<li id="footer-info-viewcount">';
	$output .= 'This website is powered by Hytools ' . $hyVersion . '</li>';
	$output .= '<li id="footer-info-copyright">Content is available under <a href="http://creativecommons.org/licenses/by-sa/3.0/" class="external ">Attribution-ShareAlike 3.0 Unported</a>.</li> 
	</ul> 
	<ul id="footer-places"> 
		<li id="footer-places-privacy"><a href="/w/index.php/Wikipedia:Privacy_policy" title="Wikipedia:Privacy policy">Privacy policy</a></li> 
		<li id="footer-places-about"><a href="/w/index.php/Wikipedia:About" title="Wikipedia:About">About Wikipedia</a></li> 
		<li id="footer-places-disclaimer"><a href="/w/index.php/Wikipedia:General_disclaimer" title="Wikipedia:General disclaimer">Disclaimers</a></li> 
	</ul> 
	<ul id="footer-icons" class="noprint"> 
		<li id="footer-copyrightico"> 
			<a href="http://creativecommons.org/licenses/by-sa/3.0/"><img src="https://toolserver.org/~hydriz/ssl/images/license.png" alt="Attribution-ShareAlike 3.0 Unported" width="88" height="31" /></a> 
		</li> 
		<li id="footer-poweredbyico"> 
		<a href="http://www.mediawiki.org/"><img src="/w/skins/common/images/poweredby_mediawiki_88x31.png" alt="Powered by MediaWiki" width="88" height="31" /></a> 
		</li> 
	</ul> 
						<div style="clear:both"></div> 
		</div> ';
	return $output;
}

echo displayFooter();
