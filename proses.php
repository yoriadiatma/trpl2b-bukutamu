<?php
require 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO tamu(nama, email, komentar)
                VALUES('$nama', '$email', '$komentar')";

    $query = $koneksi->query($sql); // eksekusi query

    //cek apakah query berhasil atau gagal
    if ($query) {
        // echo "Berhasil menyimpan data";
        header("Location: index.php"); // redirect langsung ke halaman index.php
        exit;
    } else {
        echo "Gagal menyimpan data!";
    }
}
