<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguridad extends CI_Controller {

  public function __construct()
{
  parent::__construct();
  //Codeigniter : Write Less Do More
  define('NOLOGIN', true);
  $this->load->helper('url');
  $this->load->model('login_model');
}

	public function index()
	{
		$this->load->view('principal/login');
	}

  function login(){
    $usuario = $_POST['correo'];
    $clave = $_POST['clave'];

    $tmp= $this->login_model->iniciarSesion($usuario, $clave);

    if($tmp !==false){
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
