<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tipo_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarDatos($datos){
    $this->db->insert('tipo', $datos);
  }

  function listarDatos(){
    $query = $this->db->get('tipo');

    return $query->result();
  }

  function borrar($id){
    $this->db->where('id=',$id);
    $this->db->delete('tipo');

  }

}
