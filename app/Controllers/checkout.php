<?php namespace App\Controllers;
use App\Models\OrdersModel;
use App\Models\checkoutModel;
use App\Controllers\payment_types;



class checkout extends BaseController{
    

    
    public function index(){
        $payment = new checkoutModel();
        $data['payment'] =$payment->findAll();
       
       

        return view('cart/checkout', $data);

    }
    public function store(){
        $orders = new OrdersModel();
        
        $data=[
         'order_id'=>$this->request->getPost('order_id'),
        'payment_type'=>$this->request->getPost('payment_type'),
         'customer_id'=>$this->request->getPost('customer_id'),
         'total'=>$this->request->getPost('total'),

       
         
        
        ];
        $session=session('orders');
        session()->set($data);

        $orders->save($data);
       
        //echo $test;
       

      
        return $this->response->redirect(site_url('order_details/index'));
 
 
     }
     
     

    }
    
