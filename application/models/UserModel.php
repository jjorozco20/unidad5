<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {


	public function get_user($email, $password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);
		$query = $this->db->get('usuarios');  
		
		return $query->row();      
	}

}