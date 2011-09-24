<?php

/*
    Loader file for the site notice, displayed when
    $hySiteNotice is configured in LocalSettings.php
    and *all* pages will display the message!
*/

require_once("LocalSettings.php");
echo $hySiteNotice;
