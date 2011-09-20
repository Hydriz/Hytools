<?php
/*

    Script for sending an email to
    webmaster when an error occurs

*/
//error handler function
function customError($errno, $errstr)
  {
  echo "<b>Error:</b> [$errno] $errstr<br />";
  echo "Webmaster has been notified";
  error_log("Dear Webmaster,\n" . "Hytools has recently encountered an error and this email is sent automatically to you to inform you about it and hoping you could do something about it. The description of the message is provided below:\n" . "Error: [$errno] $errstr",1,
  $hyErrorRecipient,"From: " . $hyErrorSender);
  }

//set error handler
set_error_handler("customError",E_USER_WARNING);

?>
