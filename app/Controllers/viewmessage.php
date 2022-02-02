<?php
 
namespace App\Controllers;
use App\Models\contactusModel;
 
 
class viewmessage extends BaseController {
   

 
    public function index() {
         
        $messages = new contactusModel();
        $data['messages'] =$messages->findAll();
       
        return view('viewmessage', $data);
    }
}