<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('usuarios_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $datos = array();
    $datos['usuarios'] = $this->usuarios_model->listarDatos();
    $this->load->view('vistas/usuarios',$datos);
  }

  function delete(){
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $this->usuarios_model->borrar($id);
    $this->load->view('vistas/mensaje');
  }

}
