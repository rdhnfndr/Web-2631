<?php
session_start();
session_unset(); // Menghapus semua variabel sesi
session_destroy(); // Menghancurkan sesi
header("location: login.php"); // Redirect ke halaman login setelah logout
exit;
?>
