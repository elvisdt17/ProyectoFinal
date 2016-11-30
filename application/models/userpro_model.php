<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserPro_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }
  function listar(){
    $usuario = $_SESSION['usuario'];
    $this->db->where('usuario = ', $usuario);
    $query = $this->db->get('anuncio');

    return $query->result();
  }
  function borrar($id){
    $this->db->where('id =',$id);
    $this->db->delete('anuncio');
  }
}
