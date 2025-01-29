<?php
include "init.php";

$idUser = $_POST['idUser'];
$password = sha1($_POST['password']);


if ($idUser != '' and $password != '') {
    $str = 'UPDATE `master_user_mobile` SET `password`= "'.$password.'" WHERE id = '.$idUser;
    $sql = mysqli_query($CONN, $str);

    $response['Response'] = true;
    $response['Message'] = "Berhasil Perbaharui Password";

    $strmum = 'SELECT * FROM `master_user_mobile` WHERE id = '.$idUser;
    $sqlmum = mysqli_query($CONN, $strmum);
    $rowmum = mysqli_fetch_assoc($sqlmum);

    $response['Data'] = $rowmum;
} else {
    $response['Response'] = false;
    $response['Message'] = "Incomplete Data";
}

echo json_encode($response);
