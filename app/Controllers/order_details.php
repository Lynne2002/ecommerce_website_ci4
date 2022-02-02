<?php

namespace App\Controllers;
use App\Models\OrderdetailsModel;
use App\Models\OrdersModel;
use App\Controllers\checkout;
class order_details extends BaseController
{
    
   public function index(){
    
    $orders = new OrdersModel();
    $data['orders'] =$orders->findAll();
    
    return view('ordersuccess', $data);

   }
    public function store(){
      
          $orders = new OrdersModel();
    $data['orders'] =$orders->findAll();
    
       
        $order_details = new OrderdetailsModel();
        
        $data=[
         
         'order_id' =>$this->request->getPost('order_id'),
         	'product_id'=>$this->request->getPost('product_id'),	
             'product_price'=>$this->request->getPost('product_price'),
             	'order_quantity'=>$this->request->getPost('order_quantity'),
                 	'orderdetails_total' =>$this->request->getPost('orderdetails_total'),

       
         
        
        ];
        $order_details->save($data);
        $session=session('order_details');
        session()->set($data);
        return $this->response->redirect(site_url('Wallet'));
 
 
     


    }




}