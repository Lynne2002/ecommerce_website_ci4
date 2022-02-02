<?php namespace App\Controllers;

use App\Models\UserModel;


class Users extends BaseController

{

	
	public function index()
	{
		$data = [];
		helper(['form']);


		if ($this->request->getMethod() == 'post') {
			
			$rules = [
				'email' => 'required|min_length[6]|max_length[50]|valid_email',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
			];

			$errors = [
				'password' => [
					'validateUser' => 'Email or Password don\'t match'
				]
			];

			if (! $this->validate($rules, $errors)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$user = $model->where('email', $this->request->getVar('email'))
											->first();

				$this->setUserSession($user);
				
				
				
				if($user['role']==1){
					return redirect()->to('admin');
				}
				else{
				return redirect()->to('dashboard');
				}
			
		}

}
	echo view('login');
}
private function setUserSession($user){
	$data = [
		'id' => $user['id'],
		'first_name' => $user['first_name'],
		'last_name' => $user['last_name'],
		'email' => $user['email'],
		'role'=>$user['role'],
		'isLoggedIn' => true,
	];

	session()->set($data);
	return true;
}
	

	public function register(){
		$data = [];
		helper(['form']);

		if ($this->request->getMethod() == 'post') {
			
			$rules = [
				'first_name' => 'required|min_length[3]|max_length[20]',
				'last_name' => 'required|min_length[3]|max_length[20]',
				'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbl_users.email]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_2' => 'matches[password]',
			];

			if (! $this->validate($rules)) {
				$data['validation'] = $this->validator;
			}else{
				$model = new UserModel();

				$newData = [
					'first_name' => $this->request->getVar('first_name'),
					'last_name' => $this->request->getVar('last_name'),
					'email' => $this->request->getVar('email'),
					'password' => $this->request->getVar('password'),
					
				];
				$model->save($newData);
				$session = session();
				$session->setFlashdata('success', 'Successful Registration');
				return redirect()->to('register');

			}
		}


		
		echo view('register');
	

	}

	

	public function logout(){
		session()->destroy();
		return redirect()->to('/logoutSuccess');
	}
}

	




