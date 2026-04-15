<?php
include'koneksi.php'; //Mengambil kabel koneksi

// cek apakah tombol kirim sudah ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $laporan = $_POST["laporan"];

    //perintah untuk memasukkan data ke database 
    $query = "INSERT INTO pengaduan (nama, laporan) VALUES ('$nama', '$laporan')";

    if(mysqli_query($conn,$query)){
            echo"<div style='color:green;'><b>Sukses!</b>Laporan Berhasil disimpan ke database.</div><hr>"; // jika data berhasil masuk ke database
    }else {
        echo "Error:". mysqli_error($conn); // jika data tidak berhasil masuk ke database
    }
}

$ambil_data = mysqli_query($conn, "SELECT * FROM pengaduan ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>              
    <title>Sistem Pengaduan - Helpdesk</title>
    <style>
        table {width: 100%;
               border-collapse: collapse;
               margin-top: 20px;}
        th,td {border: 1px solid #ddd; padding: 10px; text-align: left;}
        th {background-color: #f2f2f2;}
    </style>
</head>
<body>
    <h1>Kirim Laporan Pengaduan</h1>
    <form method="POST" action="">
        <label>Nama Anda:</label><br>
        <input type="text" name="nama" placeholder="Masukan Nama.."><br><br>

        <label>Isi Laporan:</label><br>
        <textarea name="laporan" placeholder="Tulis kendala Anda di sini.."></textarea><br><br>

        <button type="submit">Kirim Sekarang</button>
    </form>
    <hr>
    <h2>Daftar Laporan Masuk</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Pelapor</th>
            <th>Isi laporan</th>
        </tr>
        <?php 
        $no = 1;
        while($row = mysqli_fetch_array($ambil_data)) {
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['laporan'];?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>

