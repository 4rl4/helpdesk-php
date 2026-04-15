<?php
// cek apakah tombol kirim sudah ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $laporan = $_POST["laporan"];
    
    echo"<div style='color:green;'><b>Sukses!</b>Laporan dari<b>$nama</b> telah diterima:<i>$laporan</i></div><hr>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>              
    <title>Sistem Pengaduan - Helpdesk</title>
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
</body>
</html>

