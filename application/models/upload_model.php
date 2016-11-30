<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function subirDatos($datos){
    $id = $datos['id'];
    if ($id+0 > 0) {
      $this->db->where('id=',$id);
      unset($datos['id']);
      $this->db->update('anuncio',$datos);
    }else {
    $this->db->insert('anuncio',$datos);
   }
   return $this->db->insert_id();
  }

  function cargarAnuncio($id){
    $anuncio = new stdClass();

    $anuncio->id = 0;
    $anuncio->titulo = "";
    $anuncio->direccion = "";
    $anuncio->tipo = "";
    $anuncio->precio = 0;
    $anuncio->accion = "";
    $anuncio->descripcion = "";
    $anuncio->latlng = "";
    $anuncio->usuario = "";

    $query = $this->db->where('id=', $id);
    $query = $this->db->get('anuncio');

    $rs = $query->result();

    if (count($rs) > 0) {
      $anuncio = $rs[0];
    }
    return $anuncio;
  }
  function cargarTipo(){
    $query = $this->db->get('tipo');

    return $query->result();
  }

  function cargarAccion(){
    $query = $this->db->get('accion');

    return $query->result();
  }

  function subirFotos($datos){
    $this->db->insert('fotos', $datos);
  }

}
