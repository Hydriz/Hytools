<?php

//path to directory to scan
$directory = "/mnt/user-store/xmldumps/";
 
//get all files in specified directory
$files = glob($directory . "*");
 
//print each file name
foreach($files as $file)
{
 //check to see if the file is a folder/directory
 if(is_dir($file))
 {
  echo $file;
 }
}

?>
