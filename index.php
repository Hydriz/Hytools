<?php
/*
    Redirect users to the ssl-enabled website to enforce ssl
*/

   $hyRedirectLocation = "https://toolserver.org/~hydriz/ssl/index.php";
   header( 'Location: ' . $hyRedirectLocation ) ;

?>
