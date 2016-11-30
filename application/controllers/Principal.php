<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

  public function __construct()
{
  define('NOLOGING', true);
  parent::__construct();
  //Codeigniter : Write Less Do More
  $this->load->helper('url');
  $this->load->model('principal_model');
}

	public function index()
	{
    $datos = array();

    $datos['articulo'] = $this->principal_model->listar();
    $datos['articulos'] = $this->principal_model->lista();

    foreach ($datos['articulo'] as $f) {
      $f->foto = $this->principal_model->sacaFoto($f->id);
    }
    foreach ($datos['articulos'] as $f) {
      $f->foto = $this->principal_model->sacaFoto($f->id);
    }
		$this->load->view('principal/principal', $datos);
	}
  function showArti(){
    $id = (isset($_GET['id']))?$_GET['id']+0:0;
    $valor = array();

    $valor['articulo'] = $this->principal_model->sacarDatos($id);

    $tmp = $this->principal_model->sacarDatos($id);
    $usuario =  $tmp[0]->usuario;
    $idAnuncio = $tmp[0]->id;
    $valor['foto']= $this->principal_model->sacarFoto($idAnuncio);
    $valor['vendedor'] = $this->principal_model->sacarVendedor($usuario);

    $this->load->view('principal/product_page',$valor);
  }

  function busqueda(){
    if(isset($_POST)){
      $valor= array();
      $valor['busqueda'] = $this->principal_model->busqueda($_POST);
    }
    $this->load->view('principal/busqueda',$valor);
  }

}
