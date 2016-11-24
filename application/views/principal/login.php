<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crear Cuenta</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
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
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
    </div>
    <style media="screen">
    .medium-6 {
      border: 1px solid #cacaca;
      border-radius: 8px;
 }
    </style>
    <div class="cuadro">
  <div class="medium-6 medium-centered large-4 large-centered columns">
    <form method="post" action="<?php echo base_url('Principal'); ?>">
      <div class="row">
        <h4 class="text-center">Ingrese sus Datos</h4>
        <div class="column">
        <label>Nombre
          <input type="text" autofocus="true" placeholder="Nombre">
        </label>
        <label>Apellido
          <input type="text" placeholder="Apellido">
        </label>
        <label>Correo
          <input type="text" placeholder="ejemplo@micorreo.com">
        </label>
        <label>Cédula
          <input type="text" placeholder="402-0000000-0">
        </label>
      </div>
      <div class="column">
        <label>Teléfono
          <input type="text" placeholder="000-000-0000">
        </label>
        <label>Fax
          <input type="text" placeholder="000-000-0000">
        </label>
        <label>Celular
          <input type="text" placeholder="000-000-0000">
        </label>
        <label>Información Adicional
          <input type="text" placeholder="">
        </label>
        <p><a type="submit" class="button expanded">Ingresar</a></p>
        </div>
      </div>
    </form>

  </div>
</div>
    </body>
</html>
