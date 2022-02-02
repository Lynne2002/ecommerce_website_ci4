<?php namespace App\Models;

use CodeIgniter\Model;

class Products extends Model{
  protected $table = 'tbl_product';
  protected $primaryKey="product_id";
  protected $allowedFields = [
      'product_name', 
      'product_description',
       'unit_price',
       'product_image',
       'available_quantity',
       'subcategory_id',
        'added_by',


        
     ];
  
  
 
}
  ?>
