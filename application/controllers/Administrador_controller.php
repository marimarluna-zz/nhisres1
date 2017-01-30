<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Administrador_controller extends CI_Controller {
 
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

			$this->load->helper(array('form'));
	  	$data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
   $this->load->view('menu_navegacion_admin', $data);
   $this->load->view('c_administrador', $data);
 }

 function guardar(){
    $ci_administrador = $this->input->post('ci_administrador');
    $query = $this->db->select('*')
                      ->from('administrador')
                      ->where('ci_administrador', $ci_administrador)
                      ->get();
          $sql = $query->row();
  if ($query -> num_rows() != 0 ){
      $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
     
   
   $data['error'] = "Ya existe un c_administrador con esa cedula";
   $this->load->view('menu_navegacion_admin', $data);
   $this->load->view('c_administrador', $data);
  }else{
     $this->load->model('administrador_model');
     $this->administrador_model->guardar();
     $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
     
     $this->load->view('menu_navegacion_admin', $data);
     $this->load->view('administrador_cargado');
   }
 }
 function editar(){

   $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
     

     $this->load->view('menu_navegacion_admin', $data);
     $this->load->view('e_administrador');
 }

 function buscar(){

   $this->load->model('administrador_model');
   $this->especialista_model->tabla_administrador();

   $this->load->view('v_tabla_administrador');

 }

  public function tabla()
    {
        //pagination settings
        $config['base_url'] = site_url('administrador_controller/tabla');
        $config['total_rows'] = $this->db->count_all('administrador');
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
        $data['deptlist'] = $this->administrador_model->tabla_p($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

 $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');

        //load the department_view
        $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('v_tabla_administrador',$data);
    }


    function buscar_t(){

        //pagination settings
        $config['base_url'] = site_url('administrador_controller/buscar_t');
        $config['total_rows'] = $this->db->count_all('administrador');
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
        $data['deptlist'] = $this->administrador_model->tabla_t($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

            $data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
           

        //load the department_view
        $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('v_tabla_administrador',$data);      
   
    }


 public function especialistas() {

        $config['base_url'] = site_url('Administrador_controller/especialistas');
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


public function asistentes() {

        $config['base_url'] = site_url('Administrador_controller/asistentes');
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
    }

    public function pacientes() {

        $config['base_url'] = site_url('Administrador_controller/pacientes');
        $config['total_rows'] = $this->db->count_all('paciente');
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

        $data['deptlist'] = $this->paciente_model->tabla_p($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

         $data['usuario'] = $this->input->post('usuario');
         $data['password'] = $this->input->post('clave');
         $data['perfil'] = $this->input->post('perfil');
         $data['id'] = $this->input->post('id');

         $data['especialistas'] = $this->usuario_model->especialistas();

         $this->load->view('menu_navegacion_admin', $data);
         $this->load->view('v_tabla_paciente',$data);
    }


 
}
 
?>
