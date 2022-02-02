<?php namespace App\Models;

use CodeIgniter\Model;


class paymentModel extends Model{
    protected $table = 'tbl_payments';
    protected $primaryKey="payment_id";
protected $allowedFields = [
  
        'name',
   'card_number',
   'date',
   'CVC_no'
     ];

   
}