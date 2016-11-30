<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adminstrador</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.4/foundation-flex.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('views/vistas/style.css') ?>">
  </head>
  <body>
    <style media="screen">
    .opciones{
      width: 300px;
      height: 400px;
      background-color: #E9E9E9;
      border-radius: 10px;
      padding-top: 10px;
    }
    #articulos{
      margin-left: 450px;
      margin-top: -400px;
    }
    #usuario{
      margin-left: 130px;
    }
    #accion{
      padding-top: 20px;
      margin-left: 770px;
      margin-top: -400px;
    }
    #tipo{
      margin-left: 1090px;
      margin-top: -400px;
    }
    .contenido{
      margin-left: 30px;
    }
    .contenedor{
      margin-top: 60px;
      margin-left: 20px;
    }
    h3{
      margin-left: 60px;
    }
    .large{
      margin-left: 85px;
    }
    #text{
      margin-top: 56px;
      margin-left: 38px;
    }
    #mmg{
      margin-left: 88px;
    }
    #acc{
      margin-top: 52px;
      margin-left: 70px;
    }
    #img{
      margin-left: 12px;
    }
    a:link{
      color: #000;
    }
    a:hover{
      color: #000;
      text-decoration: none;
    }
    .admin{
      background-color: #E9E9E9;
      border-radius: 10px;
      width: 400px;
      height: 120px;
      margin-left: 560px;
      margin-top: 30px;
    }
    #engra{
      margin-left: 20px;
      margin-top: 13px;
      width: 90px;
      height: 90px;
    }
    #min{
      margin-left: 150px;
      margin-top: -60px;
    }

    </style>
    <h2 class="text-center">Adiministrador</h2>
    <div class="contenedor">
      <a href="<?php echo base_url('Usuarios');?>">
      <div class="opciones" id="usuario">
        <div class="contenido">
        <img src="http://www.free-icons-download.net/images/user-icon-44709.png" width="250px" height="250px">
        <h3 aligin-center>Usuarios</h3>
        </div>
      </div>
      </a>

      <a href="<?php echo base_url('Articulos'); ?> ">
      <div class="opciones" id="articulos">
        <div class="contenido">
        <img src="http://www.semantic-systems.com/img/soluciones/conf_producto.png" width="250px" height="250px">
        <h3>Artículos</h3>
      </div>
      </div>
      </a>

      <a href="<?php echo base_url('Accion'); ?> ">
      <div class="opciones" id="accion">
        <div class="contenido">
        <img id="img" src="http://www.mivisitavirtual.com/imagenes/icono-caracteristicasg-4.png" width="210px" height="210px">
        <h3 id="acc">Acción</h3>
        </div>
      </div>
      </a>

      <a href="<?php echo base_url('Tipo'); ?> ">
      <div class="opciones" id="tipo">
        <div class="contenido">
        <img src="http://www.fancyicons.com/free-icons/103/pretty-office-4/png/256/home_256.png" width="220px" >
        <h3 id="text">Tipo Inmueble</h3>
        </div>
      </div>
      </a>

      <a href="<?php echo base_url('Admin'); ?>">
        <div class="admin">
          <img id="engra" src="http://publicdomainvectors.org/photos/ruota_dentata_grigia_ar_01r.png" width="120px" height="120px">
          <h3 id="min">Administradores</h3>
        </div>
      </a>
    </div>
  </body>
</html>
