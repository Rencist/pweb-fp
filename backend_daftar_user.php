<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar_user'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];
    $password = $_POST['password'];

    // buat query
    $sql = "INSERT INTO contact (nama, email, no_telp, password) VALUE ('$nama', '$email', '$no_telp', '$password')";
    $query = mysqli_query($db, $sql);
    echo($sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: pages/signup.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>