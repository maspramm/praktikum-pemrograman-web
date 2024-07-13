<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "SELECT * FROM data_kunjungan WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Kunjungan tidak ditemukan.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kunjungan</title>
</head>
<body>
    <h2>Edit Kunjungan</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="nama_pasien" value="<?php echo $row['nama_pasien']; ?>" required><br><br>
        <input type="text" name="nama_dokter" value="<?php echo $row['nama_dokter']; ?>" required><br><br>
        <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin']; ?>" required><br><br>
        <input type="text" name="usia" value="<?php echo $row['usia']; ?>" required><br><br>
        <input type="date" name="tanggal_kunjungan" value="<?php echo $row['tanggal_kunjungan']; ?>" required><br><br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>
