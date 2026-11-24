<?php
include "config/db.php";

$username = "saya"; // Ganti sesuai kebutuhan
$plain = bin2hex(random_bytes(8)); // password acak, tampil sekali di bawah
$password = password_hash($plain, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "Admin berhasil ditambahkan. Password: $plain (catat sekarang, lalu hapus file ini).";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
