<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "booking_klinik";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>
