<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class apitransactions extends ResourceController{
    protected $modelName= 'App\Models\OrderDetailsModel';
    protected $format = 'json';
    public function index(){
      $orderdetails = $this->model->findAll();
        return $this->respond($orderdetails);
    }


    public function show($product_id= null){
        $data = $this->model->find($product_id);
        return $this->respond($data);
    }
    
    
    public function __construct()
{
  $this->db = db_connect();
}

  
    
    public function product($product_name=null){
       


        $builder = $this->db->table("tbl_product as products");
        $builder->select('products.product_name');
        $builder->select('orderdetails.*');
		
       
        $builder->where('product_name',$product_name);

        $builder->join('tbl_orderdetails as orderdetails', 'products.product_id =orderdetails.product_id');
		
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());

    }
    
    public function daterange($created_at=null){
        $builder = $this->db->table("tbl_orderdetails as orderdetails");
        $builder->select('orderdetails.*');
        $builder->where('created_at',$created_at);
        
        

       
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());


    }
    

     
    
    
}