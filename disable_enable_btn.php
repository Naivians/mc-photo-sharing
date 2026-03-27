<?php
require "db.php";

$response = null;

if (isset($_POST['action_button'])) {
    $action = $_POST['action_button'];

    if ($action == 'upload_btn') {
        $data_form = [
            "isEnable" => isset($_POST['isEnable']) ? (int)$_POST['isEnable'] : 0,
            "action_name" => $action
        ];

        $res = setActionBtn($data_form);

        if (!$res['status']) {
            $res['msg'] .= " ";
        }

        $response = $res;
    }
}

echo json_encode($response);