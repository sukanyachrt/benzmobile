<?php
header('Content-Type: application/json');
error_reporting(0);
$data = isset($_GET['v']) ? $_GET['v'] : '';
if ($data == "receiveData") {
    echo json_encode([$_POST,$_FILES]);
}
