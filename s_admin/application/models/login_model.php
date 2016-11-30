<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    //Codeigniter : Write Less Do More
  }

  function iniciarSesion($user, $clave){
    $this->db->where('usuario =' ,$user);
    $this->db->where('clave =' ,md5($clave));
    $query = $this->db->get('admin');
    $result = $query->result();

    $usuario = false;


    if(count($result) > 0){
      $usuario = $result[0];

      return $usuario->id;
    }
      $conteo = $this->db->query("select count(*) as nr from admin");
      $cnt = $conteo->result();
    #  var_dump($cnt);
      if ($cnt[0]->nr < 1 && $user == 'admin' && $clave == 'admin') {
        return 2;
      }

      return false;

  }

}
