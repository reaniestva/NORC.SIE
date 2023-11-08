<?php

require '../config/config.php';
$konek = mysqli_connect('localhost', 'root', '', 'norc.sie');

if (mysqli_errno($konek)) {
    echo "Gagal koneksi ke database";
    exit;
}
