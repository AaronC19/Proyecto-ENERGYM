<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: login.php");
    exit();
}

// Recuperar información del perfil desde la base de datos (ejemplo)
$nombre_usuario = $_SESSION['nombre_usuario'];
// Supongamos que tu tabla de usuarios tiene un campo llamado 'informacion_adicional'
// Realiza una consulta SQL para obtener la información del perfil según el nombre de usuario
// $sql = "SELECT informacion_adicional FROM usuarios WHERE nombre_usuario = ?";
// ...

// Ejemplo de resultado de consulta
$informacion_adicional = "Información adicional del usuario";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido, <?php echo $nombre_usuario; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <style>
        body {
            background-color: #f2f0f4; 
            color: #343a40;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar {
            background-color: #800080; 
        }

        .navbar-brand,
        .nav-link {
            color: #ffffff !important;
        }

        section {
            padding: 50px 0;
        }

        .text-purple {
            color: #800080; 
        }

        footer {
            background-color: #800080;
            color: #ffffff;
            padding: 15px 0;
        }
    </style>
</head>

<body class="d-flex flex-column">

    <nav class="navbar navbar-expand-lg navbar-light bg-purple">
        <div class="container">
            <a class="navbar-brand text-white" href="#">ENERGYM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end align-items-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="cliente.php">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#services">PLENES ALIMENTICIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">CLIENTES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="logout.php">CERRAR SESIÓN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container text-center">
            <h1 class="text-purple">¡Bienvenido Entrenador <?php echo $nombre_usuario; ?>!</h1>
            <p class="lead"></p>
            <hr class="my-4">
        </div>
    </section>

    <footer class="mt-auto bg-purple text-white text-center py-3">
        <div class="container">
            <p>
                &copy; <?php echo date("Y"); ?> ENERGYM - Todos los derechos reservados.
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
