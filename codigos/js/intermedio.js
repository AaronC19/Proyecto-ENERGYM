const rutinas = {
  1: {
    Piernas: [
      "Sentadillas - 4 series x 10 repeticiones",
      "Prensa de Piernas - 3 series x 12 repeticiones",
      "Elevación de Talones - 4 series x 15 repeticiones",
      "Estocadas - 3 series x 12 repeticiones",
    ],
    Espalda: [
      "Pull-ups - 4 series x 10 repeticiones",
      "Remo con Barra - 3 series x 10 repeticiones",
      "Pulldown en Polea - 4 series x 12 repeticiones",
      "Hiperextensiones - 3 series x 15 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 4 series x 10 repeticiones",
      "Aperturas con Mancuernas - 3 series x 12 repeticiones",
      "Flexiones - 4 series x 15 repeticiones",
      "Pull-over con Barra - 3 series x 12 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 4 series x 12 repeticiones",
      "Press Francés de Tríceps - 3 series x 10 repeticiones",
      "Curl Martillo - 4 series x 12 repeticiones por brazo",
      "Extensiones de Tríceps - 3 series x 15 repeticiones",
    ],
  },
  2: {
    Piernas: [
      "Sentadillas - 5 series x 10 repeticiones",
      "Prensa de Piernas - 4 series x 12 repeticiones",
      "Elevación de Talones - 5 series x 15 repeticiones",
      "Estocadas - 4 series x 12 repeticiones",
      "Extensiones de Cuádriceps - 4 series x 15 repeticiones",
    ],
    Espalda: [
      "Pull-ups - 5 series x 10 repeticiones",
      "Remo con Barra - 4 series x 10 repeticiones",
      "Pulldown en Polea - 5 series x 12 repeticiones",
      "Hiperextensiones - 4 series x 15 repeticiones",
      "Peso Muerto - 4 series x 10 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 5 series x 10 repeticiones",
      "Aperturas con Mancuernas - 4 series x 12 repeticiones",
      "Flexiones - 5 series x 15 repeticiones",
      "Pull-over con Barra - 4 series x 12 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 5 series x 12 repeticiones",
      "Press Francés de Tríceps - 4 series x 10 repeticiones",
      "Curl Martillo - 5 series x 12 repeticiones por brazo",
      "Extensiones de Tríceps - 4 series x 15 repeticiones",
    ],
  },
  3: {
    Piernas: [
      "Sentadillas - 6 series x 10 repeticiones",
      "Prensa de Piernas - 5 series x 12 repeticiones",
      "Elevación de Talones - 6 series x 15 repeticiones",
      "Estocadas - 5 series x 12 repeticiones",
      "Extensiones de Cuádriceps - 5 series x 15 repeticiones",
    ],
    Espalda: [
      "Pull-ups - 6 series x 10 repeticiones",
      "Remo con Barra - 5 series x 10 repeticiones",
      "Pulldown en Polea - 6 series x 12 repeticiones",
      "Hiperextensiones - 5 series x 15 repeticiones",
      "Peso Muerto - 5 series x 10 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 6 series x 10 repeticiones",
      "Aperturas con Mancuernas - 5 series x 12 repeticiones",
      "Flexiones - 6 series x 15 repeticiones",
      "Pull-over con Barra - 5 series x 12 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 6 series x 12 repeticiones",
      "Press Francés de Tríceps - 5 series x 10 repeticiones",
      "Curl Martillo - 6 series x 12 repeticiones por brazo",
      "Extensiones de Tríceps - 5 series x 15 repeticiones",
    ],
  },
  4: {
    Piernas: [
      "Sentadillas - 7 series x 10 repeticiones",
      "Prensa de Piernas - 6 series x 12 repeticiones",
      "Elevación de Talones - 7 series x 15 repeticiones",
      "Estocadas - 6 series x 12 repeticiones",
      "Extensiones de Cuádriceps - 6 series x 15 repeticiones",
    ],
    Espalda: [
      "Pull-ups - 7 series x 10 repeticiones",
      "Remo con Barra - 6 series x 10 repeticiones",
      "Pulldown en Polea - 7 series x 12 repeticiones",
      "Hiperextensiones - 6 series x 15 repeticiones",
      "Peso Muerto - 6 series x 10 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 7 series x 10 repeticiones",
      "Aperturas con Mancuernas - 6 series x 12 repeticiones",
      "Flexiones - 7 series x 15 repeticiones",
      "Pull-over con Barra - 6 series x 12 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 7 series x 12 repeticiones",
      "Press Francés de Tríceps - 6 series x 10 repeticiones",
      "Curl Martillo - 7 series x 12 repeticiones por brazo",
      "Extensiones de Tríceps - 6 series x 15 repeticiones",
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

const selectorAños = document.getElementById("monthOfTraining");
selectorAños.addEventListener("change", function () {
  const añosSeleccionados = parseInt(this.value);
  actualizarRutinas(añosSeleccionados);
});

actualizarRutinas(parseInt(selectorAños.value));
