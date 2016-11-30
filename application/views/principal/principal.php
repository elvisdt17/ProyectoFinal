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
          <li><a href="<?php echo base_url('Mapa'); ?>">Mapa</a></li>
          <li><a href="<?php echo base_url('SubirProducto'); ?>">Publicar Inmueble</a></li>
          <?php
          $linkC = base_url('/Seguridad/cerrar');
          $linkA = base_url('/Seguridad');
          $linkU = base_url('UserProducto');
              if (!isset($_SESSION['usuario'])) {
                echo "<li><a href='{$linkA}'>Iniciar Sesion</a></li>";
              }else {
                echo "<li><a href='{$linkU}'>Mis Anuncios</a></li>";
                echo "<li><a href='{$linkC}'>Cerrar Sesion</a></li>";
              }
           ?>
        </ul>
      </div>
      <div class="top-bar-right">
        <div class="row">
          <form method="post" action="<?php echo base_url('Principal/busqueda'); ?>">
            <div class="large-12 columns">
              <div class="row collapse">
               <div class="small-10 columns">
                <input id="mmg" type="text" name="busca" placeholder="casa, apartamento, etc.">
            </div>
            <div class="small-2 columns">
              <button type="submit" class="button postfix">Ir</a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<style media="screen">
  #mmg{
    margin-left: 295px;
  }
  .caru{
    width: 100%;
    margin: auto;
}

.caru ul{
    padding: 0;
    display: flex;
    width: 400%;

    animation: cambio 20s infinite;
}

.caru li{
    width: 100%;
    list-style: none;
}
.caru img{
    width: 100%;
    height: 700px;
}

@keyframes cambio{
    0%{margin-left: 0;}
    18%{margin-left: 0;}

    22%{margin-left: -100%;}
    42%{margin-left: -100%;}

    47%{margin-left: -200%;}
    67%{margin-left: -200%;}

    72%{margin-left: -300%;}
    92%{margin-left: -300%;}
}
</style>
    <!-- End Top Bar -->
    <br>
    <div class="caru">
        <ul>
            <li><img src="<?php echo base_url('/img/img1.jpg'); ?>" alt=""></li>
            <li><img src="<?php echo base_url('/img/img2.jpg'); ?>" alt=""></li>
            <li><img src="<?php echo base_url('/img/img3.jpg'); ?>" alt=""></li>
            <li><img src="<?php echo base_url('/img/img4.jpg'); ?>" alt=""></li>
        </ul>
    </div>
    <br /> <br />
    <div class="row column text-center">
      <h2>Artículos Recientes</h2>
      <hr>
    </div>

    <div class="row small-up-2 large-up-4">
      <?php


      $d = "RD$ ";
      foreach ($articulo as $art){
        $url = $art->foto[0]->foto;
        $url2 = base_url($url);
        $linkArt = base_url("/Principal/showArti/?id={$art->id}");
        echo "      <div class='column' >
                <img width='600px' height='400px' class='' src='{$url}'>
                <h5>{$art->titulo}</h5>
                <p>$d{$art->precio}</p>
                <a href='{$linkArt}' class='button expanded botones-recientes'>Ver</a>
              </div>";
      } ?>
    </div>
    <hr>
    <div class="row column text-center">
      <h2>Más Artículos</h2>
      <hr>
    </div>

    <div class="row small-up-2 medium-up-3 large-up-6">
      <?php
      $d = "RD$ ";
      foreach ($articulos as $arti){
        $url = $arti->foto[0]->foto;
        $url2 = base_url($url);
         $linkArt = base_url("/Principal/showArti/?id={$arti->id}");
        echo             "<div class='column'>
                <img class='thumbnail' width=\"500px\" height=\"400px\" src='{$url2}'>
                <h5>{$arti->titulo}</h5>
                <p>$d{$arti->precio}</p>
                <a href='{$linkArt}' class='button small expanded hollow'>Ver</a>
              </div>";
      } ?>

    </div>

    <hr>
    <div class="callout large secondary">
      <div class="row">
        <div class="large-4 columns left">
          <h5>Itla Inmueble <i>@copyright 2016</i></h5>
          <!-- <p>Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna.</p> -->
        </div>
        <div class="large-3 large-offset-2 columns">
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
