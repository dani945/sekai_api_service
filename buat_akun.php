<?php
include "init.php";

$namaToko = $_POST['namaToko'];
$jenisToko = $_POST['jenisToko'];
$noKtp = $_POST['noKtp'];
$namaPemilik = $_POST['namaPemilik'];
$alamatToko = $_POST['alamatToko'];
$kodePos = $_POST['kodePos'];
$lokasiToko = $_POST['lokasiToko'];
$noTelp = $_POST['noTelp'];
$email = $_POST['email'];
$kota = $_POST['kota'];
$password = sha1($_POST['password']);


if ($namaToko != '' and $jenisToko != '' and $noKtp != '' and $namaPemilik != '' and $alamatToko != '' and $kodePos != '' and $lokasiToko != '' and $noTelp != '' and $email != '' and $kota != '' and $password != '') {
    $str = 'INSERT INTO `master_user_mobile`(
    `nama`, 
    `email`, 
    `nama_toko`, 
    `jenis_toko`, 
    `no_ktp`, 
    `alamat_toko`, 
    `kode_pos`, 
    `lokasi_toko`, 
    `no_telp`, 
    `kota`, 
    `password`, 
    `created_at`
    ) VALUES 
    (
    "'.$namaPemilik.'",
    "'.$email.'",
    "'.$namaToko.'",
    "'.$jenisToko.'",
    "'.$noKtp.'",
    "'.$alamatToko.'",
    "'.$kodePos.'",
    "'.$lokasiToko.'",
    "'.$noTelp.'",
    "'.$kota.'",
    "'.$password.'",
    "'.date("Y-m-d H:i:s").'"
    )';
    $sql = mysqli_query($CONN, $str);

    if (!$sql) {
        $response['Response'] = false;
        $response['Message'] = "Gagal Buat Akun";
        echo json_encode($response);
        die();
    }

    $response['Response'] = true;
    $response['Message'] = "Berhasil Buat Akun, Silahkan Login";
} else {
    $response['Response'] = false;
    $response['Message'] = "Incomplete Data";
}

echo json_encode($response);
