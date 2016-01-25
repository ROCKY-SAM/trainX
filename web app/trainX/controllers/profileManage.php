<?php

class ProfileManage extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{	
		$this->view->render('profileManage/index');
	}
	
	function pages() 
	{	
		$this->view->render('profileManage/pages');
	}
	
	function adminUsers() 
	{	
		$this->view->render('profileManage/adminUsers');
	}

}