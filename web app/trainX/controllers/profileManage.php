<?php

class ProfileManage extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{	
		$this->view->render('profileManage/index');
	}
	

	

}