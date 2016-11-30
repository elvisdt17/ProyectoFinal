<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mapa</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <?php echo $map['js']; ?>
  </head>
  <body>
    <!-- Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Itla Inmuebles</li>
          <li><a href="<?php echo base_url('Principal'); ?>">Inicio</a></li>
        </ul>
      </div>
    </div>

    <?php echo $map['html']; ?>
  </body>
</html>
