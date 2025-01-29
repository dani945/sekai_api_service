<?php
include "init.php";

$arr_data = [];
$str = 'SELECT * FROM `master_user_mobile` WHERE flag = 1';
$sql = mysqli_query($CONN, $str);
while ($row = mysqli_fetch_assoc($sql)) {
    $arr_data[] = $row;
}

$response['Response'] = true;
$response['Message'] = "Success";
$response['Data'] = $arr_data;

echo json_encode($response);
