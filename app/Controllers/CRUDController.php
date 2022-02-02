<?php namespace App\Controllers;

use App\Models\UserModel;

class CRUDController extends BaseController
{
	public function index()
	{
		$users=  new UserModel();
        $data['users']=$users->findAll();

	
		echo view('admin/index.php', $data);
		
	}
	public function create(){
		return view('admin/create');
	}


public function store(){
	$users= new UserModel();
	$data=[
		'first_name'=>$this->request->getPost('first_name'),
		'last_name'=>$this->request->getPost('last_name'),
		'email'=>$this->request->getPost('email'),
		'gender'=>$this->request->getPost('gender'),
		'password'=>$this->request->getPost('password'),
		'role'=>$this->request->getPost('role'),
		
	];
	$users->save($data);
	return redirect()->to(base_url('admin'))->with('status', 'User Added Successfully');
}
public function edit($id){
	$users = new UserModel();
	$data['users']=$users->find($id);
	return view('admin/edit', $data);

}
public function update($id){
	$users = new UserModel();
	$users->find($id);
	$data=[
		'first_name'=>$this->request->getPost('first_name'),
		'last_name'=>$this->request->getPost('last_name'),
		'email'=>$this->request->getPost('email'),
		'gender'=>$this->request->getPost('gender'),
		'password'=>$this->request->getPost('password'),
		'role'=>$this->request->getPost('role'),
		
	];
	$users->update($id, $data);
	return redirect()->to(base_url('admin'))->with('status', 'User updated Successfully');
}
public function delete($id)
{
	$users= new UserModel();
	$users->delete($id);
	return redirect()->to(base_url('admin'))->with('status', 'User deleted Successfully');
}
}
?>