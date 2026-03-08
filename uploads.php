<?php
require "db.php";
$uploadDir = "uploads/";

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$name = $_FILES["photo"]["name"];
$tmpName = $_FILES["photo"]["tmp_name"];

$ext = pathinfo($name, PATHINFO_EXTENSION);

$prefix = ($ext != "mp4") ? "IMG" : "VID";

$filename = $prefix . "-" . uniqid() . "." . $ext;

$filePath = $uploadDir . $filename;

// $res = insertFile($filename, mime_content_type($filePath));

// if(!$res) {
//    return json_encode(["error" => "Failed to save file info to database"]);
//     exit;
// }


if (move_uploaded_file($tmpName, $filePath)) {
    header("Location: index.php");
    exit;
} else {
    echo "Upload Failed";
}

?>