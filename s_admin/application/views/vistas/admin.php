<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/foundation-flex.min.css" />
    <title>Admin</title>
  </head>
  <body>
    <div class="container">
      <br>
      <a id="btn" align="right" href="<?php echo base_url('/Principal'); ?>" class="btn btn-primary">Regresar</a>
      <br><br><br>
      <form class="" action="<?php echo base_url('admin/guardar'); ?>" method="post">
        <div class="row">
         <div class="large-4 columns">
           <label>ID
             <input readonly type="text" name="id" value="<?php echo $adminis->id; ?>"  />
           </label>
         </div>
       </div>
          <div class="row">
           <div class="large-4 columns">
             <label>Usuario
               <input type="text" placeholder="Usuario" name="usuario" value="<?php echo $adminis->usuario; ?>" />
             </label>
           </div>
         </div>
         <div class="row">
          <div class="large-4 columns">
            <label>Clave
              <input type="text" placeholder="Clave" name="clave" value="<?php echo $adminis->clave; ?>" />
            </label>
          </div>
        </div>
         <button type="submit" class="btn btn-primary" name="">Guardar</button>
      </form>
      <br><br><br>
      <table>
        <tr>
          <th>ID</th>
          <th>Usuario</th>
          <th>Clave</th>
          <th>Act</th>
        </tr>

        <tbody>
          <?php
            foreach ($admin as $ad) {
              $linkDel = base_url("/admin/delete/?id={$ad->id}");
              $linkEdit = base_url("/Admin/?id={$ad->id}");

              echo "<tr>
              <td>{$ad->id}</td>
              <td>{$ad->usuario}</td>
              <td>{$ad->clave}</td>
              <td>
              <a href='{$linkDel}' class='btn btn-danger'>Del</a>
              <a href='{$linkEdit}' class='btn btn-warning'>Edit</a>
              </td>
              </tr>";
            }
           ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
