<?php
 
namespace App\Controllers;
use App\Models\CategoriesModel;
 
 
class categories extends BaseController {
   

 
    public function index() {
         
        $categories = new CategoriesModel();
        $data['categories'] =$categories->findAll();
       
        return view('categories/index', $data);
    }
    public function create(){
        return view('categories/create');
        $categories->save($data);
      

    }
    public function store(){
       $categories = new CategoriesModel();
       
       $data=[
        
        
        'category_name'=>$this->request->getPost('category_name'),
        
      
        


       
       ];
      
        
       $categories->save($data);
       $session=session('categories');
       session()->set($data);
       return redirect()->to('/categories')->with('status','Category added successfully');


    }
    public function edit($id){
       $categories = new CategoriesModel();
        $data['category']=$categories->find($id);
        return view('categories/edit', $data);
    
    }
    public function update($id){
       $categories = new CategoriesModel();
       $cat_item=$categories->find($id);
       
        $data=[
            'category_name'=>$this->request->getPost('category_name'),
          
       
            
        ];
       $categories->update($id, $data);
        return redirect()->to(base_url('/categories'))->with('status', 'Category updated Successfully');
    }
    public function delete($id)
{
	$categories= new CategoriesModel();

    $data=$categories->find($id);
    

	$categories->delete($id);
	return redirect()->to(base_url('/categories'))->with('status', 'Category deleted Successfully');
}

}