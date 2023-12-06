<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("codigos/enca.inc"); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="codigos/css/avanzado.css" />
    <link rel="icon" href="codigos/img/th.jpeg" />
    <style>
        /* Estilo para el botón de generar PDF */
        .btn-generar-pdf {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #ad69c9;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-generar-pdf:hover {
            background-color: #905baf;
        }
    </style>
</head>
<header>
<nav>
  <div class="titulo">
    <h1 class="primero">ENER<span class="segundo">GYM</span></h1>
  </div>
  <div class="menu">
    <!-- Agregar direcciones faltantes -->
    <ul>
      <li><a href="index.php">INICIO</a></li>
      <li><a href="dieta.php">DIETA</a></li>
      <li><a href="index.php">SOBRE NOSOTROS</a></li>
      <li><a href="#contact">CONTACTO</a></li>
      <li><a href="perfil.php">VOLVER AL PERFIL</a></li>
    </ul>
  </div>
</nav>
</header>

<body>
    <main>
        <form action="codigos/pdfprinc.php" method="get">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-3"></div>
                </div>
                <div class="row colorFondo">
                    <div class="col-2"></div>
                    <div class="col-8 mt-4 p-2">
                        <h1 class="mt-5 d-flex justify-content-center align-items-center text-white">
                            Bienvenidos a las Rutinas para Principiantes
                        </h1>
                        <p class="mt-3 d-flex justify-content-center align-items-center text-white">
                            Aquí encontrarás rutinas de entrenamiento personalizadas para
                            diferentes semanas o meses de experiencia en el gimnasio
                        </p>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="container">
                    <h2 class="mb-4 d-flex justify-content-center align-items-center mt-4">
                        Selecciona la Cantidad de Tiempo de Entrenamiento
                    </h2>
                    <select id="weeksOfTraining" name="weeksOfTraining" class="form-control mb-4 mt-2">
                        <option value="1">1 semana</option>
                        <option value="2">1 mes</option>
                        <option value="3">3 meses</option>
                        <option value="4">4 meses o más</option>
                    </select>
                </div>

                <div class="container">
                    <h2 class="mb-4 mt-3 d-flex justify-content-center align-items-center">
                        Rutinas de la Semana
                    </h2>
                    <div id="routineContainer" class="row"></div>
                    <div class="d-flex justify-content-center align-items-center"><button type="submit" class="btn-generar-pdf mb-5 mt-3">Generar PDF</button></div>
                </div>
            </div>
        </form>
    </main>
    <footer id="contact">
        <?php include("codigos/pie.inc"); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="codigos/js/principiante.js"></script>
</body>

</html>