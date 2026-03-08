<?php
$conn = new mysqli("localhost", "root", "", "wedding");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function insertFile($filename, $fileType) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO photos (filename, filetype) VALUES (?, ?)");
    $stmt->bind_param("ss", $filename, $fileType);
    return $stmt->execute();
}

function getFiles() {
    global $conn;
    $result = $conn->query("SELECT filename, filetype FROM photos ORDER BY uploaded_at DESC");
    $files = [];
    while ($row = $result->fetch_assoc()) {
        $files[] = [
            "url" => "uploads/" . $row["filename"],
            "type" => $row["filetype"]
        ];
    }
    return $files;
}
?>