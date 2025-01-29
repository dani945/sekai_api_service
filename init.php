<?php
$CONN = mysqli_connect('localhost', 'root', '') or die('Error Connect MysqlServer');
mysqli_select_db($CONN, 'tes_sekai') or die('Error Connect Database');
date_default_timezone_set("Asia/Jakarta");

// Menambahkan header CORS
header("Access-Control-Allow-Origin: *");  // Mengizinkan semua domain
header("Access-Control-Allow-Methods: POST");  // Mengizinkan metode HTTP yang digunakan
header("Access-Control-Allow-Headers: Content-Type");  // Mengizinkan headers tertentu


session_start();
