<?php

echo "<html>
<head>
<title>Wikimedia Database download service</title>
</head>
<body>
<h1>Wikimedia Database download service</h1>
<p>Welcome to the Wikimedia Database download service hosted on the Wikimedia Toolserver. This list is pretty ugly now, so just use <tt>Ctrl + F</tt> and type in the wiki that you wish to download. There are also date stamps along with each download, so choose which date of dump you would like to have and click it to download!</p>";

function ListFiles($dir) {

    if($dh = opendir($dir)) {

        $files = Array();
        $inner_files = Array();

        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.') {
                if(is_dir($dir . "/" . $file)) {
                    $inner_files = ListFiles($dir . "/" . $file);
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


foreach (ListFiles('/mnt/user-store/xmldumps') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}  

echo "</body>
</html>";

?>
