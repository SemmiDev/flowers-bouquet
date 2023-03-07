<?php

error_reporting(0);


// -- db  = id20401018_flowers_bouquet
// -- username = id20401018_flowersbouquet
// -- host = localhost
// -- password = wT1BD>t~]V1ZxJ&(

$server = "localhost";
$user = "id20401018_flowersbouquet";
$pass = "wT1BD>t~]V1ZxJ&(";
$database = "id20401018_flowers_bouquet";

$koneksi = mysqli_connect($server, $user, $pass, $database);

if (!$koneksi) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
