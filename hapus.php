<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM data_kunjungan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
