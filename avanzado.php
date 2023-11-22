<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // invoca cabecera de la página
    include_once('codigos/enca.inc');
    ?>
    <link rel="stylesheet" href="codigos/css/avanzado.css" />
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
        }

        .welcome-section {
            background-color: rgb(176, 91, 255); /* Cambia esto al color que desees */
            padding-top: 100px;
            padding-bottom: 100px;
            text-align: center;
            color: white;
        }

        .container {
            text-align: center;
        }

        .years-dropdown {
            margin-bottom: 10px;
        }

        /* Estilos para el formulario */
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: rgb(176, 91, 255);
        }

        button {
            background-color: rgb(176, 91, 255);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #563d7c;
        }
    </style>
</head>
<body>
    <header>
        <?php
        // invoca menú de la página
        include_once('codigos/menu.inc');
        ?>
    </header>
    <main>
        <div class="container-fluid welcome-section">
            <h1>Bienvenidos a las Rutinas para Avanzados</h1>
            <p>Aquí encontrarás rutinas de entrenamiento personalizadas para diferentes años de experiencia en el gimnasio</p>
        </div>
        <div class="container mt-4">
            <h2 class="mb-4">
                Selecciona la Cantidad de Años de Entrenamiento
            </h2>
            <form method="post" action="pdfentre.php">
                <!-- Cantidad de años de experiencia -->
                <div class="form-group">
                    <select class="form-control years-dropdown" name="years" id="years">
                        <option value="1">1 año</option>
                        <option value="2">2 años</option>
                        <option value="3">3 años</option>
                        <option value="4">4 años</option>
                        <option value="5">5 años o más</option>
                    </select>
                </div>
                <!-- Botón para generar el PDF -->
                <button type="submit" class="btn btn-primary">Generar PDF</button>
            </form>
        </div>
    </main>
    <footer>
        <?php
        // llama al pie de la página
        include_once('codigos/pie.inc');
        ?>
    </footer>
</body>
</html>
