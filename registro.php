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
                        <form id="registro-form">
                            <div class="form-group">
                                <label for="username">Nombre de Usuario</label>
                                <input type="text" class="form-control" id="username" required />
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electrónico</label>
                                <input type="email" class="form-control" id="correo" required />
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" required />
                            </div>
                            <div class="form-group">
                                <label for="confirmar">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="confirmar" required />
                            </div>
                            <label for="tipo_usuario">Tipo de Usuario:</label>
                            <select id="tipo_usuario" name="tipo_usuario" required>
                                <option value="cliente">Cliente</option>
                                <option value="administrador">Administrador</option>
                            </select>
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