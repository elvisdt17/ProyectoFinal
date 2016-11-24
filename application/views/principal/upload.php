<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Publicar Inmueble</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">

    <script>
      google.map.event.addDomListener(window,"load",function() {
        // Create a map object and specify the DOM element for display.
        var mapElement = document.getElementById('map')

        var map = new google.maps.Map(mapElement,{
          center: {lat: 18.439114, lng: -69.979381},
          scrollwheel: false,
          zoom: 8

        });
      })

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRoF_UojmLWjuV2c1bKnuC5o4_RqBXNA4_RqBXNA4"
    async defer></script>
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

    <div class="row">
        <!-- Shows -->
        <div class="large-6 small-12 columns">
          <div class="row">
              <div class="large-12 column">
                 <form>
                  <label>Título </label>
                    <input type="text"/>
                  <label>Dirección</label>
                    <input type="text"/>
                  <label>Tipo</label>
                    <select>
                      <option value="Apartamento">Apartamento</option>
                      <option value="Casa">Casa</option>
                      <option value="Finca">Finca</option>
                    </select>
            </div>
           </div>
          </div>
          <div class="large-6 small-12 columns">
          <div class="row">
            <div class="large-12 column">

                  <div class="row">
                    <div class="large-12 columns">
                      <label>Precio</label>
                      <input type="text" name="precio" value=""/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-12 columns">
                      <label>Acción</label>
                        <select class="" name="">
                          <option>Vender</option>
                          <option>Alquilar</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="large-12 columns">
                      <label>Descripción</label>
                      <input type="text" name="descripción" value=""/>
                    </div>
                  </div>

                  <div class="row">
                    <div class="large-12 columns">
                      <label>Imgagenes</label>
                      <input type="file" multiple="true" name="descripción" accept=".png" value=""/>
                    </div>
                  </div>
            </div>
           </div>
            </div>
    </div>
    <style media="screen">
      #map{
        width: 100%;
        height: 100%;
      }
    </style>
    <div id="map">akjsdkasjdhj</div>

 </body>
</html>
