<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<?php require_once("includes/ErrorSender.php"); ?>
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title>Edit count - Hydriz on Toolserver</title> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
<meta http-equiv="Content-Style-Type" content="text/css" /> 
<meta name="generator" content="Hytools 2.1" /> 
<link rel="copyright" href="http://creativecommons.org/licenses/by-sa/3.0/" /> 
<link rel="stylesheet" href="style.css" type="text/css" media="all" /> 
<script type="text/javascript" src="style.js"></script> 
<body> 
<div id="mw-page-base" class="noprint"></div> 
<div id="mw-head-base" class="noprint"></div> 
<div id="content"> 
<a id="top"></a> 
<div id="mw-js-message" style="display:none;"></div> 
<div id="siteNotice"><?php require_once("includes/SiteNotice.php"); ?></div>
<h1 id="firstHeading" class="firstHeading">Edit count</h1> 
<div id="bodyContent"> 
<div id="siteSub">By <a title="m:Hydriz" href="http://meta.wikimedia.org/wiki/User:Hydriz">Hydriz</a></div> 
<div id="contentSub"></div> 
<div id="jump-to-nav"> 
Jump to: <a href="#mw-head">navigation</a>,
<a href="#p-search">search</a> 
</div> 
<p>Username selected: <a href="http://<?php echo $_GET['lang']; ?>.<?php echo $_GET['project']; ?>.org/wiki/User:<?php echo $_GET['username']; ?>"><?php echo $_GET["username"]; ?></a><br /></p>
<p>Project selected: <a href="http://<?php echo $_GET['lang']; ?>.<?php echo $_GET['project']; ?>.org/wiki/"><?php echo $_GET['lang']; ?>.<?php echo $_GET['project']; ?>.org</a> (<a href="https://secure.wikimedia.org/<?php echo $_GET['project']; ?>/<?php echo $_GET['lang']; ?>/wiki/">Secure access</a>)</p>
<?php
$con = mysql_connect($hyDBServer,$hyDBUsername,$hyDBUserpass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("enwiki_p", $con); // TEMP, will have to allow visitor to choose database

$query = 'SELECT * FROM user WHERE user_name = "' . $_GET['username'] . '";');
$result = mysql_query($query);

while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    printf("User edit count: %s", $row[3]);  
}

mysql_close($con);
?>
</p>
<div class="visualClear"></div> 
</div> 
</div> 
<div id="mw-head" class="noprint"> 
<div id="p-personal" class=""> 
	<h5>Personal tools</h5> 
		<ul>
			<li  id="pt-userpage" class="active"><a href="http://meta.wikimedia.org/wiki/User:Hydriz" title="Visit Hydriz's userpage on Meta Wiki" accesskey=".">Hydriz on Meta</a></li> 
			<li  id="pt-mytalk"><a href="http://meta.wikimedia.org/wiki/User_talk:Hydriz" title="Visit Hydriz's talk page on Meta Wiki" accesskey="n">Talk page</a></li> 
			<li  id="pt-preferences"><a href="http://toolserver.org/~vvv/sulutil.php?user=Hydriz" title="Information about Hydriz on Wikimedia">Global Hydriz</a></li>
			<li  id="pt-logout"><a href="http://meta.wikimedia.org" title="Brings you back to Meta Wiki on Wikimedia">Back to Meta</a></li> 
		</ul> 
</div> 
<div id="left-navigation"> 
<div id="p-namespaces" class="vectorTabs"> 
	<h5>Namespaces</h5> 
	<ul> 
					<li  id="ca-nstab-user" class="selected"><span><a href="./index.php"  title="Visits the Main Page" accesskey="c">Main Page</a></span></li> 
					<li  id="ca-talk"><span><a href="./matrix.php"  title="Visits the account matrix of Hydriz" accesskey="t">Account Matrix</a></span></li> 
			</ul> 
</div> 
<div id="p-variants" class="vectorMenu emptyPortlet"> 
		<h5><span>Variants</span><a href="#"></a></h5> 
	<div class="menu"> 
		<ul> 
		</ul> 
	</div> 
</div> 
</div> 
<div id="right-navigation"> 
<div id="p-views" class="vectorTabs"> 
	<h5>Views</h5> 
	<ul> 
		<li id="ca-view" class="selected"><span><a href="./index.php" >Read</a></span></li> 
		<li id="ca-edit"><span><a href="https://github.com/Hydriz/Hytools/tree/2.2tsh1/tools/editcount_result.php"  title="Preview the source code for this page" accesskey="e">View source</a></span></li> 
		<li id="ca-history" class="collapsible "><span><a href="https://github.com/Hydriz/Hytools/commits/2.2tsh1/"  title="Find out the history of this software" accesskey="h">View history</a></span></li> 
</div> 
<div id="p-search"> 
	<h5><label for="searchInput">Search</label></h5> 
	<form action="http://en.wikipedia.org/w/index.php" id="searchform"> 
		<input type='hidden' name="title" value="Special:Search"/> 
			<div id="simpleSearch"> 
				<input id="searchInput" name="search" type="text"  title="Search Wikipedia [f]" accesskey="f"  value="" /> 
				<button id="searchButton" type='submit' name='button'  title="Search Wikipedia for this text"><img src="./images/search-ltr.png" alt="Search" /></button> 
			</div> 
	</form> 
</div> 
</div> 
</div> 
<?php require_once("includes/Sidebar.php"); ?>
<div id="footer"> 
	<ul id="footer-info"> 
		<li id="footer-info-copyright">Text is available under the <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
additional terms may apply.
See <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> for details.<br />This website is powered by Hytools <?php require_once("LocalSettings.php"); echo $hyVersion; ?>.</li> 
	</ul> 
	<ul id="footer-places"> 
		<li id="footer-places-privacy"><a href="http://wikimediafoundation.org/wiki/Privacy_policy" title="wikimedia:Privacy policy">Privacy policy</a></li> 
		<li id="footer-places-about"><a href="http://wikimediafoundation.org/wiki/Main_Page" title="wikimedia:Main Page">About Wikimedia Foundation</a></li> 
		<li id="footer-places-disclaimer"><a href="http://en.wikipedia.org/wiki/Wikipedia:General_disclaimer" title="en:Wikipedia:General disclaimer">Disclaimers</a></li> 
	</ul> 
	<ul id="footer-icons" class="noprint"> 
		<li id="footer-copyrightico"> 
			<a href="http://wikimediafoundation.org/"><img src="images/license.png" width="88" height="31"/></a> 
		</li> 
		<li id="footer-poweredbyico"> 
			<a href="http://toolserver.org/"><img src="images/powered-by.png" alt="Powered by Toolserver" width="88" height="31" /></a> 
		</li> 
	</ul> 
	<div style="clear:both"></div> 
</div> 
</body> 
</html> 
