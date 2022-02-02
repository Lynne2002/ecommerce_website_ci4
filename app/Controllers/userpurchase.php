<?php
 
namespace App\Controllers;
use App\Models\Products;
 
 
class userpurchase extends BaseController {
 
 
    
private $db;


public function __construct()
{
  $this->db = db_connect();
}
public function index(){
    return view('userpurchase');

}
}