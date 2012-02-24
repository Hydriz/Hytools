<?php

/**
 * This is the main index file for all the wikis available for download
 */

// Get the functions
require_once("functions.php");

echo '<html>
<head>
<title>Wikimedia Database download service</title>
</head>
<body>
<h1>Wikimedia Database download service</h1>
<p>Welcome to the Wikimedia Database download service hosted on the Wikimedia Toolserver. This list is pretty ugly now, so just use <tt>Ctrl + F</tt> and type in the wiki that you wish to download. There are also date stamps along with each download, so choose which date of dump you would like to have and click it to download!</p>
<p>Prefer the original? Click <a href="http://dumps.wikimedia.org/backup-index.html">here</a>.</p>
<p>Jump to: <a href="#a">a</a>, <a href="#b">b</a>, <a href="#c">c</a>, <a href="#d">d</a>, <a href="#e">e</a>, <a href="#f">f</a>, <a href="#g">g</a>, <a href="#h">h</a>, <a href="#i">i</a>, <a href="#j">j</a>, <a href="#k">k</a>, <a href="#l">l</a>, <a href="#m">m</a>, <a href="#n">n</a>, <a href="#o">o</a>, <a href="#p">p</a>, <a href="#q">q</a>, <a href="#r">r</a>, <a href="#s">s</a>, <a href="#t">t</a>, <a href="#u">u</a>, <a href="#v">v</a>, <a href="#w">w</a>, <a href="#x">x</a>, <a href="#y">y</a>, <a href="#z">z</a></p>';

echo '<h2><a name="a">a</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/a') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}  

echo '<h2><a name="b">b</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/b') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="c">c</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/c') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="d">d</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/d') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="e">e</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/e') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="f">f</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/f') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="g">g</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/g') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="h">h</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/h') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="i">i</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/i') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="j">j</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/j') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="k">k</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/k') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="l">l</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/l') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="m">m</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/m') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="n">n</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/n') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="o">o</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/o') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="p">p</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/p') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="q">q</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/q') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="r">r</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/r') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="s">s</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/s') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="t">t</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/t') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="u">u</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/u') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="v">v</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/v') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="w">w</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/w') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="x">x</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/x') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="y">y</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/y') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

echo '<h2><a name="z">z</a></h2>';
foreach (ListFiles('/mnt/user-store/xmldumps/z') as $key=>$file){
    echo '<li><a href="download.php?download_file=' . $file . '">' . $file . "</a></li>";
}

$file = "/mnt/user-store/xmldumps/md5";
$contents = file($file); 
$string = implode($contents); 

echo $string; 

echo "</body>
</html>";

?>
