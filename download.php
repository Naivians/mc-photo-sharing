<?php

if(!isset($_GET['file'])){
    exit("File missing");
}

$file = basename($_GET['file']);
$baseDir = realpath("uploads/");
$path = realpath($baseDir . "/" . $file);

if(!$path || strpos($path, $baseDir) !== 0){
    exit("Invalid file");
}

if(!file_exists($path)){
    exit("File not found");
}

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$file\"");
header("Content-Length: " . filesize($path));

readfile($path);
exit;