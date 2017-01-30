<?php
class Usuario_model extends CI_Model{

function __construct()
{
  parent::__construct();
}
  
  
  public function buscar_usuario() {

   $id = $this->input->post('id');
  
  $query = $this->db->query(' SELECT * FROM `users`');
    $sql = $query->row();
  return $sql;

  }

  public function especialidades(){
  
    $query = $this->db->select('*')
                      ->from('especialidades')
                      ->get();
    $sql = $query->result();
  
  return $sql;
  
  }

  public function especialistas(){
  
    $query = $this->db->select('*')
                      ->from('especialista')
                      ->get();
    $sql = $query->result();
  
  return $sql;
  
  }


  public function guardar_especialista(){



  $data=array(
    
    'id'=>$this->input->post('ci_especialista'),
    'perfil'=>'Especialista',
    'username'=>$this->input->post('nombre'),
    'password'=>$this->input->post('ci_especialista'),
    
  );
  $this->db->insert('users',$data);
}

public function guardar_asistente(){



  $data=array(
    
    'id'=>$this->input->post('ci_asistente'),
    'perfil'=>'Asistente',
    'username'=>$this->input->post('nombre'),
    'password'=>$this->input->post('ci_asistente'),
    
  );
  $this->db->insert('users',$data);
}

public function guardar_paciente(){

  $data=array(
    
    'id'=>$this->input->post('ci_paciente'),
    'perfil'=>'Paciente',
    'username'=>$this->input->post('nombre'),
    'password'=>$this->input->post('ci_paciente'),
    
  );
  $this->db->insert('users',$data);
}


 function lista_usuarios($limit, $start)
    {
        $sql = 'select * from `users` order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }


  function tabla_t($limit, $start)
    {
        
        $campo = $this->input->post('busqueda');
        $filtro = $this->input->post('filtro');


        $sql = 'select * from `users` where `'.$filtro.'` = "'.$campo.'"  order by id limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

}

 ?>
