<?php
class Especialista_model extends CI_Model{

function __construct()
{
  parent::__construct();
}
  
  
  public function buscar_especialista() {

   $ci_especialista = $this->input->post('ci_especialista');
  
  $query = $this->db->query(' SELECT * FROM `especialista` WHERE ci_especialista = "'.$ci_especialista.'"');
    $sql = $query->row();
  return $sql;

  }

  public function guardar(){

    $ci_especialista =  $this->input->post('n')."".$this->input->post('ci_especialista');

  $data=array(
    
    'ci_especialista'=>$ci_especialista,
    'nombre'=>$this->input->post('nombre'),
    'apellido'=>$this->input->post('apellido'),
    'telefono'=>$this->input->post('telefono'),
    'socio'=>$this->input->post('socio'),
    'especializacion'=>$this->input->post('especializacion'),
    'ubicacion'=>$this->input->post('ubicacion')
  );
  $this->db->insert('especialista',$data);

}

public function guardar_asistente(){


  $ci_asistente =  $this->input->post('n')."".$this->input->post('ci_asistente');

  $data=array(
    
    'ci_especialista_asociaciado'=>$this->input->post('ci_especialista'),
    'nombre'=>$this->input->post('nombre'),
    'apellido'=>$this->input->post('apellido'),
    'telefono'=>$this->input->post('telefono'),
    'cedula'=>$ci_asistente
  );
  $this->db->insert('asistente',$data);

}

function editar(){

   $id = $this->input->post('valor');
      
    $data = array(
        'nombre'=>$this->input->post('nombre'),
        'apellido'=>$this->input->post('apellido'),
        'telefono'=>$this->input->post('telefono'),
        'ubicacion'=>$this->input->post('ubicacion'),
        'especializacion'=>$this->input->post('especializacion'),
        'socio'=>$this->input->post('socio')   
             );
    
    #aqui colocamos el campo unico y la variable que declaramos arriba esto viene siendo como un Where ci_especialista = $cedula
    $this->db->where('ci_especialista', $id);
    

    #aqui simplemente decimos que pase el arreglo anterior a la tabla especialista
    $this->db->update('especialista', $data);
    

} 


 function tabla_p($limit, $start)
    {
        $sql = 'select * from `especialista` order by nombre limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }


  function tabla_t($limit, $start)
    {
        
        $campo = $this->input->post('busqueda');
        $filtro = $this->input->post('filtro');


        $sql = 'select * from `especialista` where `'.$filtro.'` like "%'.$campo.'%"  order by nombre limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function tabla_ta($limit, $start)
    {
        
        $campo = $this->input->post('busqueda');
        $filtro = $this->input->post('filtro');


        $sql = 'select * from `asistente` where `'.$filtro.'` like "%'.$campo.'%"  order by nombre limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

    function tabla_pa($limit, $start)
    {
        
        $campo = $this->input->post('busqueda');
        $filtro = $this->input->post('filtro');


        $sql = 'select * from `paciente` where `'.$filtro.'` like "%'.$campo.'%"  order by nombre limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

function buscar() {
 
   #se crea una variable para capturar el dato - aqui esta lo que te dije del nombre y el id del input, despues del post debe ir ese nombre, asi obtienes lo que este en el campo
   $cedula = $this->input->post('ci_especialista');

   $query1 = $this->db->select('*')
                      ->from('users')
                      ->where('id', $cedula)
                      ->get();
    $sql1 = $query1->row();
   
   $query = $this->db->select('*')
                      ->from('especialista')
                      ->where('ci_especialista', $cedula)
                      ->get();
    $sql = $query->row();
      return $sql;
      return $sql1;


 }

 function tabla_a($limit, $start)
    {
        $sql = 'select * from `asistente` order by nombre limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

}

 ?>
