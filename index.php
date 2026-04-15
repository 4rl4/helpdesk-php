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

