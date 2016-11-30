<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accion extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('accion_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $datos = array();
    $datos['acciones'] = $this->accion_model->listarDatos();
    $this->load->view('vistas/accion',$datos);
  }

  function delete(){
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $this->accion_model->borrar($id);
    $this->load->view('vistas/mensajeAcc');
  }

  function guardar(){
    if(isset($_POST)){
      $this->accion_model->guardarDatos($_POST);
    }
    $this->load->view('vistas/mensajeAcc');
  }

}
