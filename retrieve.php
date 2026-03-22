<?php
require "db.php";
   
if (isset($_GET["getBtn"])) {
    $res = getFiles();
    echo json_encode(
        [
            "success" => true,
            "data" => $res,
        ]
    );
}
