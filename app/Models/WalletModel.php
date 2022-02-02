<?php namespace App\Models;

use CodeIgniter\Model;

class WalletModel extends Model{
  protected $table = 'tbl_wallet';
  protected $primaryKey="wallet_id";
  protected $allowedFields = [
      'amount_available', 
      'customer_id',
      ];
  
  }
  ?>