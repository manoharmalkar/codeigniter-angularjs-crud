<?php 
class Login_Model extends CI_Model {
	
    function __construct() { 
     parent::__construct(); 
    } 
    
    function getUser($username, $password){
        $query = $this->db->get_where('admin', array('username' => $username, 'password'=>$password));
        return $query->result();
    }
    
}