<?php
//konfigurasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$database = "pengurus";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if (!$conn) {
    die("Koneksi error: " . mysqli_connect_error());
}else{
    echo "Koneksi berhasil";
}
?>