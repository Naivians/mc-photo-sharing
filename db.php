<?php
$conn = new mysqli("localhost", "root", "", "wedding");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function insertFile($filename, $fileType)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO photos (filename, filetype) VALUES (?, ?)");
    $stmt->bind_param("ss", $filename, $fileType);
    return $stmt->execute();
}

function getFiles()
{
    global $conn;
    $result = $conn->query("SELECT filename, filetype FROM photos ORDER BY upload_at DESC");
    $files = [];
    while ($row = $result->fetch_assoc()) {
        $files[] = [
            "url" => "uploads/" . $row["filename"],
            "type" => $row["filetype"]
        ];
    }
    return $files;
}

function disableUploadBtn()
{
    global $conn;
    $result = $conn->query("SELECT isEnable FROM settings WHERE `action_name` = 'upload_button'");
    return $result->fetch_assoc();
}

?>