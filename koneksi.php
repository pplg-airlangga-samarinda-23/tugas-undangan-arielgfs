<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "undangan";

$koneksi = new mysqli($host, $username, $password, $database);
if ($koneksi->connect_error) {
    echo "Koneksi gagal :(";
}