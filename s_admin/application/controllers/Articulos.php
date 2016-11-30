<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class articulos extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('articulos_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $datos = array();
    $datos['articulos'] = $this->articulos_model->listarDatos();
    $this->load->view('vistas/articulos',$datos);
  }

  function delete(){
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $this->articulos_model->borrar($id);
    $this->load->view('vistas/mensajeArt');
  }

}
