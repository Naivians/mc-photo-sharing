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

$mime = mime_content_type($tmpName);

if (move_uploaded_file($tmpName, $filePath)) {

    $res = insertFile($filename, $mime);

    if (!$res) {
        echo json_encode(["error" => "DB insert failed"]);
        exit;
    }

    echo json_encode(["success" => "Upload successful"]);

} else {
    echo json_encode(["error" => "Upload failed"]);
}
?>