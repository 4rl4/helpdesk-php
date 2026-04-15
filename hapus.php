<?php
include 'koneksi.php';
//Ambil ID dri URL menggunakan $_GET
$id = $_GET['id'];
//perintah untuk mengapus data berdasarkan id
$query = "DELETE FROM pengaduan WHERE id = '$id'";
if (mysqli_query($conn, $query)) {
    //jika berhasil , lempar kembali ke halaman utama
    header("Location: index.php");
} else {
    echo "Gagal menghapus data:". mysqli_error($conn);
}
?>