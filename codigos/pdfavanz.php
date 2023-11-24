<?php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Obtener el valor seleccionado del formulario
    $yearsOfTraining = $_GET["yearsOfTraining"];

    // informacion de las rutinas avanzadas
    $rutinas = array(
        2 => array(
            'Piernas' => array(
                "Sentadillas - 4 series x 10 repeticiones",
                "Prensa de Piernas - 3 series x 12 repeticiones",
                "Zancadas - 3 series x 10 repeticiones por pierna",
                "Extensiones de Cuádriceps - 3 series x 15 repeticiones",
            ),
            'Espalda' => array(
                "Remo en T - 4 series x 8 repeticiones",
                "Remo con Barra - 3 series x 10 repeticiones",
                "Dominadas - 3 series x 12 repeticiones",
                "Hiperextensiones - 3 series x 15 repeticiones",
            ),
            'Pecho' => array(
                "Press de Banca - 4 series x 8 repeticiones",
                "Aperturas con Mancuernas - 3 series x 10 repeticiones",
                "Flexiones - 3 series x 12 repeticiones",
                "Pullover - 3 series x 15 repeticiones",
            ),
            'Brazos' => array(
                "Curl de Bíceps con Barra - 4 series x 10 repeticiones",
                "Press Francés de Tríceps - 3 series x 12 repeticiones",
                "Curl Martillo - 3 series x 10 repeticiones por brazo",
                "Extensiones de Tríceps - 3 series x 15 repeticiones",
            ),
        ),
        3 => array(
            'Piernas' => array(
                "Sentadillas - 5 series x 10 repeticiones",
                "Prensa de Piernas - 4 series x 12 repeticiones",
                "Zancadas - 4 series x 10 repeticiones por pierna",
                "Extensiones de Cuádriceps - 3 series x 15 repeticiones",
            ),
            'Espalda' => array(
                "Remo en T - 5 series x 8 repeticiones",
                "Remo con Barra - 4 series x 10 repeticiones",
                "Dominadas - 4 series x 12 repeticiones",
                "Hiperextensiones - 3 series x 15 repeticiones",
            ),
            'Pecho' => array(
                "Press de Banca - 5 series x 8 repeticiones",
                "Aperturas con Mancuernas - 4 series x 10 repeticiones",
                "Flexiones - 4 series x 12 repeticiones",
                "Pullover - 3 series x 15 repeticiones",
            ),
            'Brazos' => array(
                "Curl de Bíceps con Barra - 5 series x 10 repeticiones",
                "Press Francés de Tríceps - 4 series x 12 repeticiones",
                "Curl Martillo - 4 series x 10 repeticiones por brazo",
                "Extensiones de Tríceps - 3 series x 15 repeticiones",
            ),
        ),
        4 => array(
            'Piernas' => array(
                "Sentadillas - 6 series x 10 repeticiones",
                "Prensa de Piernas - 5 series x 12 repeticiones",
                "Zancadas - 5 series x 10 repeticiones por pierna",
                "Extensiones de Cuádriceps - 4 series x 15 repeticiones",
            ),
            'Espalda' => array(
                "Remo en T - 6 series x 8 repeticiones",
                "Remo con Barra - 5 series x 10 repeticiones",
                "Dominadas - 5 series x 12 repeticiones",
                "Hiperextensiones - 4 series x 15 repeticiones",
            ),
            'Pecho' => array(
                "Press de Banca - 6 series x 8 repeticiones",
                "Aperturas con Mancuernas - 5 series x 10 repeticiones",
                "Flexiones - 5 series x 12 repeticiones",
                "Pullover - 4 series x 15 repeticiones",
            ),
            'Brazos' => array(
                "Curl de Bíceps con Barra - 6 series x 10 repeticiones",
                "Press Francés de Tríceps - 5 series x 12 repeticiones",
                "Curl Martillo - 5 series x 10 repeticiones por brazo",
                "Extensiones de Tríceps - 4 series x 15 repeticiones",
            ),
        ),
        5 => array(
            'Piernas' => array(
                "Sentadillas - 6 series x 12 repeticiones",
                "Prensa de Piernas - 5 series x 15 repeticiones",
                "Zancadas - 5 series x 12 repeticiones por pierna",
                "Extensiones de Cuádriceps - 4 series x 20 repeticiones",
            ),
            'Espalda' => array(
                "Levantamiento de Pesas - 6 series x 10 repeticiones",
                "Remo con Barra - 5 series x 12 repeticiones",
                "Dominadas - 5 series x 15 repeticiones",
                "Hiperextensiones - 4 series x 20 repeticiones",
            ),
            'Pecho' => array(
                "Press de Banca - 6 series x 10 repeticiones",
                "Aperturas con Mancuernas - 5 series x 12 repeticiones",
                "Flexiones - 5 series x 15 repeticiones",
                "Pullover - 4 series x 20 repeticiones",
            ),
            'Brazos' => array(
                "Curl de Bíceps con Barra - 6 series x 12 repeticiones",
                "Press Francés de Tríceps - 5 series x 15 repeticiones",
                "Curl Martillo - 5 series x 12 repeticiones por brazo",
                "Extensiones de Tríceps - 4 series x 20 repeticiones",
            ),
        ),
    );

    // importamos la librería de fpdf.php en codigos
    require('C:/xampp/htdocs/Proyecto_Web_2/codigos/fpdf.php');

    // Declara herencia entre clases para definir el encabezado
    // y pie de página del documento
    class tPDF extends tFPDF
    {

        const SEPARATOR_LINE_THICKNESS = 1.5;

        // Cabecera de página
        // Redefine la función Header de la clase tFPDF
        function Header()
        {
            // Cambiamos el color del fondo solo para el encabezado
            $this->SetFillColor(144, 91, 175);
            // Ajustamos la altura del encabezado a 30
            $this->Rect(0, 0, $this->GetPageWidth(), 30, 'F'); // Ajusta la altura según tus necesidades

            // Volvemos a poner el color de relleno a blanco por defecto
            $this->SetFillColor(255, 255, 255);

            // Posicionamos la imagen y el texto sobre el fondo coloreado
            $this->Image('C:/xampp/htdocs/Proyecto_Web_2/codigos/img/th.jpeg', 10, 5, 20);
            $this->SetFont('Arial', 'B', 12);
            // Cambiamos el color de la letra a blanco
            $this->SetTextColor(255, 255, 255);
            // Movemos un poco a la derecha el texto
            $this->SetX(40);
            $this->Cell(0, 10, utf8_decode('Rutina Avanzado'), 0, 1, 'l');

            // Salto de línea
            $this->Ln(8);
        }

        // Pie de página
        // Redefine la función Footer de la clase tFPDF
        function Footer()
        {
            // Posición: a 1,5 cm del borde inferior
            // Mueve la abscisa actual de regreso al márgen izquierdo y establece la ordenada.
            // Si el valor pasado es negativo, esta es relativa a la parte inferior de la página.
            $this->SetY(-15);

            // Arial italic 8
            $this->SetFont('Arial', 'I', 8);

            // Número de página
            // PageNo(): devuelve el número de página actual
            $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C');
        }

        function AddSeparatorLine()
        {
            $this->Ln(5); // Espacio antes de la línea
            $this->SetFillColor(63, 126, 130);
            $this->Rect(10, $this->GetY(), $this->GetPageWidth() - 20, self::SEPARATOR_LINE_THICKNESS, 'F');
            $this->Ln(5); // Espacio después de la línea
        }
    }

    // Creación del objeto de la clase heredada
    $pdf = new tPDF();

    // Define un alias para el número total de páginas. Se sustituirá en el momento
    // que el documento se cierre. su valor por defecto {nb}
    $pdf->AliasNbPages();

    // Agrega página y define características de la fuente
    $pdf->AddPage();
    $pdf->SetFont('Times', '', 12);
    // Cambiamos el color de las primeras dos celdas
    $pdf->SetTextColor(63, 126, 130);
    // Iteramos sobre las rutinas y las agregamos al PDF
    foreach ($rutinas[$yearsOfTraining] as $grupo => $ejercicios) {
        // Título del grupo
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, utf8_decode($grupo), 0, 1, 'L');
        $pdf->SetFont('Arial', '', 12);

        // Lista de ejercicios
        foreach ($ejercicios as $ejercicio) {
            $pdf->Cell(0, 10, utf8_decode("🏋️ $ejercicio"), 0, 1, 'L');
        }

        // Agregamos una línea de separación estilizada entre grupos
        $pdf->AddSeparatorLine();
    }
    // Finaliza la construcción del pdf y lo envía al navegador
    $pdf->Output();
}
