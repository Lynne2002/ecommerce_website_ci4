<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Products;

class Cart extends BaseController
{
    public function index()
    {
        $data['items']=array_values(session('cart'));
        $data['total']= $this->total();
        return view('cart/index', $data);
    }
    public function buy($value){
        $productModel = new Products();
        $product= $productModel->find($value);
        $item=array(
            'product_id'=>$product['product_id'],
            'product_name'=>$product['product_name'], 
      
       'unit_price'=>$product['unit_price'],
       'product_image'=>$product['product_image'],
       'quantity'=>1
        

        );
        $session =  session();
        if($session->has('cart')){
            $index = $this->exists($value);
            $cart=array_values(session('cart'));
            if($index==-1){
                array_push($cart, $item);
               
            }
            else{
                $cart[$index]['quantity']++;
              
            }
            $session->set('cart', $cart);

        }
       else{
           $cart = array($item);
           $session->set('cart', $cart);
       }
        return $this->response->redirect(site_url('cart/index'));
    }
    public function remove($value){
        $index = $this->exists($value);
        $cart=array_values(session('cart'));
        unset($cart[$index]);
        $session =session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('cart/index'));
    }
    public function update(){
        $cart=array_values(session('cart'));
        for($i=0;  $i<count($cart);  $i++){
            $cart[$i]['quantity']=$_POST['quantity'][$i];
        }
        $session =session();
        $session->set('cart', $cart);
        return $this->response->redirect(site_url('cart/index'));


    }

    private function exists($value){
        $items=array_values(session('cart'));
        for($i=0;  $i<count($items);  $i++){
            if($items[$i]['product_id']==$value){
                return $i;
            }
        }
        return -1;
    }
    private function total(){
        $s=0;
        $items=array_values(session('cart'));
       foreach($items as $item){
                 $s += $item['unit_price'] * $item['quantity'];
            
        }
        return $s;
    }
   
    
    
}