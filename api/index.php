<?php
/***** NOTICIAS *****/

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
    <link rel="icon" href="https://github.githubassets.com/favicons/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
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

      <?php
        include("../secciones/portada.php");
      ?>
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-12 px-0">
          <h1 class="display-4 font-italic">
            <?php echo $portada["titulo"]; ?>
          </h1>
          <p class="lead my-3">
            <?php echo $portada["resumen"]; ?>
          </p>
        </div>
      </div>

      <!-- Fila 1: INTERNACIONAL Y NACIONAL -->
      <?php
        include("../secciones/internacional.php");
        include("../secciones/nacional.php");
      ?>
      <div class="row mb-2">
        <!-- Internacional -->
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm">
            <?php if (!empty($internacional["imagen"])): ?>
              <img src="<?php echo $internacional["imagen"]; ?>" class="img-fluid w-50 rounded-left" alt="Imagen noticia internacional">
            <?php endif; ?>
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Internacional</strong>
              <h3 class="mb-0"><a class="text-dark" href="#"><?php echo $internacional["titulo"]; ?></a></h3>
              <div class="mb-1 text-muted"><?php echo $internacional["autor"]; ?></div>
              <p class="card-text mb-auto"><?php echo $internacional["resumen"]; ?></p>
            </div>
          </div>
        </div>

        <!-- Nacional -->
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm">
            <?php if (!empty($nacional["imagen"])): ?>
              <img src="<?php echo $nacional["imagen"]; ?>" class="img-fluid w-50 rounded-left" alt="Imagen noticia nacional">
            <?php endif; ?>
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Nacional</strong>
              <h3 class="mb-0"><a class="text-dark" href="#"><?php echo $nacional["titulo"]; ?></a></h3>
              <div class="mb-1 text-muted"><?php echo $nacional["autor"]; ?></div>
              <p class="card-text mb-auto"><?php echo $nacional["resumen"]; ?></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 1 -->

      <!-- Fila 2 -->
      <?php
        include("../secciones/economia.php");
        include("../secciones/opinion.php");
      ?>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-secondary">Economía</strong>
              <h3 class="mb-0"><a class="text-dark" href="#"><?php echo $economia["titulo"]; ?></a></h3>
              <div class="mb-1 text-muted"><?php echo $economia["autor"]; ?></div>
              <p class="card-text mb-auto"><?php echo $economia["resumen"]; ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm ">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-warning">Opinión</strong>
              <h3 class="mb-0"><a class="text-dark" href="#"><?php echo $opinion["titulo"]; ?></a></h3>
              <div class="mb-1 text-muted"><?php echo $opinion["autor"]; ?></div>
              <p class="card-text mb-auto"><?php echo $opinion["resumen"]; ?></p>
            </div>
          </div>
        </div>
      </div>
      <!-- Fin Fila 2 -->

      <!-- Resto de secciones -->
      <?php
        include("../secciones/tecnologia.php");
        include("../secciones/ciencia.php");
        include("../secciones/cultura.php");
        include("../secciones/gente.php");
        include("../secciones/deportes.php");
        include("../secciones/television.php");
        include("../secciones/video.php");
        include("../secciones/formacion.php");
        include("../secciones/empleo.php");
        include("../secciones/sociedad.php");
        include("../secciones/openstack.php");
        include("../secciones/git.php");
        include("../secciones/contenedores.php");
        include("../secciones/openshift.php");
      ?>

      <footer class="blog-footer">
        <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a>.</p>
        <p><a href="#">Back to top</a></p>
      </footer>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  </body>
</html>