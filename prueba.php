
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  .seccion {
    display: none;
  }
</style>
<title>Mostrar Secciones por Categoría</title>
</head>
<body>
  <div class="select-categoria">
    <h1>Seleccione su categoría</h1>
    <div class="">
        <input type="checkbox" name="poster" id="checkbox-poster">
        <label for="checkbox-poster">Poster</label>
    </div>
    <div class="">
        <input type="checkbox" name="ponente" id="checkbox-ponente">
        <label for="checkbox-ponente">Ponente</label>
    </div>
  </div>

  <section id="seccion-ponente" class="seccion">
    <h1>Sección de Ponente</h1>
  </section>

  <section id="seccion-poster" class="seccion">
    <h1>Sección de Poster</h1>
  </section>

  <script>
    const checkboxPoster = document.getElementById('checkbox-poster');
    const checkboxPonente = document.getElementById('checkbox-ponente');
    const seccionPoster = document.getElementById('seccion-poster');
    const seccionPonente = document.getElementById('seccion-ponente');

    // Mostrar u ocultar secciones según las categorías seleccionadas
    checkboxPoster.addEventListener('change', () => {
      checkboxPonente.checked = false;
      seccionPonente.style.display = 'none';
      seccionPoster.style.display = checkboxPoster.checked ? 'block' : 'none';
    });

    checkboxPonente.addEventListener('change', () => {
      checkboxPoster.checked = false;
      seccionPoster.style.display = 'none';
      seccionPonente.style.display = checkboxPonente.checked ? 'block' : 'none';
    });
  </script>
</body>
</html>
