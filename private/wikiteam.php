<?php

echo '<html>
<head>
<title>Wikiteam wikis backup</title>
</head>
<body>
<h1>The Wikiteam wikis backup service</h1>
<p>Welcome to the <a href="http://code.google.com/p/wikiteam">Wikiteam</a> wikis backup service. This is the service whereby we serve you the database dumps of wikis around the world, just to help out with the Wikiteam movement!</p>';

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

// Dumps in progress, sadly have to manually update
echo '<h2>Wikis currently in the process of being dumped</h2>
<p>Below are the wikis that are currently being dumped:</p>
<li><a href="http://wikidoc.org">wikidoc.org</a></li>
<li><a href="http://www.omegawiki.org">omegawiki.org</a></li>
<li><a href="http://www.wikihow.com">wikihow.com</a></li>
<li><a href="http://www.fanhistory.com/w">fanhistory.com</a></li>
<li><a href="http://bvio.com">bvio.com</a></li>';

echo "</body>
</html>";

?>
