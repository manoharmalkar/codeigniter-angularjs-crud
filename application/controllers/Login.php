<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->helper('form');
        $this->load->model('login_model');
        $data['error'] = '';
        if($this->input->post('email')){
            $user = $this->login_model->getUser($this->input->post('email'), $this->input->post('password'));
            //print_r($user);
            if($user){
                foreach($user as $data){
                    $userData = $data;
                }
                $this->session->set_userdata("user",$userData);
                redirect('/', 'refresh');
            }
            else{
                $data['error']="Wrong Username Or Password";
            }
        }
		$this->load->view('login',$data);
	}
    
}
