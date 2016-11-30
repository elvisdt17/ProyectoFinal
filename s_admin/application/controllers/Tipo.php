<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tipo extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('tipo_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $datos = array();
    $datos['tipos']= $this->tipo_model->listarDatos();
    $this->load->view('vistas/tipo',$datos);
  }

  function guardar(){
    if(isset($_POST)){
      $this->tipo_model->guardarDatos($_POST);
    }
    $this->load->view('vistas/mensajeTipo');
  }

  function delete(){
    $id= (isset($_GET['id']))?$_GET['id']+0:0;
    $this->tipo_model->borrar($id);
    $this->load->view('vistas/mensajeTipo');
  }

}
