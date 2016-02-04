<?php

class PaymentHandel extends Controller {

	function __construct() {
		parent::__construct();	
	}
	
	function index() 
	{	
		$this->view->render('paymentHandel/index');
	}

	
	}