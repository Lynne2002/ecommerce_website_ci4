<?php namespace App\Models;

use CodeIgniter\Model;


class OrdersModel extends Model{
    protected $table = 'tbl_order';
    protected $primaryKey="order_id";
protected $allowedFields = [
  
        'customer_id',
   'total',
   'payment_type',
     ];

   
}