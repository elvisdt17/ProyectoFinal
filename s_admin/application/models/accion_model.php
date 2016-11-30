<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class accion_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function listarDatos(){
    $query = $this->db->get('accion');

    return $query->result();
  }

  function borrar($id){
    $this->db->where('id=',$id);
    $this->db->delete('accion');
  }

  function guardarDatos($datos){
    $this->db->insert('accion', $datos);
  }

}
