<?php
session_start();

// Periksa apakah sesi 'role' ada dan memiliki nilai yang benar
if (isset($_SESSION['role']) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'pengguna')) {
    // Hapus semua data sesi
    session_unset();

    // Hancurkan sesi
    session_destroy();

    // Redirect pengguna ke halaman login atau halaman lain yang sesuai
    header("Location: login.php"); // Gantilah dengan URL halaman login yang sesuai
    exit();
} else {
    // Tindakan jika peran pengguna tidak valid
    echo "Anda tidak memiliki izin untuk logout.";
}
