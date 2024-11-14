<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'tokobukudb';
$port = 3306;

$conn = new mysqli ($host, $user, $password, $dbname, $port);

if($conn->connect_error){
    die("Koneksi Gagal : " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>