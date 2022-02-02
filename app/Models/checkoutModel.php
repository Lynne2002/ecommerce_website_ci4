<?php namespace App\Models;

use CodeIgniter\Model;

class checkoutModel extends Model{
  protected $table = 'tbl_paymenttypes';
  protected $primaryKey="paymenttype_id";
  protected $allowedFields = ['payment_type']; 




  
}