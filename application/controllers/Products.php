<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
        $this->load->model("catalog_model");
        $data['products']=$this->catalog_model->getProducts();
        echo json_encode($data);
	}
    public function edit()
	{
        $this->load->helper('form');
        $id = $this->uri->segment(3);
        $this->load->model("catalog_model");
        if($this->session->userdata('user')){
            $product = $this->catalog_model->getProductsDetails($id);
            foreach ($product as $pro){
                $data['products'] = $pro;
            }
            $data['categories'] = $this->catalog_model->getCategories();
            echo json_encode($data);
        }
	}
    public function getCategories()
	{
        $this->load->helper('form');
        $this->load->model("catalog_model");
        $data['categories'] = $this->catalog_model->getCategories();
        echo json_encode($data);
	}
    public function save()
	{
        $this->load->helper('form');
        $this->load->model("catalog_model");
        $json = file_get_contents('php://input'); 
        $formdata = json_decode($json, true);
        $this->catalog_model->saveProduct($formdata);
	}
    public function delete()
	{
        $this->load->model("catalog_model");
        if($this->uri->segment(3)){
            $id = $this->uri->segment(3);
            $this->catalog_model->deleteProduct($id);
            redirect('products', 'refresh');
        }
	}
}
