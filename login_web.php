<?php
include "init.php";

$username = $_POST['username'];
$password = sha1($_POST['password']);


if ($username != '' and $password != '') {
    $str = 'SELECT * FROM `master_user_web` WHERE username = "' . $username . '" and password = "' . $password . '"';
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
