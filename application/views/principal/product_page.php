<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Itla Inmueble</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <script>
      function cambiar(a){
        var img = document.getElementById('img');
        img.src=a;
      }
    </script>
    <style media="screen">
      #img{
        max-width: 600px;
        max-height: 400px;
      }
    </style>
  </head>
  <body>
    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu>
            <li class="menu-text">Itla Inmueble</li>
            <li class="has-submenu">
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->
    <br>
    <!-- You can now combine a row and column if you just need a 12 column row -->
    <div class="row columns">
      <nav aria-label="You are here:" role="navigation">
        <ul class="breadcrumbs">
          <li><a href="<?php echo base_url('Principal'); ?>">Inicio</a></li>
          <li>
            <span class="show-for-sr">Current: </span> Articulo
          </li>
        </ul>
      </nav>
    </div>

    <div class="row">

      <?php
$url = $foto[0]->foto;
$url2 = base_url("{$url}");

      echo "<div class=\"medium-6 columns\">
        <img class=\"thumbnail\" id=\"img\" src=\"{$url2}\" width=\"700px\" height=\"400px\">";
        $fotos = "";
          echo "<div class=\"row small-up-4\">";
        if (count($foto) > 1) {
          foreach ($foto as $f) {
            $fotos .= "<div class=\"column\">
              <img class=\"thumbnail\" src=\"".base_url($f->foto)."\" width=\"250px\" height=\"200px\" onclick='cambiar(\"".base_url($f->foto)."\")'>
            </div>";
          }
        }
        echo $fotos."</div>";
        ?>
      </div>

      <div class="medium-6 large-5 columns">
        <h3><?php echo $articulo[0]->titulo; ?></h3>
        <p><?php echo $articulo[0]->descripcion; ?></p>


        <div class="row">
          <div class="small-3 columns">
            <label for="middle-label" class="middle">Precio</label>
          </div>
          <div class="small-9 columns">
            <input type="text" id="middle-label" readonly="true"value="<?php echo $articulo[0]->precio;?>">
          </div>
        </div>

        <a href="#" class="button large expanded">Contactar</a>
        </div>
    </div>
<br>
    <div class="column row">
      <ul class="tabs" data-tabs id="example-tabs">
        <li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Información</a></li>
      </ul>
      <div class="tabs-content" data-tabs-content="example-tabs">
        <div class="tabs-panel is-active" id="panel1">
          <h4>Vendedor</h4>
          <hr />
          <div class="media-object stack-for-small">
            <!-- <div class="media-object-section">
              <img class="thumbnail" src="http://placehold.it/100x100">
            </div> -->
            <div class="media-object-section">
              <h5><?php echo $vendedor[0]->nombre." ".$vendedor[0]->apellido;?></h5>
              <i><p>Formas de contacto</p></i>
              <hr>
              <p>Celular: <?php echo $vendedor[0]->celular;?></p>
              <p>Fax: <?php echo $vendedor[0]->fax;?></p>
              <p>Telefono: <?php echo $vendedor[0]->telefono;?></p>
            </div>
          </div>
          </div>
        </div>
        <div class="tabs-panel" id="panel2">
          <div class="row medium-up-3 large-up-5">
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
            <div class="column">
              <img class="thumbnail" src="http://placehold.it/350x200">
              <h5>Other Product <small>$22</small></h5>
              <p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
              <a href="#" class="button hollow tiny expanded">Buy Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row column">
      <ul class="menu">
        <li>Itla Inmueble</li>
        <li><a href="<?php echo base_url('Principal'); ?>">Inicio</a></li>
        <!-- <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li> -->
        <li class="float-right">Copyright 2016</li>
      </ul>
    </div>



    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
