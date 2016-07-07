<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

	public function index()
	{
        if($this->session->userdata('user'))
            $this->load->view('app');
        else
            redirect('login', 'refresh');
	}
}
