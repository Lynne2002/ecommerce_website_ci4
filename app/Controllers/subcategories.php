<?php
 
 namespace App\Controllers;
 use App\Models\subcategoriesModel;
 use App\Models\CategoriesModel;
  

class subcategories extends BaseController {
 
 
    public function index() {
         
        $subcategories = new subcategoriesModel();
        $data['subcategories'] =$subcategories->findAll();

        return view('subcategories/index', $data);
    }
    public function add($id){
        $categories = new CategoriesModel();
        $data['category']=$categories->find($id);
        
       
        return view('subcategories/create', $data);
    }
    public function store(){
     $subcategories = new subcategoriesModel();
       
       $data=[
        
        
        'subcategory_name'=>$this->request->getPost('subcategory_name'),
        'category'=>$this->request->getPost('category'),
        
      
        


       
       ];
     $subcategories->save($data);
       return redirect()->to('/subcategories')->with('status','Sub-Category added successfully');


    }
    public function edit($id){
     $subcategories = new subcategoriesModel();
        $data['subcategory']=$subcategories->find($id);
        return view('subcategories/edit', $data);
    
    }
    public function update($id){
     $subcategories = new subcategoriesModel();
       $subcat_item=$subcategories->find($id);
       
        $data=[
            'subcategory_name'=>$this->request->getPost('subcategory_name'),
            'category'=>$this->request->getPost('category'),
       
            
        ];
     $subcategories->update($id, $data);
        return redirect()->to(base_url('/subcategories'))->with('status', 'Sub Category updated Successfully');
    }
    public function delete($id)
{
	$subcategories= new subcategoriesModel();

    $data=$subcategories->find($id);
    

	$subcategories->delete($id);
	return redirect()->to(base_url('/subcategories'))->with('status', 'Sub-Category added Successfully');
}

}