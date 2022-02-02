<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class apiusersController extends ResourceController{
    protected $modelName= 'App\Models\UserModel';
    protected $format = 'json';
    public function index(){
       $users = $this->model->findAll();
        return $this->respond($users);
    }


    public function show($id= null){
        $data = $this->model->find($id);
        return $this->respond($data);
    }
    
    
    public function __construct()
{
  $this->db = db_connect();
}

  
    public function gender($gender=null){
        $builder = $this->db->table("tbl_users as users");
        $builder->select("*");
        $builder->where('gender',$gender);
        $query =  $builder->get();
        echo "<pre>";
		print_r($query->getResult());

    }
    public function date($created_at=null){
       


        $builder = $this->db->table("tbl_order as orders");
		$builder->select('orders.created_at');
        $builder->select('users.first_name, users.last_name');
        $builder->where('created_at',$created_at);

        $builder->join('tbl_users as users', 'users.id = orders.customer_id');
		$builder->orderBy('created_at', 'DESC');
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());

    }
    
    public function purchase($product_id=null){
        $builder = $this->db->table("tbl_order as orders");
        $builder->select('users.last_name, users.first_name');
        $builder->select('orderdetails.product_id');
        $builder->where('product_id',$product_id);
        
        

        $builder->join('tbl_users as users', 'users.id = orders.customer_id');
        $builder->join('tbl_orderdetails as orderdetails', 'orderdetails.order_id = orders.order_id');
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());


    }

     
    public function purchaseDate($created_at=null){
        $builder = $this->db->table("tbl_order as orders");
        $builder->select('users.*');
        $builder->where('created_at',$created_at);
        
        

        $builder->join('tbl_users as users', 'users.id = orders.customer_id');
       
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());


    }
    
    public function login($login_time=null){
        $builder = $this->db->table("tbl_userlogins as userlogins");
        $builder->select('users.first_name, users.last_name');
        $builder->select('userlogins.login_time');
        $builder->where('login_time',$login_time);


        $builder->join('tbl_users as users', 'users.id = userlogins.user_id');
		$query = $builder->get();

		echo "<pre>";
		print_r($query->getResult());
    }
    public function age($age=null){
        $builder = $this->db->table("tbl_users as users");
        $builder->select("*");
        $builder->where('age',$age);
        $query =  $builder->get();
        echo "<pre>";
		print_r($query->getResult());

    }
    
}