<?php
require_once("Modelos/model_login.php");

class UsuarioController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UsuarioModel();
    }

    public function loginUser($username, $password)
    {
        $user = $this->userModel->login($username, $password);
        if ($user) {
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $user['username'];
            // Puedes agregar más datos a la sesión si lo necesitas
            header("Location: index.php"); // Redireccionar al dashboard o página principal
        } else {
            // Devolver un error de inicio de sesión
            return "Usuario o contraseña incorrectos";
        }
    }
}