<?php
// Proses login di sini
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Implementasi validasi login (contoh sederhana)
    if ($username === 'user' && $password === 'password') {
        echo 'Login berhasil!';
    } else {
        echo 'Login gagal. Coba lagi.';
    }
}
?>
