<?php

//path to directory to scan
$directory = "/mnt/user-store/xmldumps/";
 
//get all image files with a .jpg extension.
$images = glob($directory);
 
//print each file name
foreach($images as $image)
{
echo $image;
}

?>
