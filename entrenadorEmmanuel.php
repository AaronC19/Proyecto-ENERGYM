<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Emmanuel Rodrígues - Entrenador Personal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="codigos/css/entrenadores.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-purple">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Emmanuel Rodrígues </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end align-items-end" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#contact">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-purple">Sobre mí</h2>
                    <p>
                        Soy un entrenador y preparador físico apasionado por ayudar a las
                        personas a alcanzar sus metas de salud y bienestar. Con años de
                        experiencia en el campo, he desarrollado un enfoque único y
                        personalizado para cada uno de mis clientes, adaptando mis
                        programas de entrenamiento a sus necesidades y objetivos
                        individuales. Mi filosofía se basa en el equilibrio entre el
                        ejercicio, la nutrición y el descanso adecuado, para lograr
                        resultados duraderos y sostenibles.
                    </p>
                    <p>
                        Si estás buscando un entrenador que te guíe y te apoye en tu
                        camino hacia una vida más saludable, no dudes en contactarme.
                        Estoy aquí para ayudarte a alcanzar tus metas.
                    </p>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5"></section>

    <section id="services" class="bg-light py-5">
        <div class="container">
            <h2 class="text-purple text-center">Planes de Entrenamiento</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Plan Básico</h5>
                            <p class="card-text">Entrenamiento personalizado</p>
                            <p class="card-text">Asesoramiento nutricional</p>
                            <p class="card-text">Medidas corporales</p>
                            <p class="card-text">10.000₡ al mes</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="pagos.php" class="btn btn-purple">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Plan Avanzado</h5>
                            <p class="card-text">Entrenamiento personalizado intensivo</p>
                            <p class="card-text">Asesoramiento nutricional avanzado</p>
                            <p class="card-text">Acceso a clases grupales</p>
                            <p class="card-text">18.000₡ al mes</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="pagos.php" class="btn btn-purple">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Plan Premium</h5>
                            <p class="card-text">Entrenamiento personalizado de élite</p>
                            <p class="card-text">Asesoramiento nutricional personalizado</p>
                            <p class="card-text">Acceso ilimitado a clases y gimnasio</p>
                            <p class="card-text">25.000₡ al mes</p>
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="pagos.php" class="btn btn-purple">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="text-purple text-center">Contáctame</h2>
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="name" required />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="email" required />
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-purple btn-block">
                            Enviar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer para Emmanuel -->
    <footer class="bg-purple text-white text-center py-3">
        <p>
            &copy; 2023 Emmanuel Rodrígues - Entrenador Personal. - Todos los
            derechos reservados.
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>