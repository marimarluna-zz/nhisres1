<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class VerifyLogin extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->helper('url', 'form');
   $this->load->model('user','',TRUE);

 }
 
 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');
 
   $this->form_validation->set_rules('usuario', 'usuario', 'trim|required|xss_clean');
   $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean|callback_check_database');
 
   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page
    $data['error'] = "¡¡Error!!";
     $this->load->view('login', $data);
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }
 
 }
 
 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
		$usuario = $this->input->post('usuario');
 
   //query the database
   $result = $this->user->login($usuario, $password);
 
  if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'perfil' => $row->perfil,
         'id' => $row->id,
         'username' => $row->username
         
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Usuario o Clave invalida');

     return false;
   }
 }
	
	
	 function entrar(){

  $nombre = $this->input->post('usuario');
  $clave = $this->input->post('password');
  
  $query = $this->db->select('*')
                      ->from('users')
                      ->where('username', $nombre)
                      ->where('password', $clave)
                      ->get();
  $sql = $query->row();


  if ($query -> num_rows() != 0 ) {

    $data['error'] = "Bienvenido ";
    $data['usuario'] = $sql->username;
    $data['perfil'] = $sql->perfil;
    $data['password'] = $sql->password;
    $data['id'] = $sql->id;  
    $val = $sql->perfil;
	  
     if($val == 'Administrador'){
      $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('administrador/menu_principal', $data);
     }else{
      $this->load->view('menu_navegacion_espe', $data);
        $this->load->view('especialista/menu_principal', $data);
     }

  } else {

    $data['error'] = "Error al cargar los datos";
     $this->load->view('login', $data);

  }

 }



}
?>
