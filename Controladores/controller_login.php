<?php
require 'LoginModel.php';
session_start();

$dbHost = "your_host";
$dbUser = "your_db_user";
$dbPass = "your_db_pass";
$dbName = "your_db_name";

// Establecer conexión con la base de datos
try {
    $dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

$loginModel = new LoginModel($dbConnection);

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = $loginModel->getUserByUsername($username);

    if ($user && $loginModel->verifyPassword($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin_dashboard.php');  // Redirige al panel de administrador
        exit;
    } else {
        header('Location: login.php?error=1');  // Redirige de nuevo al inicio de sesión con un mensaje de error
        exit;
    }
}
