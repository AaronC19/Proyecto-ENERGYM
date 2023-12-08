<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="codigos/css/pagos.css">
</head>

<body>
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
      <li><a href="index.php#contact">CONTACTO</a></li>
      <li><a href="perfil.php">PERFIL</a></li>
  </div>
</nav>  
    </header>
<div>
    <h1 class="mensaje">Nuestros métodos de pago</h1>

    <div class="container">
        <div class="metodosPago">
            <img src="img/bn-icon.png" alt="" />
            <img src="codigos/img/logo_BN.png" alt=" logo BN">
            <h3>Banco Nacional</h3>
            <a href="#" class="btn">Elegir</a>
        </div>

        <div class="metodosPago">
            <img src="img/bcr-icon.png" alt="" />
            <img src="codigos/img/logo_BCR.png" alt=" logo BN">
            <h3>BCR</h3>
            <a href="#" class="btn">Elegir</a>
        </div>

        <div class="metodosPago">
            <img src="img/bac-icon.png" alt="" />
            <img src="codigos/img/logo_BAC.png" alt=" logo BN">
            <h3>Bac</h3>
            <a href="#" class="btn">Elegir</a>
        </div>

        <div class="metodosPago">
            <img src="img/paypal-icon.png" alt="" />
            <img src="codigos/img/logo_PP.png" alt=" logo BN">
            <h3>PayPal</h3>
            <a href="#" class="btn">Elegir</a>
        </div>
    </div>
</div>

<div class="contacto">
    <h2>Si tienes alguna duda, ¡aquí puedes contactarnos!</h2>
    <form action="pagos.php" method="post">
        <div class="campo">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="campo">
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required>
        </div>

        <div class="campo">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn">Enviar Mensaje</button>
    </form>
</div>


<footer>
        <p>
            &copy; 2023 Todos los derechos reservados.
        </p>
    </footer>

</body>

</html>
