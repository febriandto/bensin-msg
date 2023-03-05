<?php 

$server = "localhost";
$db = "bensin";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn) {
	die("Koneksi Gagal: ". mysqli_connect_error());
}