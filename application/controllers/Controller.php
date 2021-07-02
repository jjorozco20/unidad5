<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {


    public function __construct(){
    	parent::__construct();
        $this->load->database();
        $this->load->library('session');
        $this->load->helper('url');        
        $this->load->library('session');
    }

	public function index(){
        if($this->session->has_userdata('nombre')){
			$this->load->view('index');

        }else{
            redirect('login');
        }
	}
}
