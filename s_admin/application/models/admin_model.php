<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function guardarDatos($datos){
    $id = $datos['id'];
    if($id+0 > 0){
      $this->db->where('id=', $id);
      unset($datos['id']);
      $this->db->update('admin', $datos);
    }
    else{
      $this->db->insert('admin', $datos);
    }
}

  function borrar($id){
    $this->db->where('id=',$id);
    $this->db->delete('admin');
  }

  function listarDatos(){
    $query = $this->db->get('admin');

    return $query->result();
  }

  function cargarAdmin($id){
  $adminstrador = new stdClass();
  $adminstrador->id = "";
  $adminstrador->usuario = "";
  $adminstrador->clave = "";

  $query = $this->db->where('id=', $id);
  $query = $this->db->get('admin');

  $rs = $query->result();
  if(count($rs) > 0){
    $adminstrador = $rs[0];
  }

  return $adminstrador;
}
}
