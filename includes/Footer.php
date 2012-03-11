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
	global $hyVersion, $IP;
	$output = '<div id="footer"> 
	<ul id="footer-info"> 
		<li id="footer-info-viewcount">';
	$output .= '<li id="footer-info-copyright">Text is available under the <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
additional terms may apply.
See <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> for details.';
	$output .= '<br />';
	$output .= 'This website is powered by Hytools ' . $hyVersion . '</li>';
	$output .= '</ul> 
	<ul id="footer-places"> 
		<li id="footer-places-privacy"><a href="http://wikimediafoundation.org/wiki/Privacy_policy" title="wikimedia:Privacy policy">Privacy policy</a></li> 
		<li id="footer-places-about"><a href="http://wikimediafoundation.org/wiki/Main_Page" title="wikimedia:Main Page">About Wikimedia Foundation</a></li> 
		<li id="footer-places-disclaimer"><a href="http://en.wikipedia.org/wiki/Wikipedia:General_disclaimer" title="en:Wikipedia:General disclaimer">Disclaimers</a></li> 
	</ul> 
  <ul id="footer-icons" class="noprint"> 
		<li id="footer-copyrightico"> 
			<a href="http://creativecommons.org/licenses/by-sa/3.0/"><img src="';
	$output .= "$IP/skins/vector/images/license.png";
	$output .= '" alt="Attribution-ShareAlike 3.0 Unported" width="88" height="31" /></a> 
		</li> 
		<li id="footer-poweredbyico"> 
			<a href="http://www.mediawiki.org/"><img src="';
	$output .= "$IP/skins/vector/images/powered-by.png";
	$output .= '" alt="Powered by MediaWiki" width="88" height="31" /></a> 
		</li> 
<div style="clear:both"></div> 
</div> ';
	return $output;
}

echo displayFooter();
