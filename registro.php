<?php
// Establecer la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "aaronCR14";
$dbname = "inicioderegistro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar datos del formulario y evitar inyección SQL
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['correo']);
    $password = mysqli_real_escape_string($conn, $_POST['contrasena']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirmar']);
    $user_type = mysqli_real_escape_string($conn, $_POST['tipo_usuario']);

    // Verificar que el tipo de usuario sea "cliente" antes de continuar
    if ($user_type !== "cliente") {
        echo "Error: Solo se permiten registros como clientes.";
        exit();
    }

    // Hash de la contraseña (puedes usar algoritmos más seguros según tus necesidades)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Realizar la inserción en la base de datos
    $insert_query = "INSERT INTO usuarios (nombre_usuario, correo, contrasena, tipo_usuario) VALUES ('$username', '$email', '$hashed_password', '$user_type')";

    if ($conn->query($insert_query) === TRUE) {
        // Registro exitoso, redirige a index.php
        header("Location: index.php");
        exit(); // Asegura que no se ejecute más código después de la redirección
    } else {
        echo "Error al registrar el usuario: " . $conn->error;
    }
}

// Cierra la conexión al final del archivo si ya no la necesitas
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="codigos/css/registro.css" />
    <link rel="icon" href="codigos/img/th.jpeg" />
    <title>Registro en el Gimnasio</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header text-white">
                        <h3 class="text-center">Inscripción ENERGYM</h3>
                    </div>
                    <div class="card-body p-5">
                        <form id="registro-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" class="form-control" name="username" id="username" required />
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electrónico</label>
                                <input type="email" class="form-control" name="correo" id="correo" required />
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" name="contrasena" id="contrasena" required />
                            </div>
                            <div class="form-group">
                                <label for="confirmar">Confirmar Contraseña</label>
                                <input type="password" class="form-control" name="confirmar" id="confirmar" required />
                            </div>
                            <!-- Tipo de usuario fijo como "cliente" -->
                            <input type="hidden" name="tipo_usuario" value="cliente">
                            <button type="submit" class="btn btn-block text-white btn-registro mt-3">
                                Registrarse
                            </button>
                        </form>
                        <p id="error-msg" class="text-danger mt-3"></p>
                        <p class="mt-3 text-center">
                            ¿Ya tienes una cuenta? <a href="login.php">Iniciar Sesión</a>
                        </p>
                        <div class="d-flex justify-content-center align-items-center mt-2">
                            <a href="index.php">VOLVER A INICIO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mb-5">
            <div class="col-12"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
