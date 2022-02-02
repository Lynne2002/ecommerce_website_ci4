<?php
 
namespace App\Controllers;
use App\Models\Products;
use App\Models\subcategoriesModel;
 
 
class ProductController extends BaseController {
 
 
    public function index() {
         
        $products = new Products();
        $data['products'] = $products->findAll();

        return view('products/index', $data);
    }
    public function add($id){
        $subcategories = new subcategoriesModel();
        $data['subcategories']=$subcategories->find($id);
        
       
        return view('products/createProduct', $data);
    }
    public function store(){
       $product = new Products();
       $file= $this->request->getFile('product_image');
       if($file->isValid() && ! $file->hasMoved()){
           $imageName=$file->getRandomName();
           $file->move('uploads/', $imageName);
      

       }
       $data=[
        'product_name'=>$this->request->getPost('product_name'),
        'product_description'=>$this->request->getPost('product_description'),
        'product_image'=>$imageName,
        'unit_price'=>$this->request->getPost('unit_price'),
        'available_quantity'=>$this->request->getPost('available_quantity'),
        'subcategory_id'=>$this->request->getPost('subcategory_id'),
       'added_by'=>$this->request->getPost('added_by'),
       
       
       ];
       $product->save($data);
       return redirect()->to('/products')->with('status','Product added successfully');


    }
    public function edit($id){
        $subcategories = new subcategoriesModel();
        $data['subcategories']=$subcategories->find($id);
        $products = new Products();
        $data['product']=$products->find($id);
        return view('products/edit', $data);
    
    }
    public function update($id){
        $products = new Products();
        $prod_item= $products->find($id);
        $old_img_name = $prod_item['product_image'];

        $file=$this->request->getFile('product_image');
       if($file->isValid()&& !$file->hasMoved()){
           
           if(file_exists("uploads/" .$old_img_name)){
               unlink("uploads/".$old_img_name);
           }
           $imageName=$file->getRandomName();
           $file->move('uploads/', $imageName);
       }
       else{
        $imageName = $old_img_name;
       }
        $data=[
            'product_name'=>$this->request->getPost('product_name'),
        'product_description'=>$this->request->getPost('product_description'),
        'product_image'=>$imageName,
        'unit_price'=>$this->request->getPost('unit_price'),
        'available_quantity'=>$this->request->getPost('available_quantity'),
        'subcategory_id'=>$this->request->getPost('subcategory_id'),
        'added_by'=>$this->request->getPost('added_by'),
            
        ];
        $products->update($id, $data);
        return redirect()->to(base_url('/products'))->with('status', 'Product updated Successfully');
    }
    public function delete($id)
{
	$product= new Products();

    $data=$product->find($id);
    $imagefile=$data['product_image'];
    if(file_exists("uploads/".$imagefile)){
        unlink("uploads/".$imagefile);
    }

	$product->delete($id);
	return redirect()->to(base_url('/products'))->with('status', 'Product deleted Successfully');
}
}
