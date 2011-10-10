<?php

echo '<html>
<head>
<title>Wikiteam wikis backup</title>
</head>
<body>
<h1>The Wikiteam wikis backup service</h1>
<p>Welcome to the Wikiteam wikis backup service. This is the service whereby we serve you the database dumps of wikis around the world, just to help out with the Wikiteam movement!</p>';

function ListFiles($dir) {

    if($dh = opendir($dir)) {

        $files = Array();
        $inner_files = Array();

        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.') {
                if(is_dir($dir . "/" . $file)) {
                    $inner_files = ListFiles($file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files); 
                } else {
                    array_push($files,$file);
                }
            }
        }

        closedir($dh);
        return $files;
    }
}

foreach (ListFiles('/mnt/user-store/wikiteam/public') as $key=>$file){
    echo '<li><a href="down.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo "</body>
</html>";

?>
