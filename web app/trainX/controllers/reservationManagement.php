<?php

class ReservationManagement extends Controller {

	function __construct() {
		parent::__construct();	
	}
        
        function index() 
	{	
		$this->view->render('reservationManagement/index');
	}
        
         function emergency() 
	{	
		$this->view->render('reservationManagement/emergency');
	}
        
         function seat() 
	{	
		$this->view->render('reservationManagement/seat');
	}
        
         function seatRes() 
	{	
		$this->view->render('reservationManagement/seatRes');
	}
        
          function test1() 
	{	
		$this->view->render('reservationManagement/test');
	}
}