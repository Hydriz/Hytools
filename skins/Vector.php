<?php require_once(".." . "/LocalSettings.php"); ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $IP . '/skins/vector/screen.css'; ?>" />
		<div id="mw-page-base" class="noprint"></div>
		<div id="mw-head-base" class="noprint"></div>
		<!-- content -->
		<div id="content">
			<a id="top"></a>
			<div id="mw-js-message" style="display:none;"></div>
			<?php if ( $hySitenotice != "" ): ?>
			<!-- sitenotice -->
			<div id="siteNotice"><?php echo $hySitenotice ?></div>
			<!-- /sitenotice -->
			<?php endif; ?>
			<!-- firstHeading -->
			<h1 id="firstHeading" class="firstHeading">Main Page</h1>
			<!-- /firstHeading -->
			<!-- bodyContent -->
			<div id="bodyContent">
				<!-- bodytext -->
				<?php require_once("$IP/includes/MainBodyText.php"); ?>
				<!-- /bodytext -->
			</div>
			<!-- /bodyContent -->
		</div>
		<!-- /content -->
		<!-- header -->
		<div id="mw-head" class="noprint">
			<?php require_once("$IP/includes/PersonalTools.php"); ?>
			<div id="left-navigation">
				<?php require_once("$IP/includes/LeftNavigation.php"); ?>
			</div>
			<div id="right-navigation">
				<?php require_once("$IP/includes/RightNavigation.php"); ?>
			</div>
		</div>
		<!-- /header -->
		<!-- panel -->
			<div id="mw-panel" class="noprint">
				<!-- logo -->
					<div id="p-logo"><a style="background-image: url(<?php echo $hyLogo; ?>);" href="<?php echo $hyServer . '/index.php'; ?>" <?php echo "Visit the main page"; ?>></a></div>
				<!-- /logo -->
				<?php require_once("$IP/includes/Sidebar.php"); ?>
			</div>
		<!-- /panel -->
		<!-- footer -->
			<?php require_once("$IP/includes/Footer.php"); ?>
		<!-- /footer -->
		<!-- fixalpha -->
		<script type="text/javascript"> if ( window.isMSIE55 ) fixalpha(); </script>
		<!-- /fixalpha -->
	</body>
</html>

