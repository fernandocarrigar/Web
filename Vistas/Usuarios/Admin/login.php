<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <link rel="stylesheet" href="/Recursos/Css/login.css" asp-append-version="true" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>
    <div class="login-container">
        <h2>Panel Administrador</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Usuario:</label>
                <div class="input-wrapper">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="usuario" id="username" placeholder="Usuario" required>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock"></i>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                </div>
            </div>
            <button type="submit" name="login">Iniciar Sesión</button>
        </form>
    </div>

</body>

</html>