<?php
include 'koneksi.php';

$nama_pasien = $_POST['nama_pasien'];
$nama_dokter = $_POST['nama_dokter'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];

$sql = "INSERT INTO data_kunjungan (nama_pasien, nama_dokter, jenis_kelamin, usia,  tanggal_kunjungan) VALUES ('$nama_pasien', '$nama_dokter', '$jenis_kelamin', '$usia', '$tanggal_kunjungan')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
