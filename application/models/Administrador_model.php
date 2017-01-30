<?php
class Administrador_model extends CI_Model{

function __construct()
{
  parent::__construct();
}
  
  
  public function buscar_administrador() {

   $ci_especialista = $this->input->post('ci_administrador');
  
  $query = $this->db->query(' SELECT * FROM `administrador` WHERE ci_administrador = "'.$ci_administrador.'"');
    $sql = $query->row();
  return $sql;

  }

  public function guardar(){

    
    $ci_especialista =$this->input->post('n')."".$this->input->post('ci_especialista');
    $perfil = 'Administrador';   

  $data=array(
    
    'ci_administrador'=>$ci_administrador,
    'nombre'=>$this->input->post('nombre'),
    'apellido'=>$this->input->post('apellido'),
    'telefono'=>$this->input->post('telefono'),
    'correo'=>$this->input->post('correo'),
    'ubicacion'=>$this->input->post('ubicacion')
  );
  $this->db->insert('administrador',$data);

 $dat=array(
    'id'=>$ci_administrador,
    'perfil'=>$this->input->post('perfil'),
    'username'=>$this->input->post('username'),
    'password'=>$this->input->post('password')
  );

  $this->db->insert('users', $dat);
}


 function tabla_p($limit, $start)
    {
        $sql = 'select * from `administrador` order by nombre limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

  function tabla_t($limit, $start)
    {
        
        $campo = $this->input->post('busqueda');
        $filtro = $this->input->post('filtro');


        $sql = 'select * from `administrador` where `'.$filtro.'` = "'.$campo.'"  order by nombre limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }


}

 ?>
