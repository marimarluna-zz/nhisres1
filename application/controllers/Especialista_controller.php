<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Especialista_controller extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->library('pagination');

   $this->load->model('administrador_model');
   $this->load->model('paciente_model');
   $this->load->model('especialista_model');
   $this->load->model('usuario_model');
 }
 
 function index()
 {
   $this->load->helper(array('form'));
	  $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
   $this->load->view('menu_navegacion_admin', $data);
   $this->load->view('c_especialista', $data);
 }

 function guardar(){


    $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');

    $ci_especialista =  $this->input->post('n')."".$this->input->post('ci_especialista');

    $query = $this->db->select('*')
                      ->from('especialista')
                      ->where('ci_especialista', $ci_especialista)
                      ->get();

          $sql = $query->row();


  if ($query -> num_rows() != 0 ){
   
   $data['error'] = "Ya existe un especialista con esa cedula";
    $config['base_url'] = site_url('Especialista_controller/guardar');
        $config['total_rows'] = $this->db->count_all('especialista');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['deptlist'] = $this->especialista_model->tabla_p($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

         $data['usuario'] = $this->input->post('usuario');
         $data['password'] = $this->input->post('clave');
         $data['perfil'] = $this->input->post('perfil');
         $data['id'] = $this->input->post('id');

         $data['especialidades'] = $this->usuario_model->especialidades();

         $this->load->view('menu_navegacion_admin', $data);
         $this->load->view('v_tabla_especialista',$data);



  }else{

     $this->load->model('especialista_model');
     $this->especialista_model->guardar();

     $this->load->model('usuario_model');
     $this->usuario_model->guardar_especialista();

       $data['error'] = "Especialista Cargado Exitosamente";
    $config['base_url'] = site_url('Especialista_controller/guardar');
        $config['total_rows'] = $this->db->count_all('especialista');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['deptlist'] = $this->especialista_model->tabla_p($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

         $data['usuario'] = $this->input->post('usuario');
         $data['password'] = $this->input->post('clave');
         $data['perfil'] = $this->input->post('perfil');
         $data['id'] = $this->input->post('id');

         $data['especialidades'] = $this->usuario_model->especialidades();

         $this->load->view('menu_navegacion_admin', $data);
         $this->load->view('v_tabla_especialista',$data);
   }
  
  
 }

 function editar(){

  $this->load->model('especialista_model');
  $this->especialista_model->editar();

   //pagination settings
        $config['base_url'] = site_url('Especialista_controller/tabla');
        $config['total_rows'] = $this->db->count_all('especialista');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $data['deptlist'] = $this->especialista_model->tabla_p($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

       $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');

        //load the department_view
       $this->load->view('menu_navegacion_admin', $data);
       $this->load->view('v_tabla_especialista',$data);
 }

function buscar(){

  $this->load->model('especialista_model');
  $data['datos'] = $this->especialista_model->buscar(); // recuerda lo de data['datos'] que es con lo que enviamos informacion
  $data1['datos1'] = $this->especialista_model->buscar();

  $data['usuario'] = $this->input->post('usuario');
  $data['password'] = $this->input->post('clave');
  $data['perfil'] = $this->input->post('perfil');
  $data['id'] = $this->input->post('id');

  $data['especialidades'] = $this->usuario_model->especialidades();

  $this->load->view('menu_navegacion_admin',$data);
  
  $this->load->view('editar_especialista',$data);
 
 }
  public function tabla()
    {
        //pagination settings
        $config['base_url'] = site_url('Especialista_controller/tabla');
        $config['total_rows'] = $this->db->count_all('especialista');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $data['deptlist'] = $this->especialista_model->tabla_p($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

       $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');

       $data['especialidades'] = $this->usuario_model->especialidades();

        //load the department_view
       $this->load->view('menu_navegacion_admin', $data);
       $this->load->view('v_tabla_especialista',$data);
	  

    }


    function buscar_t(){

        //pagination settings
        $config['base_url'] = site_url('especialista_controller/buscar_t');
        $config['total_rows'] = $this->db->count_all('especialista');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $data['deptlist'] = $this->especialista_model->tabla_t($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

       $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');

       $data['especialidades'] = $this->usuario_model->especialidades();
           

        //load the department_view
        $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('v_tabla_especialista',$data);      
   
    }


     function buscar_ta(){

        //pagination settings
        $config['base_url'] = site_url('especialista_controller/buscar_a');
        $config['total_rows'] = $this->db->count_all('asistente');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $data['deptlist'] = $this->especialista_model->tabla_ta($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

       $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');

       $data['especialistas'] = $this->usuario_model->especialistas();
           

        //load the department_view
        $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('v_tabla_asistentes',$data);      
   
    }


    function buscar_pa(){

        //pagination settings
        $config['base_url'] = site_url('especialista_controller/buscar_pa');
        $config['total_rows'] = $this->db->count_all('paciente');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //call the model function to get the department data
        $data['deptlist'] = $this->especialista_model->tabla_pa($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

       $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');

       $data['especialistas'] = $this->usuario_model->especialistas();
           

        //load the department_view
        $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('v_tabla_paciente',$data);      
   
    }





    function guardar_asistente(){


    $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
 
 
    $ci_asistente = $this->input->post('ci_asistente');

    $query = $this->db->select('*')
                      ->from('asistente')
                      ->where('cedula', $ci_asistente)
                      ->get();

          $sql = $query->row();


  if ($query -> num_rows() != 0 ){
   
   $data['error'] = "Ya existe un Asistente con esa cedula";
    $config['base_url'] = site_url('Especialista_controller/guardar_asistente');
        $config['total_rows'] = $this->db->count_all('asistente');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['deptlist'] = $this->especialista_model->tabla_a($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

         $data['usuario'] = $this->input->post('usuario');
         $data['password'] = $this->input->post('clave');
         $data['perfil'] = $this->input->post('perfil');
         $data['id'] = $this->input->post('id');

         $data['especialistas'] = $this->usuario_model->especialistas();

         $this->load->view('menu_navegacion_admin', $data);
         $this->load->view('v_tabla_asistentes',$data);



  }else{

     $this->load->model('especialista_model');
     $this->especialista_model->guardar_asistente();

     $this->load->model('usuario_model');
     $this->usuario_model->guardar_asistente();

       $data['error'] = "Asistente Cargado Exitosamente";
    $config['base_url'] = site_url('Especialista_controller/guardar_asistente');
        $config['total_rows'] = $this->db->count_all('especialista');
        $config['per_page'] = "7";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['deptlist'] = $this->especialista_model->tabla_a($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

         $data['usuario'] = $this->input->post('usuario');
         $data['password'] = $this->input->post('clave');
         $data['perfil'] = $this->input->post('perfil');
         $data['id'] = $this->input->post('id');

         $data['especialistas'] = $this->usuario_model->especialistas();

         $this->load->view('menu_navegacion_admin', $data);
         $this->load->view('v_tabla_asistentes',$data);
   }
  
  
 }

 
}
 
?>
