<?php
$conn = mysqli_connect("localhost", "root", "", "mahasiswa");
if ($conn == true) {
    echo "berhasil terhubung ke database";
} else {
    echo "gagal terhubung ke database";
}
