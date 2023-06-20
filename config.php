<?php

$server = "containers-us-west-73.railway.app";
$user = "root";
$password = "ASnWucsEVY0EO5hyvzSi";
$nama_database = "railway";
$port = "7418";

$db = mysqli_connect($server, $user, $password, $nama_database, $port);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>