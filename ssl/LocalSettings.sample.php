<?php

/*
    LocalSettings.php file for all configuration
    settings of the site! Please use carefully...

*/

$IP = dirname( __FILE__ );

// Get the default site configurations
require_once("$IP/includes/DefaultSettings.php");

// Site notice to appear at the top of pages
$hySiteNotice = "";

// Recipient of error message
$hyErrorRecipient = "";

// Connect to the database host
$hyDBServer = "localhost";
$hyDBUsername = "root";
$hyDBUserpass = "pass";
