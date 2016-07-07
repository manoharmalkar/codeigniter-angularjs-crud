<?php 
class Catalog_Model extends CI_Model {
	
    function __construct() { 
     parent::__construct(); 
    } 
    
    function getProducts(){
        $this->db->select('products.*,categories.name as cat_name');
        $this->db->from('products');
        $this->db->join('categories', 'categories.id = products.category','left');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getProductsDetails($id){
        $this->db->select('products.*,categories.name as cat_name');
        $this->db->from('products');
        $this->db->join('categories', 'categories.id = products.category','left');
        $this->db->where('products.id',$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    function getCategories(){
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('status','Activate');
        $query = $this->db->get();
        return $query->result_array();
    }
    function saveProduct($formdata){
        $status = $formdata['status'] ? 1 : 0;
        if(isset($formdata['id'])){
            $this->db->query("update products set name='".$formdata['name']."',price='".$formdata['price']."', url='".$formdata['url']."', category='".$formdata['category']."', status='$status' where id = ".$formdata['id']);
        }
        else{
            $this->db->query("insert into products (id, name, price, url, category, status) values ('', '".$formdata['name']."', '".$formdata['price']."', '".$formdata['url']."', '".$formdata['category']."', '$status')");
        }
    }
    function deleteProduct($id){
        $this->db->where('id',$id);
        $this->db->delete('products');
    }
    
}