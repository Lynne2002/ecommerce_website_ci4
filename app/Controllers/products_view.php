<?php
 
namespace App\Controllers;
use App\Models\Products;
 
 
class products_view extends BaseController {
 
 
    
private $db;


public function __construct()
{
  $this->db = db_connect();
}
public function index(){
   $builder = $this->db->table("tbl_subcategories as subcategories");
 $builder->select('categories.category_name');
 $builder->select('subcategories.subcategory_name');
 $builder->select(' tbl_product.product_name, tbl_product.product_description, tbl_product.product_image, tbl_product.unit_price, tbl_product.product_id');
  
   $builder->join('tbl_categories as categories', 'categories.category_id = subcategories.category');
   $builder->join('tbl_product', 'tbl_product.subcategory_id=subcategories.subcategory_id', 'left');
   $data['products'] = $builder->get()->getResult();


   return view('products_view', $data);
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