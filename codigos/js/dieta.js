document
  .getElementById("dietForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const age = parseInt(document.getElementById("age").value);
    const height = parseInt(document.getElementById("height").value);
    const weight = parseInt(document.getElementById("weight").value);
    const goal = document.getElementById("goal").value;

    const mmr = 10 * weight + 6.25 * height - 5 * age;

    let dietPlan = "";

    if (age < 18) {
      if (goal === "lose") {
        dietPlan = `
            <h2>Plan de alimentación para menores de edad (Bajar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Cereal con leche desnatada y fruta.</td><td>300</td><td><img src="../codigos/img/comida1.jpg"  width="200px" height="200px" alt="Desayuno para menores de edad"></td></tr>
              <tr><td>Almuerzo</td><td>Pollo a la plancha con arroz integral y verduras.</td><td>400</td><td><img src="../codigos/img/comida2.jpg"  width="200px" height="200px" alt="Almuerzo para menores de edad"></td></tr>
              <tr><td>Merienda</td><td>Yogur bajo en grasa con frutos secos.</td><td>200</td><td><img src="../codigos/img/comida3.jpg" width="200px" height="200px" alt="Merienda para menores de edad"></td></tr>
              <tr><td>Cena</td><td>Pescado al horno con ensalada mixta.</td><td>350</td><td><img src="../codigos/img/comida4.jfif" width="200px" height="200px" alt="Cena para menores de edad"></td></tr>
            </table>
          `;
      } else if (goal === "gain") {
        dietPlan = `
            <h2>Plan de alimentación para menores de edad (Aumentar de Peso)</h2> 
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Tostadas integrales con aguacate y huevo.</td><td>400</td><td><img src="../codigos/img/comida5.jpg"width="200px" height="200px" alt="Desayuno para menores de edad"></td></tr>
              <tr><td>Almuerzo</td><td>Pasta con salsa de carne y ensalada.</td><td>500</td><td><img src="../codigos/img/comida6.jfif"width="200px" height="200px" alt="Almuerzo para menores de edad"></td></tr>
              <tr><td>Merienda</td><td>Frutos secos y batido de proteínas.</td><td>700</td><td><img src="../codigos/img/comida7.jpg"width="200px" height="200px" alt="Merienda para menores de edad"></td></tr>
              <tr><td>Cena</td><td>Pechuga de pollo al horno con arroz.</td><td>400</td><td><img src="../codigos/img/comida8.jpg"width="200px" height="200px" alt="Cena para menores de edad"></td></tr>
            </table>
          `;
      } else {
        dietPlan = `
            <h2>Plan de alimentación para menores de edad (Mantener Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Cereal con leche y fruta.</td><td>350</td><td><img src="../codigos/img/comida1.jpg"width="200px" height="200px" alt="Desayuno para menores de edad"></td></tr>
              <tr><td>Almuerzo</td><td>Pollo a la parrilla con arroz y verduras.</td><td>450</td><td><img src="../codigos/img/comida10.jpg"width="200px" height="200px" alt="Almuerzo para menores de edad"></td></tr>
              <tr><td>Merienda</td><td>Yogur con fruta fresca.</td><td>250</td><td><img src="../codigos/img/comida11.jpg"width="200px" height="200px" alt="Merienda para menores de edad"></td></tr>
              <tr><td>Cena</td><td>Pescado a la plancha con puré de patatas.</td><td>400</td><td><img src="../codigos/img/comida12.jpg"width="200px" height="200px" alt="Cena para menores de edad"></td></tr>
            </table>
          `;
      }
    } else if (age >= 18 && age < 30) {
      if (goal === "lose") {
        dietPlan = `
            <h2>Plan de alimentación para adultos jóvenes (Bajar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Batido de proteínas con avena y frutas.</td><td>350</td><td><img src="../codigos/img/comida7.jpg"width="200px" height="200px" alt="Desayuno para adultos jóvenes"></td></tr>
              <tr><td>Almuerzo</td><td>Ensalada de pollo con aguacate.</td><td>400</td><td><img src="../codigos/img/comida14.jfif"width="200px" height="200px" alt="Almuerzo para adultos jóvenes"></td></tr>
              <tr><td>Merienda</td><td>Frutos secos y yogur griego.</td><td>250</td><td><img src="../codigos/img/comida11.jpg"width="200px" height="200px" alt="Merienda para adultos jóvenes"></td></tr>
              <tr><td>Cena</td><td>Pescado a la parrilla con quinoa.</td><td>400</td><td><img src="../codigos/img/comida15.jpg"width="200px" height="200px" alt="Cena para adultos jóvenes"></td></tr>
            </table>
          `;
      } else if (goal === "gain") {
        dietPlan = `
            <h2>Plan de alimentación para adultos jóvenes (Aumentar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Tostadas de aguacate con huevo y frutas.</td><td>400</td><td><img src="../codigos/img/comida16.jpg"width="200px" height="200px" alt="Desayuno para adultos jóvenes"></td></tr>
              <tr><td>Almuerzo</td><td>Pollo al curry con arroz y verduras.</td><td>700</td><td><img src="../codigos/img/comida17.jpg"width="200px" height="200px" alt="Almuerzo para adultos jóvenes"></td></tr>
              <tr><td>Merienda</td><td>Batido de proteínas y frutos secos.</td><td>300</td><td><img src="../codigos/img/comida7.jpg"width="200px" height="200px" alt="Merienda para adultos jóvenes"></td></tr>
              <tr><td>Cena</td><td>300 gramos de pollo con arroz</td><td>950</td><td><img src="../codigos/img/comida19.jpg"width="200px" height="200px" alt="Cena para adultos jóvenes"></td></tr>
              <tr><td>Merienda 2</td><td>batido de avena con leche, 100 gramos de avena</td><td>950</td><td><img src="../codigos/img/comida7.jpg"width="200px" height="200px" alt="Merienda para adultos mayores avanzados"></td></tr>
            </table>
          `;
      } else {
        dietPlan = `
            <h2>Plan de alimentación para adultos jóvenes (Mantener Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Yogur con granola y frutas.</td><td>350</td><td><img src="../codigos/img/comida11.jpg"width="200px" height="200px" alt="Desayuno para adultos jóvenes"></td></tr>
              <tr><td>Almuerzo</td><td>Sándwich de pavo con ensalada.</td><td>400</td><td><img src="../codigos/img/comida22.jfif"width="200px" height="200px" alt="Almuerzo para adultos jóvenes"></td></tr>
              <tr><td>Merienda</td><td>Barrita de proteínas y fruta fresca.</td><td>250</td><td><img src="../codigos/img/comida23.jpg"width="200px" height="200px" alt="Merienda para adultos jóvenes"></td></tr>
              <tr><td>Cena</td><td>Pollo a la parrilla con patatas y brócoli.</td><td>450</td><td><img src="../codigos/img/comida24.jpg"width="200px" height="200px" alt="Cena para adultos jóvenes"></td></tr>
            </table>
          `;
      }
    } else if (age >= 30 && age < 50) {
      if (goal === "lose") {
        dietPlan = `
            <h2>Plan de alimentación para adultos de mediana edad (Bajar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Yogur con frutas y nueces.</td><td>300</td><td><img src="../codigos/img/comida25.jfif"width="200px" height="200px" alt="Desayuno para adultos de mediana edad"></td></tr>
              <tr><td>Almuerzo</td><td>Ensalada de salmón con aguacate.</td><td>400</td><td><img src="../codigos/img/comida26.jpg"width="200px" height="200px" alt="Almuerzo para adultos de mediana edad"></td></tr>
              <tr><td>Merienda</td><td>Frutos secos y batido de proteínas.</td><td>250</td><td><img src="../codigos/img/comida7.jpg"width="200px" height="200px" alt="Merienda para adultos de mediana edad"></td></tr>
              <tr><td>Cena</td><td>Pollo al horno con quinoa y brócoli.</td><td>400</td><td><img src="../codigos/img/comida28.webp"width="200px" height="200px" alt="Cena para adultos de mediana edad"></td></tr>
            </table>
          `;
      } else if (goal === "gain") {
        dietPlan = `
            <h2>Plan de alimentación para adultos de mediana edad (Aumentar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Tostadas con aguacate y huevo.</td><td>350</td><td><img src="../codigos/img/comida5.jpg"width="200px" height="200px" alt="Desayuno para adultos de mediana edad"></td></tr>
              <tr><td>Almuerzo</td><td>Pasta con albóndigas y ensalada.</td><td>450</td><td><img src="../codigos/img/comida30.jpg"width="200px" height="200px" alt="Almuerzo para adultos de mediana edad"></td></tr>
              <tr><td>Merienda</td><td>Yogur con frutas y frutos secos.</td><td>500</td><td><img src="../codigos/img/comida25.jfif"width="200px" height="200px" alt="Merienda para adultos de mediana edad"></td></tr>
              <tr><td>Cena</td><td>Pechuga de pollo con puré de patatas y verduras.</td><td>400</td><td><img src="../codigos/img/comida32.jpg" width="200px" height="200px" alt="Cena para adultos de mediana edad"></td></tr>
              <tr><td>Merienda 2</td><td>Mantequilla de maní con 5 tostadas.</td><td>1150</td><td><img src="../codigos/img/comida33.jpg"width="200px" height="200px" alt="Merienda para adultos mayores avanzados"></td></tr>
            </table>
          `;
      } else {
        dietPlan = `
            <h2>Plan de alimentación para adultos de mediana edad (Mantener Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Cereal con leche y fruta.</td><td>350</td><td><img src="../codigos/img/comida1.jpg"width="200px" height="200px" alt="Desayuno para adultos de mediana edad"></td></tr>
              <tr><td>Almuerzo</td><td>Pollo a la parrilla con arroz integral y verduras.</td><td>450</td><td><img src="../codigos/img/comida34.webp"width="200px" height="200px" alt="Almuerzo para adultos de mediana edad"></td></tr>
              <tr><td>Merienda</td><td>Yogur con nueces y frutas.</td><td>250</td><td><img src="../codigos/img/comida25.jfif"width="200px" height="200px" alt="Merienda para adultos de mediana edad"></td></tr>
              <tr><td>Cena</td><td>Pescado al horno con ensalada mixta.</td><td>400</td><td><img src="../codigos/img/comida4.jfif" width="200px" height="200px" alt="Cena para adultos de mediana edad"></td></tr>
            </table>
          `;
      }
    } else if (age >= 50 && age < 65) {
      if (goal === "lose") {
        dietPlan = `
            <h2>Plan de alimentación para adultos mayores (Bajar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Yogur con frutas y avena.</td><td>300</td><td><img src="../codigos/img/comida25.jfif"width="200px" height="200px" alt="Desayuno para adultos mayores"></td></tr>
              <tr><td>Almuerzo</td><td>Sopa de verduras y pollo.</td><td>350</td><td><img src="../codigos/img/comida35.jfif"width="200px" height="200px" alt="Almuerzo para adultos mayores"></td></tr>
              <tr><td>Merienda</td><td>Frutos secos y té.</td><td>200</td><td><img src="../codigos/img/comida36.webp"width="200px" height="200px" alt="Merienda para adultos mayores"></td></tr>
              <tr><td>Cena</td><td>Pescado al horno con puré de patatas y ensalada.</td><td>400</td><td><img src="../codigos/img/comida37.jpg"width="200px" height="200px" alt="Cena para adultos mayores"></td></tr>
            </table>
          `;
      } else if (goal === "gain") {
        dietPlan = `
            <h2>Plan de alimentación para adultos mayores (Aumentar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Tostadas con aguacate, huevo y arroz.</td><td>550</td><td><img src="../codigos/img/comida16.jpg"width="200px" height="200px" alt="Desayuno para adultos mayores"></td></tr>
              <tr><td>Almuerzo</td><td>Estofado de carne con arroz.</td><td>450</td><td><img src="../codigos/img/comida39.jpg"width="200px" height="200px" alt="Almuerzo para adultos mayores"></td></tr>
              <tr><td>Merienda</td><td>Barrita de proteínas y frutas.</td><td>550</td><td><img src="../codigos/img/comida23.jpg"width="200px" height="200px" alt="Merienda para adultos mayores"></td></tr>
              <tr><td>Cena</td><td>Pollo a la parrilla con patatas y brócoli.</td><td>400</td><td><img src="../codigos/img/comida24.jpg"width="200px" height="200px"alt="Cena para adultos mayores"></td></tr>
              <tr><td>Merienda 2</td><td>Mantequilla de maní con 3 tostadas.</td><td>550</td><td><img src="../codigos/img/comida33.jpg"width="200px" height="200px" alt="Merienda para adultos mayores avanzados"></td></tr>
            </table>
          `;
      } else {
        dietPlan = `
            <h2>Plan de alimentación para adultos mayores (Mantener Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Cereal con leche y fruta.</td><td>350</td><td><img src="../codigos/img/comida1.jpg"width="200px" height="200px" alt="Desayuno para adultos mayores"></td></tr>
              <tr><td>Almuerzo</td><td>Pollo a la parrilla con arroz y verduras.</td><td>450</td><td><img src="../codigos/img/comida2.jpg"width="200px" height="200px" alt="Almuerzo para adultos mayores"></td></tr>
              <tr><td>Merienda</td><td>Yogur con frutas y nueces.</td><td>250</td><td><img src="../codigos/img/comida25.jfif"width="200px" height="200px" alt="Merienda para adultos mayores"></td></tr>
              <tr><td>Cena</td><td>Pescado al horno con ensalada mixta.</td><td>400</td><td><img src="../codigos/img/comida4.jfif" width="200px" height="200px" alt="Cena para adultos mayores"></td></tr>
            </table>
          `;
      }
    } else {
      if (goal === "lose") {
        dietPlan = `
            <h2>Plan de alimentación para adultos mayores avanzados (Bajar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Yogur con frutas y avena.</td><td>300</td><td><img src="../codigos/img/comida25.jfif"width="200px" height="200px" alt="Desayuno para adultos mayores avanzados"></td></tr>
              <tr><td>Almuerzo</td><td>Sopa de verduras y pescado.</td><td>350</td><td><img src="../codigos/img/comida40.jpg"width="200px" height="200px" alt="Almuerzo para adultos mayores avanzados"></td></tr>
              <tr><td>Merienda</td><td>Frutos secos y té.</td><td>200</td><td><img src="../codigos/img/comida36.webp"width="200px" height="200px" alt="Merienda para adultos mayores avanzados"></td></tr>
              <tr><td>Cena</td><td>Pollo al horno con puré de patatas y ensalada.</td><td>400</td><td><img src="../codigos/img/comida41.jpg"width="200px" height="200px" alt="Cena para adultos mayores avanzados"></td></tr>
            </table>
          `;
      } else if (goal === "gain") {
        dietPlan = `
            <h2>Plan de alimentación para adultos mayores avanzados (Aumentar de Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Tostadas con aguacate y huevo.</td><td>350</td><td><img src="../codigos/img/comida42.jpg"width="200px" height="200px" alt="Desayuno para adultos mayores avanzados"></td></tr>
              <tr><td>Almuerzo</td><td>Estofado de carne con arroz.</td><td>450</td><td><img src="../codigos/img/comida39.jpg"width="200px" height="200px" alt="Almuerzo para adultos mayores avanzados"></td></tr>
              <tr><td>Merienda</td><td>Barrita de proteínas y frutas.</td><td>250</td><td><img src="../codigos/img/comida23.jpg"width="200px" height="200px" alt="Merienda para adultos mayores avanzados"></td></tr>
              <tr><td>Cena</td><td>Pollo a la parrilla con patatas, brócoli y arroz.</td><td>800</td><td><img src="../codigos/img/comida43.jpg"width="200px" height="200px" alt="Cena para adultos mayores avanzados"></td></tr>
              <tr><td>Merienda 2 </td><td>Mantequilla de maní con 2 tostadas.</td><td>550</td><td><img src="../codigos/img/comida33.jpg"width="200px" height="200px" alt="Merienda para adultos mayores avanzados"></td></tr>

            </table>
          `;
      } else {
        dietPlan = `
            <h2>Plan de alimentación para adultos mayores avanzados (Mantener Peso)</h2>
            <table class="table">
              <tr><th>Comida</th><th>Descripción</th><th>Calorías</th><th>Imagen</th></tr>
              <tr><td>Desayuno</td><td>Cereal con leche y fruta.</td><td>350</td><td><img src="../codigos/img/comida1.jpg"width="200px" height="200px" alt="Desayuno para adultos mayores avanzados"></td></tr>
              <tr><td>Almuerzo</td><td>Pollo a la parrilla con arroz y verduras.</td><td>450</td><td><img src="../codigos/img/comida2.jpg"width="200px" height="200px" alt="Almuerzo para adultos mayores avanzados"></td></tr>
              <tr><td>Merienda</td><td>Yogur con frutas y nueces.</td><td>250</td><td><img src="../codigos/img/comida25.jfif"width="200px" height="200px" alt="Merienda para adultos mayores avanzados"></td></tr>
              <tr><td>Cena</td><td>Pescado al horno con ensalada mixta.</td><td>400</td><td><img src="../codigos/img/comida4.jfif" width="200px" height="200px" alt="Cena para adultos mayores avanzados"></td></tr>
            </table>
          `;
      }
    }

    document.getElementById("dietPlan").innerHTML = dietPlan;
  });
