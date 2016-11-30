<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    define('NOLOGING', true);

    parent::__construct();
    $this->load->model('admin_model');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $datos = array();

      $id = (isset($_GET['id']))? $_GET['id']+0:0;
      $datos['adminis'] = $this->admin_model->cargarAdmin($id);
      $datos['admin'] = $this->admin_model->listarDatos();
      $this->load->view('vistas/admin',$datos);
  }

  function guardar(){
    if(isset($_POST)){
      $_POST['clave'] = md5($_POST['clave']);
      $this->admin_model->guardarDatos($_POST);
    }
    $this->load->view('vistas/mensajeAdmin');
  }

  function delete(){
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $this->admin_model->borrar($id);
    $this->load->view('vistas/mensajeAdmin');
  }

}
