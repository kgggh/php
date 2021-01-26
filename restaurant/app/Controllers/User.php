<?php namespace App\Controllers;

use App\Models\UserModel;
class User extends BaseController
{

	//로그인
	public function index()
	{
		$data = [];
		helper(['form']);

		//유효성검사
		if($this->request->getMethod() == 'post'){
			$rules = [
				'userId' => 'required|min_length[5]|max_length[12]',
				'password' => 'required|min_length[8]|max_length[255]|validateUser[userId,password]',
			];

			$errors = [
				'password'=>[
					'validateUser' => '아이디 또는 패스워드를 확인해주세요.'
				]
			];


			if(! $this->validate($rules)){
				$data['validation']=$this->validator;
			}else{
				$model = new UserModel();

				//세션저장
				$user = $model ->where('userId', $this->request->getVar('userId'))
						->first();
				
				$this -> setUserSession($user);
				return redirect()->to('store_list');

			}
		}
		echo view('templates/header',$data);
		echo view('login');
	}

	//로그인시 세션저장
	private function setUserSession($user){
		$data = [
			'user_num' => $user['user_num'],
			'userId' => $user['userId'],
			'classification' => $user['classification'],
			'name' => $user['name'],
			'email' => $user['email'],
			'isLoggedIn' => true,
		];

		session()->set($data);
		return true;
	}

	//회원가입
	public function register()
	{
		$data = [];
		helper(['form']);

		//유효성 검사
		if($this->request->getMethod() == 'post'){
			$rules = [
				'userId' => 'required|min_length[5]|max_length[12]',
				'name' => 'required|min_length[3]|max_length[20]',
				'password' => 'required|min_length[8]|max_length[255]',
				'password_confirm' => 'matches[password]',
			];

			if(! $this->validate($rules)){
				$data['validation']=$this->validator;
			}else{
				$model = new UserModel();
				$model->insert($_POST);
				return redirect()->to('/');

			}
		}
		echo view('templates/header',$data);
		echo view('register');
	}


	//유저 정보수정
	public function profile(){
		$data = [];
		helper(['form']);
		$model = new UserModel();

		if($this->request->getMethod() == 'post'){
			$rules = [
				'name' => 'required|min_length[3]|max_length[20]',
			];

			if($this ->request->getPost('password') !=''){
				$rules['password'] = 'required|min_length[8]|max_length[255]';
				$rules['password_confirm'] = 'matches[password]';
			}

			if(! $this->validate($rules)){
				$data['validation']=$this->validator;
			}else{

				$newData = [
					'user_num' => session()-> get('user_num'),
					'email' => session()-> get('email'),
					'userId' => session()-> get('userId'),
					'name' => $this -> request->getPost('name'),
					'classification' => $this -> request->getPost('classification'),
				];
				
				if($this->request->getPost('password') !=''){
					$newData['password'] = $this->request->getPost('password');
				}
				$model-> save($newData);
				return redirect()->to('store_list');

			}
		}
		$data['user'] =$model->where('user_num',session()->get('user_num'))->first();
		echo view('templates/header',$data);
		echo view('profile');
	}
	
	//로그아웃
	public function logout(){
		session()->destroy();
		return redirect()->to('/');
	}




}
