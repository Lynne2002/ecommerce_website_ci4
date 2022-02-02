<?php namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
class apiproductsController extends ResourceController{
    protected $modelName= 'App\Models\apiproducts';
    protected $format = 'json';
    public function index(){
        $products = $this->model->findAll();
        return $this->respond($products);
    }
    public function create(){
        helper(['form']);
        $rules=[
            'productname'=>'required',
          'product_image' =>'uploaded[product_image]|max_size[product_image, 4000]|is_image[product_image]'
        ];
        if(!$this->validate($rules)){
            return $this->fail($this->validator->getErrors());
        }else{
            $file = $this->request->getFile('product_image');
            if(!$file->isValid())
            return $this->fail($file->getErrorString());
            $file->move('uploads/');
            $data=[
                'productname' => $this->request->getVar('productname'),
                'product_image' => $file->getName()
            ];
            $product_id = $this->model->insert($data);
            $data['product_id']= $product_id;
            return $this->respondCreated($data);

        }
    }
    public function show($apiproduct_id= null){
        $data = $this->model->find($apiproduct_id);
        return $this->respond($data);
    }
    public function update($apiproduct_id = null){
        helper(['form', 'array']);
        $rules=[
            'productname'=>'required',
        
        ];

        $fileName = dot_array_search('product_image', $_FILES);
        if($fileName != ''){
            $img = ['product_image'=>'uploaded[product_image]|max_size[product_image, 4000]|is_image[product_image]'];
            $rules = array_merge($rules, $img);
        }






        if(!$this->validate($rules)){
            return $this->fail($this->validator->getErrors());
        }else{
            //$input =$this->request->getRawInput();





            $data=[
                'apiproduct_id'=>$apiproduct_id,
                'productname' =>$this->request->getVar('productname'),
                


            ];
            if($fileName != ''){
                $file = $this->request->getFile('product_image');
            if(!$file->isValid())
            return $this->fail($file->getErrorString());
            $file->move('uploads/');
            $data['product_image'] = $file->getName();

            }
            $this->model->save($data);
            return $this->respond($data);
        }
    }
    public function delete($apiproduct_id= null){
        $data = $this->model->find($apiproduct_id);
        if($data){
            $this->model->delete($apiproduct_id);
            return $this->respondDeleted($data);
        }else{
            return $this->failNotFound('Item not found');
        }
    }

    
}