<?php namespace App\Controllers;
use App\Models\payment_typesModel;



class payment_types extends BaseController{
    

    
    public function index(){
        $payment = new payment_typesModel();
        $data['payment'] =$payment->findAll();
       
        return view('payment_types/index', $data);

    }
    public function create(){
        return view('payment_types/create');
        $payment->save($data);
      

    }
    public function store(){
        $payment = new payment_typesModel();
        
        $data=[
         'payment_type'=>$this->request->getPost('payment_type'),
         'description'=>$this->request->getPost('description'),
        
       
         
        
        ];
        $payment->save($data);
        return $this->response->redirect(site_url('payment_types/index'));
 
 
     }
     public function edit($id){
        $payment = new payment_typesModel();
        $data['payment']=$payment->find($id);
        return view('payment_types/edit', $data);
    
    }
    public function update($id){
        $payment = new payment_typesModel();
        $prod_item= $payment->find($id);
        $data=[
            'payment_type'=>$this->request->getPost('payment_type'),
            'description'=>$this->request->getPost('description'),
            
        ];
        $payment->update($id, $data);
        return redirect()->to(base_url('/payment_types'))->with('status', 'Payment updated Successfully');
    }
    public function delete($id)
{
	$payment= new payment_typesModel();

    $data=$payment->find($id);
  

	$payment->delete($id);
	return redirect()->to(base_url('/payment_types'))->with('status', 'Payment deleted Successfully');
}

    }