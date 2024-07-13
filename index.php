<!DOCTYPE html>
<?php
include 'koneksi.php';
$sql = "SELECT * FROM data_kunjungan";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nama Pasien: " . $row["nama_pasien"]. "<br>";
    }
} else {
    echo "Tidak ada data kunjungan.";
}

$conn->close();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kunjungan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        form {
            margin-bottom: 20px;
        }
        form input[type="text"], form input[type="date"] {
            padding: 6px;
            width: 200px;
        }
        form input[type="submit"] {
            padding: 8px 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Data Kunjungan</h2>
    <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM data_kunjungan";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>';

        $i=1;
        while($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$row['nama_pasien'].'</td>
                    <td>'.$row['nama_dokter'].'</td>
                    <td>'.$row['jenis_kelamin'].'</td>
                    <td>'.$row['usia'].'</td>
                    <td>'.$row['tanggal_kunjungan'].'</td>
                    <td>
                        <a href="edit.php?id='.$row['id'].'">Edit</a>
                        <a href="hapus.php?id='.$row['id'].'">Hapus</a>
                    </td>
                </tr>';
                $i++;
        }
        echo '</tbody>
            </table>';
    } else {
        echo "Belum ada data kunjungan.";
    }
    $conn->close();
    ?>

    <form action="tambah.php" method="POST">
        <h2>Form Kunjungan</h2>
        <input type="text" name="nama_pasien" placeholder="Nama Pasien" required><br><br>
        <input type="text" name="nama_dokter" placeholder="Nama Dokter" required><br><br>
        <input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" required><br><br>
        <input type="text" name="usia" placeholder="Usia" required><br><br>
        <input type="date" name="tanggal_kunjungan" required><br><br>
        <input type="submit" value="Tambah Kunjungan">
    </form>
</body>
</html>
