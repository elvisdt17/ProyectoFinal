<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/foundation-flex.min.css" />
    <title>Accion</title>
  </head>
  <body>
    <style media="screen">
      #btn{
        margin-left: 1060px;
      }
    </style>
    <div class="container">
      <a id="btn" align="right" href="<?php echo base_url('/Principal'); ?>" class="btn btn-primary">Regresar</a>
      <form class="" action="<?php echo base_url('accion/guardar'); ?>" method="post">
        <div class="row">
         <div class="large-4 columns">
           <label>ID
             <input readonly type="text" name="id"  />
           </label>
         </div>
       </div>
          <div class="row">
           <div class="large-4 columns">
             <label>Nuevo
               <input type="text" placeholder="Nueva accion" name="accion" />
             </label>
           </div>
         </div>
         <button type="submit" class="btn btn-primary" name="">Guardar</button>
      </form>
      <br><br><br>
      <table class="table">
        <tr>
          <th>ID</th>
          <th>Título</th>
          <th>Act</th>
        </tr>
        <tbody>
            <?php
              foreach ($acciones as $accion) {
                $linkDel = base_url("/accion/delete/?id={$accion->id}");
                echo "<tr>
                  <td>{$accion->id}</td>
                  <td>{$accion->accion}</td>
                  <td><a href='{$linkDel}' class='btn btn-danger'>Eliminar</a></td>
                </tr>";
              }
            ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
