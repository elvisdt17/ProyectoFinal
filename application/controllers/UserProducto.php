<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProducto extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('userpro_model');
  }

  function index()
  {
    $datos = array();
    $datos['articulo'] = $this->userpro_model->listar();
    $this->load->view('principal/producto_usuario',$datos);
  }
  function delArti(){
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $this->userpro_model->borrar($id);
    redirect('UserProducto');
  }
}
