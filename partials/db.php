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

function json_response($status, $data, $msg = "No message recieved")
{
    return [
        "status" => $status,
        "msg" => $msg,
        "data" => $data
    ];

}

function getDisableUploadBtn()
{
    global $conn;
    $result = $conn->query("SELECT isEnable FROM settings WHERE `action_name` = 'upload_btn'");
    return $result->fetch_assoc();
}

function setActionBtn(array $action)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE `settings` SET `isEnable` = ? WHERE `action_name` = ?");

    if (!$stmt) {
        return json_response(false, null, "Prepare failed: " . $conn->error);
    }
    $msg = "Upload button has been ";
    $isEnable = $action['isEnable'];
    $action_name = $action['action_name'];
    $msg = $isEnable == 0 ? $msg . 'disabled' : $msg . 'enable';

    $stmt->bind_param("is", $isEnable, $action_name);

    if (!$stmt->execute()) {
        return json_response(false, null, "Execute failed: " . $stmt->error);
    }
    return json_response(true, null, $msg);
}

?>