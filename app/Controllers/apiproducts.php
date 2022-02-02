<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class apiproducts extends ResourceController{
    protected $modelName= 'App\Models\Products';
    protected $format = 'json';
    public function index(){
      $products = $this->model->findAll();
        return $this->respond($products);
    }


    public function show($product_id= null){
        $data = $this->model->find($product_id);
        return $this->respond($data);
    }
    
    
    public function __construct()
{
  $this->db = db_connect();
}

  
    
    public function subcategory($subcategory_name=null){
       


        $builder = $this->db->table("tbl_product as products");
        $builder->select('subcategory.subcategory_name');
		$builder->select('products.*');
       
        $builder->where('subcategory_name',$subcategory_name);

        $builder->join('tbl_subcategories as subcategory', 'products.subcategory_id = subcategory.subcategory_id');
		
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());

    }
    
    public function users($first_name=null){
        $builder = $this->db->table("tbl_users as users");
        $builder->select('users.last_name, users.first_name');
        $builder->select('products.*');
        $builder->where('first_name',$first_name);
        
        

        $builder->join('tbl_product as products', 'users.id = products.added_by');
       
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());


    }
    public function productname($product_name=null){
       


        $builder = $this->db->table("tbl_product as products");
		$builder->select('products.*');
       
        $builder->where('product_name',$product_name);

		
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());

    }

     
    
    
}