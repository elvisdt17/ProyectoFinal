<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {

  public function __construct()
{
  define('NOLOGING', true);
  parent::__construct();
  //Codeigniter : Write Less Do More
  $this->load->model('login_model');
}

	public function index()
	{
    $this->load->view('principal/signin');
	}

  function login(){
    $usuario = $_POST['correo'];
    $clave = $_POST['clave'];
    $mo= array();
    $tmp= $this->login_model->iniciarSesion($usuario, $clave);

    if($tmp !== false){
      $_SESSION['usuario']= $tmp;
      redirect('principal');
    }
    else{
      $this->load->view('principal/error');
    }
  }

    function cerrar(){
      session_destroy();
      redirect('Seguridad');
    }


  }
