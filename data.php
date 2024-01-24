<?php
header('Content-Type: application/json');
error_reporting(0);
$data = isset($_GET['v']) ? $_GET['v'] : '';
if ($data == "receiveData") {
    echo json_encode([$_POST,$_FILES]);
}
else if($data=="getcolor"){
    echo json_encode("#CD2ED5");
}
else if($data=="useCoupon"){
    echo json_encode(["coupon_code" => "CS0005","used"=>false]);
}
