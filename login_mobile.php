<?php
include "init.php";

$email = $_POST['email'];
$password = sha1($_POST['password']);


if ($email != '' and $password != '') {
    $str = 'SELECT * FROM `master_user_mobile` WHERE email = "' . $email . '" and password = "' . $password . '" and flag = 1';
    $sql = mysqli_query($CONN, $str);
    $row = mysqli_fetch_assoc($sql);

    if ($row) {
        $response['Response'] = true;
        $response['Message'] = "Login Success";
        $response['Data'] = $row;
    } else {
        $response['Response'] = false;
        $response['Message'] = "Gagal Login";
    }
} else {
    $response['Response'] = false;
    $response['Message'] = "Incomplete Data";
}

echo json_encode($response);
