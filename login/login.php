<!DOCTYPE html>
<html>
<head>
    <title>Formulario de inicio de sesión</title>
    <!-- Agregar los enlaces a los archivos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Iniciar sesión</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados por el formulario
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Verificar las credenciales (aquí debes agregar tu propia lógica de autenticación)
    if ($username === 'usuario' && $password === 'contraseña') {
        // Inicio de sesión exitoso, redirigir al usuario a la página deseada
        header('Location: bienvenido.php');
        exit;
    } else {
        // Credenciales inválidas, mostrar un mensaje de error
        $error = 'Credenciales inválidas, por favor intenta nuevamente.';
    }
}
?>
