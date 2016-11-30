<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Usuarios</title>
  </head>
  <body>
<div class="container">
  <a href="<?php echo base_url('/Principal'); ?>" class="btn btn-primary">Regresar</a>
    <h1 class="text-center">Usuarios registrados</h1>
    <br><br>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Dirección</th>
        <th>Tipo</th>
        <th>Precio</th>
        <th>Acción</th>
        <th>Descripción</th>
        <th>Lat-Long</th>
        <th>Act</th>
      </tr>
      <tbody>
          <?php
            foreach ($articulos as $articulo) {
              $linkDel = base_url("/articulos/delete/?id={$articulo->id}");
              echo "<tr>
                <td>{$articulo->id}</td>
                <td>{$articulo->titulo}</td>
                <td>{$articulo->direccion}</td>
                <td>{$articulo->tipo}</td>
                <td>{$articulo->precio}</td>
                <td>{$articulo->accion}</td>
                <td>{$articulo->descripcion}</td>
                <td>{$articulo->latlng}</td>
                <td><a href='{$linkDel}' class='btn btn-danger'>Eliminar</a></td>
              </tr>";
            }
          ?>
      </tbody>
    </table>
</div>
  </body>
</html>
