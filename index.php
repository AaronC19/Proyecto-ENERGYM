<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    // invoca cabecera de la página
    include_once('codigos/enca.inc');
    ?>
    <style>
        .entrenadores .trainer {
            transition: color 0.5s ease, box-shadow 0.5s ease, transform 0.5s ease; /* Agrega transición para color, box-shadow y transform */
        }

        .entrenadores a:hover .trainer {
            color: #0f0f0f !important;
            box-shadow: 0 0 20px 5px rgba(153, 0, 255, 0.7) !important;
            transform: scale(1.05); /* Ajusta el valor según la escala que desees al hacer hover */
        }
    </style>
</head>

<body>
    <header>
        <?php
        // invoca menu de la página
        include_once('codigos/menu.inc');
        ?>
    </header>
    <main>
        <div class="slider" id="inicio">
            <h1 id="slogantext">"Una vida, mantente en forma, lucha por ella.."</h1>
        </div>

        <div class="info" id="info">
            <center>
                <h1>Entrenadores</h1>
                <br>
                <div class="continfo mt-5">
                    <div class="entrenadores">
                        <a href="entrenadorAaron.php">
                            <div class="trainer" id="tr1"></div>
                        </a>
                        <a href="entrenadorJuan.php">
                            <div class="trainer" id="tr2"></div>
                        </a>
                        <a href="entrenadorEmmanuel.php">
                            <div class="trainer" id="tr3"></div>
                        </a>
                    </div>
                    <div class="text">
                        ¡Hola y bienvenido a tu sesión de entrenamiento! Nuestros nombres
                        son Aaròn, Juan y Emmanuel y seremos sus entrenadores por hoy. Antes
                        de comenzar nos gustaría recordarte que siempre escuches a tu cuerpo
                        y dejes de hacer ejercicio si sientes algún dolor o molestia. Si
                        tiene alguna lesión o condición médica, háganoslo saber para que
                        pueda ajustar los ejercicios en consecuencia. Preparémonos para
                        sudar!" <br /><br />Comencemos con un calentamiento de cinco minutos
                        para aumentar el ritmo cardíaco y preparar los músculos para el
                        entrenamiento. Comenzaremos con algunos ejercicios cardiovasculares
                        ligeros como saltos, rodillas altas o trotar en el lugar. Luego,
                        pasaremos a algunos ejercicios de estiramiento dinámicos como
                        balanceos de piernas, círculos de brazos y estocadas. Recuerda
                        respirar profundamente y calentar a tu propio ritmo.
                        <br /><br />Ahora que ya has calentado, es el momento del
                        entrenamiento principal. Nos centraremos en un grupo muscular o
                        ejercicio específico. Haremos 4 series de 12 repeticiones cada una.
                        Asegúrate de usar la forma adecuada y contraer los músculos durante
                        todo el movimiento. Si no estás seguro de la técnica, no dudes en
                        pedirnos ayuda
                    </div>
                </div>
            </center>
        </div>

        <div class="diet">
            <center>
                <div class="dieta">
                    <div class="trainer" id="diet1"></div>
                    <div class="text">
                        Los alimentos dietéticos generalmente se refieren a alimentos que
                        son bajos en calorías, grasa, azúcar y sal, y a menudo tienen un
                        alto contenido de fibra, proteínas y nutrientes. Estos alimentos
                        pueden incluir frutas, verduras, proteínas magras, cereales
                        integrales y productos lácteos bajos en grasa. La incorporación de
                        este tipo de alimentos en una dieta equilibrada y variada puede
                        promover la pérdida de peso y mejorar la salud en general
                    </div>
                </div>
            </center>
        </div>

        <div class="muscle" id="muscle">
            <center>
                <div class="con">
                    <h1 style="
                        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',
                            sans-serif;
                        ">
                        <div class="parallax"></div>
                        Registrate para descrubrir nuestras rutinas gratuitas 🔥
                    </h1>

                    <a href="registro.php">
                        <div class="b1" style="
                            background-image: url('codigos/img/principiante.jpg');
                            background-size: cover;
                            ">
                            <div class="overlay">
                                <div class="text">Principiante</div>
                            </div>
                        </div>
                    </a>
                    <a href="registro.php">
                        <div class="b1" style="
                            background-image: url('codigos/img/intermedio.jpg');
                            background-size: cover;
                            ">
                            <div class="overlay">
                                <div class="text">Intermedio</div>
                            </div>
                        </div>
                    </a>
                    <a href="registro.php">
                        <div class="b1" style="
                            background-image: url('codigos/img/avanzado.jpeg');
                            background-size: cover;
                            background-position-y: -50px;
                            ">
                            <div class="overlay">
                                <div class="text">Avanzado</div>
                            </div>
                        </div>
                    </a>
                </div>
            </center>
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
