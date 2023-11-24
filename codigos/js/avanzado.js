const rutinas = {
  2: {
    Piernas: [
      "Sentadillas - 4 series x 10 repeticiones",
      "Prensa de Piernas - 3 series x 12 repeticiones",
      "Zancadas - 3 series x 10 repeticiones por pierna",
      "Extensiones de Cuádriceps - 3 series x 15 repeticiones",
    ],
    Espalda: [
      "Remo en T - 4 series x 8 repeticiones",
      "Remo con Barra - 3 series x 10 repeticiones",
      "Dominadas - 3 series x 12 repeticiones",
      "Hiperextensiones - 3 series x 15 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 4 series x 8 repeticiones",
      "Aperturas con Mancuernas - 3 series x 10 repeticiones",
      "Flexiones - 3 series x 12 repeticiones",
      "Pullover - 3 series x 15 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 4 series x 10 repeticiones",
      "Press Francés de Tríceps - 3 series x 12 repeticiones",
      "Curl Martillo - 3 series x 10 repeticiones por brazo",
      "Extensiones de Tríceps - 3 series x 15 repeticiones",
    ],
  },
  3: {
    Piernas: [
      "Sentadillas - 5 series x 10 repeticiones",
      "Prensa de Piernas - 4 series x 12 repeticiones",
      "Zancadas - 4 series x 10 repeticiones por pierna",
      "Extensiones de Cuádriceps - 3 series x 15 repeticiones",
    ],
    Espalda: [
      "Remo en T - 5 series x 8 repeticiones",
      "Remo con Barra - 4 series x 10 repeticiones",
      "Dominadas - 4 series x 12 repeticiones",
      "Hiperextensiones - 3 series x 15 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 5 series x 8 repeticiones",
      "Aperturas con Mancuernas - 4 series x 10 repeticiones",
      "Flexiones - 4 series x 12 repeticiones",
      "Pullover - 3 series x 15 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 5 series x 10 repeticiones",
      "Press Francés de Tríceps - 4 series x 12 repeticiones",
      "Curl Martillo - 4 series x 10 repeticiones por brazo",
      "Extensiones de Tríceps - 3 series x 15 repeticiones",
    ],
  },
  4: {
    Piernas: [
      "Sentadillas - 6 series x 10 repeticiones",
      "Prensa de Piernas - 5 series x 12 repeticiones",
      "Zancadas - 5 series x 10 repeticiones por pierna",
      "Extensiones de Cuádriceps - 4 series x 15 repeticiones",
    ],
    Espalda: [
      "Remo en T - 6 series x 8 repeticiones",
      "Remo con Barra - 5 series x 10 repeticiones",
      "Dominadas - 5 series x 12 repeticiones",
      "Hiperextensiones - 4 series x 15 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 6 series x 8 repeticiones",
      "Aperturas con Mancuernas - 5 series x 10 repeticiones",
      "Flexiones - 5 series x 12 repeticiones",
      "Pullover - 4 series x 15 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 6 series x 10 repeticiones",
      "Press Francés de Tríceps - 5 series x 12 repeticiones",
      "Curl Martillo - 5 series x 10 repeticiones por brazo",
      "Extensiones de Tríceps - 4 series x 15 repeticiones",
    ],
  },
  5: {
    Piernas: [
      "Sentadillas - 6 series x 12 repeticiones",
      "Prensa de Piernas - 5 series x 15 repeticiones",
      "Zancadas - 5 series x 12 repeticiones por pierna",
      "Extensiones de Cuádriceps - 4 series x 20 repeticiones",
    ],
    Espalda: [
      "Levantamiento de Pesas - 6 series x 10 repeticiones",
      "Remo con Barra - 5 series x 12 repeticiones",
      "Dominadas - 5 series x 15 repeticiones",
      "Hiperextensiones - 4 series x 20 repeticiones",
    ],
    Pecho: [
      "Press de Banca - 6 series x 10 repeticiones",
      "Aperturas con Mancuernas - 5 series x 12 repeticiones",
      "Flexiones - 5 series x 15 repeticiones",
      "Pullover - 4 series x 20 repeticiones",
    ],
    Brazos: [
      "Curl de Bíceps con Barra - 6 series x 12 repeticiones",
      "Press Francés de Tríceps - 5 series x 15 repeticiones",
      "Curl Martillo - 5 series x 12 repeticiones por brazo",
      "Extensiones de Tríceps - 4 series x 20 repeticiones",
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
                                    .map((ejercicio) => `<li>${ejercicio}</li>`)
                                    .join("")}
                              </ul>
                          </div>
                      </div>
                  `;
    contenedorRutinas.appendChild(tarjetaRutina);
  }
}

const selectorAños = document.getElementById("yearsOfTraining");
selectorAños.addEventListener("change", function () {
  const añosSeleccionados = parseInt(this.value);
  actualizarRutinas(añosSeleccionados);
});

actualizarRutinas(parseInt(selectorAños.value));
