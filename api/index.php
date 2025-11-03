<?php
/***** SECCIONES PRINCIPALES *****/

$nacional = [
  "titulo" => "Dina Boluarte deja la presidencia del Perú tras semanas de crisis política",
  "autor" => "La República",
  "resumen" => "Dina Boluarte deja la presidencia como la mandataria más impopular del mundo y Perú: 93% de desaprobación y 0% entre jóvenes y el sur.",
  "imagen" => "../img/dina.png"
];

$internacional = [
  "titulo" => "Estados Unidos y China reanudan conversaciones económicas de alto nivel en Pekín",
  "autor" => "Demócrata",
  "resumen" => "Delegaciones de alto nivel de Estados Unidos y China se reunieron en Pekín para retomar el diálogo económico bilateral, tras meses de tensiones comerciales y tecnológicas. Ambas potencias coincidieron en mantener la comunicación abierta y evitar una escalada que afecte al comercio global.",
  "imagen" => "../img/internacional.jpg"
];
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DIARIO EL HOCICÓN</title>
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/4.1/examples/blog/blog.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">NOTICIAS SON NOTICIAS 2025</a>
          </div>
        </div>
      </header>

      <!-- BLOQUE DE INTERNACIONAL Y NACIONAL -->
      <div class="row mb-4">
        <!-- INTERNACIONAL -->
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <?php if (!empty($internacional["imagen"])): ?>
              <img src="<?php echo $internacional["imagen"]; ?>" class="img-fluid w-50 rounded-left" alt="Imagen noticia internacional">
            <?php endif; ?>
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo $internacional["titulo"]; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $internacional["autor"]; ?></div>
              <p class="card-text mb-auto"><?php echo $internacional["resumen"]; ?></p>
            </div>
          </div>
        </div>

        <!-- NACIONAL -->
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <?php if (!empty($nacional["imagen"])): ?>
              <img src="<?php echo $nacional["imagen"]; ?>" class="img-fluid w-50 rounded-left" alt="Imagen noticia nacional">
            <?php endif; ?>
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Nacional</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#"><?php echo $nacional["titulo"]; ?></a>
              </h3>
              <div class="mb-1 text-muted"><?php echo $nacional["autor"]; ?></div>
              <p class="card-text mb-auto"><?php echo $nacional["resumen"]; ?></p>
            </div>
          </div>
        </div>
      </div>
      <!-- FIN BLOQUE INTERNACIONAL Y NACIONAL -->

      <footer class="blog-footer">
        <p>Plantilla construida con <a href="https://getbootstrap.com/">Bootstrap</a>.</p>
        <p><a href="#">Volver arriba</a></p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  </body>
</html>