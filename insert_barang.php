
<?php
include "init.php";

$namaToko = $_POST['namaToko'];
$namaBarang = $_POST['namaBarang'];
$serialNumber = $_POST['serialNumber'];

if ($namaToko != '' and $namaBarang != '' and $serialNumber != '') {
    $strCek = 'SELECT * FROM `table_scan_barang` WHERE nama_toko = "' . $namaToko . '" and serial_number = "' . $serialNumber . '"';
    $sqlCek = mysqli_query($CONN, $strCek);
    $rowCek = mysqli_fetch_assoc($sqlCek);

    if ($rowCek) {
        $response['Response'] = false;
        $response['Message'] = "Barang Sudah di Scan dan sudah terinput";
    } else {
        $str = 'INSERT INTO `table_scan_barang`(
            `nama_toko`, 
            `nama_barang`, 
            `serial_number`, 
            `created_at`
            ) VALUES (
            "' . $namaToko . '",
            "' . $namaBarang . '",
            "' . $serialNumber . '",
            "' . date("Y-m-d H:i:s") . '"
            )';
        $sql = mysqli_query($CONN, $str);

        if (!$sql) {
            $response['Response'] = false;
            $response['Message'] = "Gagal Input Barang";
            echo json_encode($response);
            die();
        }

        $response['Response'] = true;
        $response['Message'] = "Berhasil Input Barang";
    }
} else {
    $response['Response'] = false;
    $response['Message'] = "Incomplete Data";
}

echo json_encode($response);
