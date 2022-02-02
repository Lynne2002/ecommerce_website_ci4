<?php namespace App\Models;

use CodeIgniter\Model;

class subcategoriesModel extends Model{
  protected $table = 'tbl_subcategories';
  protected $primaryKey="subcategory_id";
  protected $allowedFields = ['subcategory_name','category'];
 




  
}