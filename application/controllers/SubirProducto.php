<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubirProducto extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('principal/upload');
  }

}
