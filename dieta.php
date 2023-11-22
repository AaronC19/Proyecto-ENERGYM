<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Plan de Alimentación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="icon" href="codigos/img/th.jpeg" />
    <link rel="stylesheet" href="codigos/css/dieta.css" />
</head>

<body>
    <header>
        <?php
        // invoca menu de pa pagina
        include_once('codigos/menu.inc');
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner">
                        <h1 class="title d-flex justify-content-center align-items-center mt-5">
                            Bienvenido a nuestro Plan de Alimentación
                        </h1>
                    </div>
                </div>
            </div>
            <h1 class="purple d-flex justify-content-center align-items-center" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7)">
                Plan de Alimentación
            </h1>
            <p class="d-flex justify-content-center align-items-center">
                Seleccione su edad, altura, peso y objetivo para obtener un plan de
                alimentación personalizado.
            </p>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6 pt-2 ps-5 pe-5 pb-5">
                    <form id="dietForm">
                        <div class="form-group">
                            <label for="age">Edad:</label>
                            <input type="number" id="age" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="height">Altura (cm):</label>
                            <input type="number" id="height" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="weight">Peso (kg):</label>
                            <input type="number" id="weight" class="form-control" required />
                        </div>
                        <div class="form-group">
                            <label for="goal">Objetivo:</label>
                            <select id="goal" class="form-control">
                                <option value="maintain">Mantener Peso</option>
                                <option value="lose">Bajar de Peso</option>
                                <option value="gain">Aumentar de Peso</option>
                            </select>
                        </div>
                        <button type="submit" class="btn text-white btn-inicio">
                            Obtener Plan
                        </button>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
            <div id="dietPlan" class="mt-4"></div>
        </div>
        <img src="" width="" height="" alt="" />
    </main>
    <footer class="mt-5">
        <?php
        // llama al pie de la pagina
        include_once('codigos/pie.inc');
        ?>
    </footer>

    <script src="codigos/js/dieta.js"></script>
</body>

</html>