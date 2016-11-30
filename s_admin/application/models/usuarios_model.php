<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function listarDatos(){
    $query = $this->db->query('select id, nombre, apellido, correo from usuario');

    return $query->result();
  }

  function borrar($id){
    $this->db->where('id=',$id);
    $this->db->delete('usuario');
  }

}
