<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UsersModel;
class RegisterUsers extends BaseController
{
	private $userModel=NULL;
	function __construct(){
		$this->userModel = new UsersModel();
	}
	public function index()
	{
		return view('welcome_message');
	}
	public function register()
	{
		return view('register');
	}
	public function login()
	{
		return view('login');
	}
	public function userRegister()
	{
		/*print_r($this->request->getFiles());
		print_r($this->request->getPost());die;*/
		$img='';
		$files=$this->request->getFile('profile_img');
		if(!$files->isValid()){
			session()->setFlashData("Error", "Profile Image is Required");
			return redirect()->back()->withInput();
		}
		if(!$this->userModel->isValidFileType($files->getMimeType())){
			session()->setFlashData("Error", "Please Upload a Valid Image File Type");
			return redirect()->back()->withInput();
		}
		$file=$files->move('public/uploads/user/', $files->getClientName());
		if($files->hasMoved()){
			$img=$files->getName();
		}else{
			session()->setFlashData("Error", "Profile Image Fialed to Upload");
			return redirect()->back()->withInput();
		}
		//echo $img;
		$data=[
			'name'=>$this->request->getPost('name'),
			'email'=>$this->request->getPost('email'),
			'contact'=>$this->request->getPost('contact'),
			'profile_img'=>$img,
			'password'=>$this->request->getPost('password'),
			'confirm_password'=>$this->request->getPost('confirm_password')
		];
		if(!$this->userModel->insert($data)){
			session()->setFlashData("Error", " Fialed to Register");
			session()->setFlashData("ErrorData", $this->userModel->errors());
			return redirect()->back()->withInput();
		}

		session()->setFlashData("Success", "User Register Successful");
		return redirect()->to(base_url()."/login");
	}

	function userLogin(){
		//print_r($this->request->getPost());die;
		$find=$this->userModel->getWhere(['email'=>$this->request->getPost('email')])->getRowArray();
		if(!$find){
			session()->setFlashData("Error", "Please Enter a Valid Email Id");
			session()->setFlashData("ErrorData", $this->userModel->errors());
			return redirect()->back()->withInput();
		}
		if(!password_verify($this->request->getPost('password'), $find['password'])){
			session()->setFlashData("Error", "Please Enter a Valid Password");
			session()->setFlashData("ErrorData", $this->userModel->errors());
			return redirect()->back()->withInput();
		}
		session()->set("LoggedUserData", $find);
		session()->setFlashData("Success", "Login Successful ");
		return redirect()->to(base_url()."/profile");
	}
	public function profile()
	{
		return view('profile');
	}
	public function logout()
	{
		if(session()->get('LoggedUserData')){
			session()->remove('LoggedUserData');
			session()->setFlashData("Success", "Logout Successful ");
			return redirect()->to(base_url()."/login");
		}
		session()->setFlashData("Error", "Failed to Logout, Please Try Again");
		return redirect()->to(base_url()."/profile");
	}
	public function updateprofile()
	{
		return view('profileupdate');
	}
	public function profileupdate()
	{
		/*print_r($this->request->getPost());
		print_r($this->request->getFile('profile_img'));die;*/
		$img='';
		$files=$this->request->getFile('profile_img');
		$data=[];
		if(!$files->isValid()){
			//it means you don't want to change your profile photo/Image.
			$data=[
				'name'=>$this->request->getPost('name'),
				'contact'=>$this->request->getPost('contact')
			];
		}else{
			//if you want to change your profile photo also.
			if(!$this->userModel->isValidFileType($files->getMimeType())){
				session()->setFlashData("Error", "Please Upload a Valid Image File Type");
				return redirect()->back()->withInput();
			}
			$file=$files->move('public/uploads/user/', $files->getClientName());
			if($files->hasMoved()){
				$img=$files->getName();
			}
			$data=[
				'name'=>$this->request->getPost('name'),
				'contact'=>$this->request->getPost('contact'),
				'profile_img'=>$img
			];
		}
		if(!$this->userModel->update(session()->get('LoggedUserData')['id'], $data)){
			session()->setFlashData("Error", "Failed to Update Your Profile.");
			session()->setFlashData("ErrorData", $this->userModel->errors());
			return redirect()->back()->withInput();
		}
		$find=$this->userModel->getWhere(['id'=>session()->get('LoggedUserData')['id']])->getRowArray();
		session()->remove('LoggedUserData');
		session()->set('LoggedUserData', $find);
		session()->setFlashData("Success", "Profile Update Successful ");
		return redirect()->to(base_url()."/profile");
	}
	public function changepassword()
	{
		return view('changepasssword');
	}
	public function updatepassword()
	{
		//print_r($this->request->getPost());die;
		if(password_verify($this->request->getPost('oldpassword'), session()->get('LoggedUserData')['password'])){
			if($this->request->getPost('password')===$this->request->getPost('confirm_password')){
				if(!$this->userModel->update(session()->get('LoggedUserData')['id'], ['password'=>password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)])){
					return redirect()->back()->with("Error", "Failed to Change Password, Please Try Again");
				}
				$find=$this->userModel->getWhere(['id'=>session()->get('LoggedUserData')['id']])->getRowArray();
				session()->remove('LoggedUserData');
				session()->set('LoggedUserData', $find);
				session()->setFlashData("Success", "Password Update Successful ");
				return redirect()->to(base_url()."/profile");
			}
			return redirect()->back()->with("Error", "Confirm Password is not Matched, Please Try Again");
		}
		return redirect()->back()->with("Error", "Old Password is not Matched, Please Try Again");
	}
	public function deleteAccount()
	{
		if(!$this->userModel->delete(session()->get('LoggedUserData')['id'])){
			return redirect()->back()->with("Error", "Failed to delete Account, Please Try Again");
		}
		session()->remove('LoggedUserData');
		session()->setFlashData("Success", "Account Delete Successful ");
		return redirect()->to(base_url()."/");
	}
}