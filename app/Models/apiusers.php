<?php namespace App\Models;
use CodeIgniter\Model;

class apiusers extends Model{
    protected $table= 'tbl_users';
    protected $primaryKey= "id";
    protected $allowedFields=['first_name', 'last_name', 'email', 'gender'];
}