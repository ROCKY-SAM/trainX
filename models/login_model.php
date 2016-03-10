<?php

class Login_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function run()
	{
		$sth = $this->db->prepare("SELECT * FROM users WHERE 
				login = :login AND password = :password");
		$sth->execute(array(
			':login' => $_POST['login'],
			':password' => $_POST['password']
		));
		
		$data = $sth->fetch();
		
		$count =  $sth->rowCount();
		if ($count > 0) {
			// login
			Session::init();
			Session::set('role', $data['role']);
			Session::set('fname', $data['fname']);
			Session::set('lname', $data['lname']);
			Session::set('idNumber', $data['idNumber']);
			Session::set('image', $data['image']);
			Session::set('headercolor', $data['headercolor']);
			Session::set('sidecolor', $data['sidecolor']);
			Session::set('login', $data['login']);
			Session::set('password', $data['password']);
			Session::set('loggedIn', true);
			header('location: ../dashboard');
		} else {
			header('location: ../login');
		}
		
	}
	
}