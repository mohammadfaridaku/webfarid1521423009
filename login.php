<?php
session_start();
include "koneksi.php"; // Pastikan koneksi benar

// Periksa apakah data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];


    if (empty($username) || empty($password)) {
        die("Username dan password harus diisi!");
    }

    try {
        $sql = "SELECT * FROM akun WHERE username = :username";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        // $sql = "SELECT * FROM akun WHERE username = :username";
        // $stmt = $pdo->prepare($sql);
        // $stmt->bindParam(':username', $username);
        // $stmt->execute();
        // $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if ($password === $user['sandi']) {
                $_SESSION['USER'] = $user['username'];
                $_SESSION['ID'] = $user['id'];
                header("Location: include/index.php"); // Redirect ke dashboard
                exit();
            } else {
                echo "Password salah!";
            }
        } else {
            echo "Username tidak ditemukan!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Silakan login terlebih dahulu!";
}
?>