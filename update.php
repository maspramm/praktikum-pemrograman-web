<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_pasien = $_POST['nama_pasien'];
$nama_dokter = $_POST['nama_dokter'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$usia = $_POST['usia'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];

$sql = "UPDATE data_kunjungan SET nama_pasien='$nama_pasien', nama_dokter='$nama_dokter', 
        tanggal_kunjungan='$tanggal_kunjungan', jenis_kelamin='$jenis_kelamin', usia='$usia' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
