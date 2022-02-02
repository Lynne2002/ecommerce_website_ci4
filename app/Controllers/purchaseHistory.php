<?php
 
namespace App\Controllers;
use App\Models\Products;
 
 
class purchaseHistory extends BaseController {
 
 
    
private $db;


public function __construct()
{
  $this->db = db_connect();
}
public function index(){
   $builder = $this->db->table("tbl_product as products");


 $builder->select('tbl_subcategories.subcategory_name');
 $builder->select(' products.product_name');
$builder->select('tbl_orderdetails.product_price, tbl_orderdetails.order_quantity, tbl_orderdetails.orderdetails_total');


  
  
   $builder->join('tbl_subcategories', 'tbl_subcategories.subcategory_id=products.subcategory_id', );
   $builder->join('tbl_orderdetails', 'tbl_orderdetails.product_id=products.product_id', );
   $data['products'] = $builder->get()->getResult();


   return view('purchaseHistory', $data);
   //$array = json_decode(json_encode($data), true);
  //echo "<pre>";
  
  //print_r($data);

}

public function join()
{

 
 

  echo "<pre>";
  
  //print_r($data);
  //$data['mega_header'][] = (object) array('title' => 'product_image' ,

   // 'product_image' => '/public/uploads' );


 
  $array = json_decode(json_encode($data), true);



}

public function leftJoinMethod()
{
    //....
}

public function rightJoinMethod()
{
    //....
}
}