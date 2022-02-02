<?php namespace App\Models;
use CodeIgniter\Model;

class apiproducts extends Model{
    protected $table= 'tbl_apiproducts';
    protected $primaryKey= "apiproduct_id";
    protected $allowedFields=['productname', 'product_image'];
}