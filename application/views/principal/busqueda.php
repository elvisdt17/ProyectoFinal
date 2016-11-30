<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Itla Inmuebles</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>
  <body>
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Itla Inmuebles</li>
        </ul>
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="<?php echo base_url('principal'); ?>">Inicio</a></li>
          <li><a href="<?php echo base_url('SubirProducto'); ?>">Publicar Inmueble</a></li>
          <li><a href="<?php echo base_url('seguridad/cerrar'); ?>">Cerrar Sesion</a></li>

        </ul>
      </div>
    </div>
    <!-- End Top Bar -->
    <br>
    <br /> <br />
    <div class="row column text-center">
      <h2>Mis Artículos</h2>
    </div>

    <div class="row small-up-2 large-up-4">
      <?php
      $d = "RD$ ";
      foreach ($busqueda as $bus){
        $linkArt = base_url("/Principal/showArti/?id={$bus->id}");
        echo "      <div class='column' >
                <img width='600px' height='400px' class='' src='http://placehold.it/600x400'>
                <h5>{$bus->titulo}</h5>
                <p>$d{$bus->precio}</p>
                <a href='{$linkArt}' class='button expanded botones-recientes'>Ver</a>
              </div>";
      } ?>
    </div>
    <hr>
    <div class="callout large secondary">
      <div class="row">
        <div class="large-4 columns">
          <h5>Itla Inmueble<i>@copyright 2016</i></h5>
        </div>
        <div class="large-3 large-offset-2 columns">

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
