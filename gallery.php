<?php

$dir = "uploads/";
$files = array_diff(scandir($dir), array('.','..'));

$result = [];

foreach($files as $file){

    $path = $dir.$file;
    $mime = mime_content_type($path);

    $result[] = [
        "id" => $file,
        "url" => $path,
        "type" => $mime
    ];
}

echo json_encode($result);