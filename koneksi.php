<?php
    $user="root"; // atau sesuai username MySQL anda
    $pass=""; // kosong jika tidak ada password (XAMPP default)
    $host="localhost";
    $dbname="db_farid";
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    }
?>