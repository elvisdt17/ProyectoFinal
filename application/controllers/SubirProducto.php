<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubirProducto extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('upload_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array();
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $data['anuncio'] = $this->upload_model->cargarAnuncio($id);
    $data['tipo']= $this->upload_model->cargarTipo();
    $data['accion']= $this->upload_model->cargarAccion();
    $this->load->view('principal/upload',$data);
  }

  function guardar(){
    if(isset($_POST)){
      $idAnuncio = $this->upload_model->subirDatos($_POST);
      $fotos = $this->guardarImg('fotos');

               $arr = array(
                   'idAnuncio' => $idAnuncio
               );
               foreach ($fotos as $foto) {
                   $arr['foto'] = $foto;
                   $this->upload_model->subirFotos($arr);
               }
    }
    redirect('principal');
  }
  public function guardarImg($f)
    {

        $result = array();

      if (isset($_FILES[$f]["tmp_name"])) {
          $fotos = $_FILES[$f]["tmp_name"];
        foreach ($fotos as $foto) {
            $url = $foto;
            $url2 = "fotos/".uniqid().".jpg";
            copy($url,$url2);
            $result[] = $url2;
        }
    }
      return $result;
    }

}
