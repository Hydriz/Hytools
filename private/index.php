<?php

/* Initialise the webpage first */
$output = "<html>
<head>
<title>Private information about the Toolserver</title>
</head>
<body>\n";

/* Now for the core stuff */
// IP address of the Toolserver server
$output .= "<p>" . "Server's IP address: " . $_SERVER['SERVER_ADDR'] . "</p>" . "\n";

// Server URL
$output .= "<p>" . "Server's URL: " . $_SERVER['SERVER_NAME'] . "</p>" . "\n";

// Script path
$output .= "<p>" . "Script path: " . $_SERVER['SCRIPT_NAME'] . "</p>" . "\n";

// Server protocol
$output .= "<p>" . "Server protocol: " . $_SERVER['SERVER_PROTOCOL'] . "</p>" . "\n";

// HTTPS
$output .= "<p>" . "HTTPS: " . $_SERVER['HTTPS'] . "</p>" . "\n";

// Server port
$output .= "<p>" . "Server port: " . $_SERVER['SERVER_PORT'] . "</p>" . "\n";

// Now we close everything...
$output .= "</body>
</html>";

// Finally, output the stuff above
echo $output;

?>
