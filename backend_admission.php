<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['admission'])){

    // ambil data dari formulir
    $user_id = $_POST['user_id'];
    $tanggal_daftar = date("Y-m-d");
    $course_id = $_POST['course_id'];

    // buat query
    $sql = "INSERT INTO admission (user_id, tanggal_daftar, course_id) VALUE ('$user_id', '$tanggal_daftar', '$course_id')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>