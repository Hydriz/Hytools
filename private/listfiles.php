<?php

echo '<html>
<head>
<title>Wikimedia Database download service</title>
</head>
<body>
<h1>Wikimedia Database download service</h1>
<p>Welcome to the Wikimedia Database download service hosted on the Wikimedia Toolserver. This list is pretty ugly now, so just use <tt>Ctrl + F</tt> and type in the wiki that you wish to download. There are also date stamps along with each download, so choose which date of dump you would like to have and click it to download!</p>
<p>Prefer the original? Click <a href="http://dumps.wikimedia.org/backup-index.html">here</a>.</p>';

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
                    array_push($files, $dir . "/" . $file);
                }
            }
        }

        closedir($dh);
        return $files;
    }
}

echo '<h2>a</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/a') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}  

echo '<h2>b</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/b') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>c</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/c') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>d</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/d') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>e</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/e') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>f</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/f') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>g</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/g') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>h</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/h') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>i</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/i') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>j</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/j') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>k</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/k') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>l</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/l') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>m</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/m') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>n</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/n') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>o</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/o') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>p</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/p') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>q</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/q') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>r</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/r') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>s</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/s') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>t</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/t') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>u</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/u') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>v</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/v') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>w</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/w') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>x</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/x') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>y</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/y') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2>z</h2>'
foreach (ListFiles('/mnt/user-store/xmldumps/z') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo "</body>
</html>";

?>
