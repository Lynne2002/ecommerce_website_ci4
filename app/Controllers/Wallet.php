<?php
 
namespace App\Controllers;
use App\Models\WalletModel;
class Wallet extends BaseController {
 
 
 
    public function index() {
         
        $wallets = new WalletModel();
        $data['wallets'] = $wallets->findAll();

        return view('Wallet/index', $data);
    }
    
    public function store(){
       $wallet = new WalletModel();
       
       $data=[
        'amount_available'=>$this->request->getPost('amount_available'),
        'customer_id'=>$this->request->getPost('customer_id'),
      
        
       
       ];
       $wallet->save($data);
       return redirect()->to ('payment')->with('status','Money added successfully');


    }
 
}