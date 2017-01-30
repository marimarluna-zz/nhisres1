<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 public function index()
 {

        $this->load->view('login');
	 
}
	
	public function inicio()
 {
  $perfil = $this->input->post('perfil');
		
		$data['usuario'] = $this->input->post('usuario');
       $data['password'] = $this->input->post('clave');
       $data['perfil'] = $this->input->post('perfil');
       $data['id'] = $this->input->post('id');
		
		
		if($perfil == 'Administrador'){
      $this->load->view('menu_navegacion_admin', $data);
        $this->load->view('administrador/menu_principal', $data);
     }else{
      $this->load->view('menu_navegacion_espe', $data);
        $this->load->view('especialista/menu_principal', $data);
     }
 
 }



}
?>
