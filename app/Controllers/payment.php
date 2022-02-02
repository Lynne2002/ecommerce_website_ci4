<?php
 
namespace App\Controllers;
use App\Models\paymentModel;
 
 
class payment extends BaseController {
 
 
    public function index() {
        
        $data = [];

	
		echo view('payment');
    }
    
    public function store(){
       $payment = new paymentModel();
       
       $data=[
        'name'=>$this->request->getPost('name'),
        'card_number'=>$this->request->getPost('card_number'),
        'date'=>$this->request->getPost('date'),
        'CVC_no'=>$this->request->getPost('CVC_no'),
      
        
       
       ];
      
       $payment->save($data);
       
       return redirect()->to('receipt')->with('status','Payment successful');


    }
}
