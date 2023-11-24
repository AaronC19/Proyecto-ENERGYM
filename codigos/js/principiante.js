const rutinas = {
  1: {
    Piernas: [
      "Sentadillas - 3 series x 8 repeticiones",
      "Prensa de Piernas - 2 series x 10 repeticiones",
      "Elevación de Talones - 3 series x 15 repeticiones",
      "Estocadas - 2 series x 12 repeticiones",
    ],
    Espalda: [
      "Remo en T - 3 series x 8 repeticiones",
      "Dominadas Asistidas - 2 series x 10 repeticiones",
      "Pulldown en Polea - 3 series x 12 repeticiones",
      "Hiperextensiones - 2 series x 15 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 3 series x 8 repeticiones",
      "Aperturas con Mancuernas - 2 series x 10 repeticiones",
      "Flexiones - 3 series x 12 repeticiones",
      "Pullover - 2 series x 15 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 3 series x 10 repeticiones",
      "Press Francés de Tríceps - 2 series x 12 repeticiones",
      "Curl Martillo - 3 series x 10 repeticiones por brazo",
      "Extensiones de Tríceps - 2 series x 15 repeticiones",
    ],
  },
  2: {
    Piernas: [
      "Sentadillas - 4 series x 10 repeticiones",
      "Prensa de Piernas - 3 series x 12 repeticiones",
      "Elevación de Talones - 4 series x 15 repeticiones",
      "Estocadas - 3 series x 12 repeticiones",
      "Extensiones de Cuádriceps - 3 series x 15 repeticiones",
    ],
    Espalda: [
      "Remo en T - 4 series x 8 repeticiones",
      "Dominadas - 3 series x 10 repeticiones",
      "Pulldown en Polea - 4 series x 12 repeticiones",
      "Hiperextensiones - 3 series x 15 repeticiones",
      "Peso Muerto - 3 series x 10 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 4 series x 8 repeticiones",
      "Aperturas con Mancuernas - 3 series x 10 repeticiones",
      "Flexiones - 4 series x 12 repeticiones",
      "Pullover - 3 series x 15 repeticiones",
      "Fondos en Paralelas - 3 series x 12 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 4 series x 10 repeticiones",
      "Press Francés de Tríceps - 3 series x 12 repeticiones",
      "Curl Martillo - 4 series x 10 repeticiones por brazo",
      "Extensiones de Tríceps - 3 series x 15 repeticiones",
      "Flexiones de Bíceps - 3 series x 12 repeticiones",
    ],
  },
  3: {
    Piernas: [
      "Sentadillas - 5 series x 10 repeticiones",
      "Prensa de Piernas - 4 series x 12 repeticiones",
      "Elevación de Talones - 5 series x 15 repeticiones",
      "Estocadas - 4 series x 12 repeticiones",
      "Extensiones de Cuádriceps - 4 series x 15 repeticiones",
    ],
    Espalda: [
      "Remo en T - 5 series x 8 repeticiones",
      "Dominadas - 4 series x 10 repeticiones",
      "Pulldown en Polea - 5 series x 12 repeticiones",
      "Hiperextensiones - 4 series x 15 repeticiones",
      "Peso Muerto - 4 series x 10 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 5 series x 8 repeticiones",
      "Aperturas con Mancuernas - 4 series x 10 repeticiones",
      "Flexiones - 5 series x 12 repeticiones",
      "Pullover - 4 series x 15 repeticiones",
      "Fondos en Paralelas - 4 series x 12 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 5 series x 10 repeticiones",
      "Press Francés de Tríceps - 4 series x 12 repeticiones",
      "Curl Martillo - 5 series x 10 repeticiones por brazo",
      "Extensiones de Tríceps - 4 series x 15 repeticiones",
      "Flexiones de Bíceps - 4 series x 12 repeticiones",
    ],
  },
  4: {
    Piernas: [
      "Sentadillas - 6 series x 10 repeticiones",
      "Prensa de Piernas - 5 series x 12 repeticiones",
      "Elevación de Talones - 6 series x 15 repeticiones",
      "Estocadas - 5 series x 12 repeticiones",
    ],
    Espalda: [
      "Remo en T - 6 series x 8 repeticiones",
      "Dominadas - 5 series x 10 repeticiones",
      "Pulldown en Polea - 6 series x 12 repeticiones",
      "Hiperextensiones - 5 series x 15 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 6 series x 8 repeticiones",
      "Aperturas con Mancuernas - 5 series x 10 repeticiones",
      "Flexiones - 5 series x 12 repeticiones",
      "Pullover - 4 series x 15 repeticiones",
      "Fondos en Paralelas - 5 series x 12 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 6 series x 10 repeticiones",
      "Press Francés de Tríceps - 5 series x 12 repeticiones",
      "Curl Martillo - 5 series x 10 repeticiones por brazo",
      "Extensiones de Tríceps - 4 series x 15 repeticiones",
      "Flexiones de Bíceps - 5 series x 12 repeticiones",
    ],
  },
};
function actualizarRutinas(años) {
  const contenedorRutinas = document.getElementById("routineContainer");
  contenedorRutinas.innerHTML = "";

  for (const rutina in rutinas[años]) {
    const tarjetaRutina = document.createElement("div");
    tarjetaRutina.className = "col-md-6 mb-4";
    tarjetaRutina.innerHTML = `
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h3 class="card-title">${rutina}</h3>
                                <ul>
                                    ${rutinas[años][rutina]
                                      .map(
                                        (ejercicio) => `<li>${ejercicio}</li>`
                                      )
                                      .join("")}
                                </ul>
                            </div>
                        </div>
                    `;
    contenedorRutinas.appendChild(tarjetaRutina);
  }
}

const selectorAños = document.getElementById("weeksOfTraining");
selectorAños.addEventListener("change", function () {
  const añosSeleccionados = parseInt(this.value);
  actualizarRutinas(añosSeleccionados);
});

actualizarRutinas(parseInt(selectorAños.value));
