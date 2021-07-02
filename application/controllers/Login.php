<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	var $msg;

	public function __construct(){

		parent::__construct();
    	$this->load->helper('url');
        $this->load->database();   
        $this->load->model('userModel');
        $this->load->library('session');

	}

	public function index()
	{
        $data['msg'] = $this->msg;
		$this->load->view('login', $data);
	}

	public function validate(){
		 $email = $this->input->post('email');
		 $password = $this->input->post('contrasena');

		 $user = $this->userModel->get_user($email,$password);

		 if ( $user ){
		 	$this->session->set_userdata('nombre',$user->nombre);
		 	redirect('Controller');
            
		 } else
		 {
		 	$this->msg = "El correo electrónico o la contraseña son incorrectos.";
		 	$this->index();
		 }
 
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
