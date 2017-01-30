<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();

 }
 
 function index(){

 //	if($this->session->userdata('logged_in'))  {

     $this->load->helper(array('form'));
	$data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
			
     $val = $data['perfil'];

     $data['error'] = "Bienvenido ";


     if($val == 'Administrador'){
      $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('administrador/menu_principal', $data);
     }else{
      $this->load->view('menu_navegacion_espe', $data);
        $this->load->view('especialista/menu_principal', $data);
     }

 //  }
 //  else
 //  {
     //If no session, redirect to login page
 //    redirect('entrar', 'refresh');
 //  }

 }


  function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('login', 'refresh');
 }



}


?>
