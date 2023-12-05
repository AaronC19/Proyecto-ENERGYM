<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: login.php");
    exit();
}

// Recuperar información del perfil desde la base de datos (ejemplo)
$nombre_usuario = $_SESSION['nombre_usuario'];
$email = $_SESSION['correo_usuario'];
$fecha_registro = $_SESSION['fecha_registro'];
$numero_telefonico = $_SESSION['numero_telefonico'];


 // Corrige el nombre del índice

// Ahora puedes usar $nombre_usuario y $email en esta página
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

        .profile-picture {
            margin: 0 auto;
            margin-bottom: 20px;
            padding: 20px;
        }

        ul{
            margin: 25px;
            font-size: 18px;
        }

        .profile-picture img {
            border: 5px solid;
            border-radius: 50%;
            width: 150px; /* Adjust the width as needed */
            height: 150px; /* Adjust the height as needed */
            
        }

        .profile-info {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
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
                        <a class="nav-link text-white" href="dieta.php">DIETA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">AVANCE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#services">PROGRESO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">ENTRENADOR</a>
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
            <h1 class="text-purple">¡Bienvenido, <?php echo $nombre_usuario; ?>!</h1>

            <!-- Cuadro de foto de perfil centrada -->

            <p class="lead mt-3">Gracias por iniciar sesión. Estamos emocionados de acompañarte en tu viaje hacia la salud y el estado físico.</p>
            <hr class="my-4">

            <!-- Información del perfil -->
            <div class="text-left">
                <div class="profile-info text-left mt-3">
                    <div class="profile-picture">
                        <img src="codigos/img/iconoImagen.jpg" alt="Foto de perfil" class="img-fluid rounded-circle" style="max-width: 100%; height: auto;">

                        <!-- Información del perfil -->
                        <h4>Información del perfil:</h4>
                        <div style="text-align: left;">  
                            <ul>
                                <li><strong>Nombre de usuario:</strong> <?php echo $nombre_usuario; ?></li>
                                <li><strong>Correo electrónico:</strong> <?php echo $email; ?></li>
                                <li><strong>Numero telefonico:</strong> <?php echo $numero_telefonico; ?></li>
                                <li><strong>Fecha de registro:</strong> <?php echo $fecha_registro; ?></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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


