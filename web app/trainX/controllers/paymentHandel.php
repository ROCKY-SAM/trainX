<?php

class PaymentHandel extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('paymentHandel/index');
    }

    function payment_report() {
        $this->view->render('paymentHandel/reports');
    }

    function paymentEmails() {
        $this->view->render('paymentHandel/paymentEmails');
    }

    function alertoffers() {
        $this->view->render('paymentHandel/alertoffers');
    }

    public function sendEmails() {
        $inputemail = $_POST['inputEmaill'];
        $inputSubject = $_POST['inputSubjectl'];
        $body = $_POST['bodyl'];
       
        $sendtomodel = new PaymentHandel_model();
        $sendtomodel->sendEmail($inputemail, $inputSubject, $body);
    }
    
    function customEmail() {
        $this->view->render('paymentHandel/customEmails');
    }
    
    public function customEmails() {
        //$inputemail = $_POST['kavi.oshan8@gmail.com'];
               
       
        $sendtomodel = new PaymentHandel_model();
        $sendtomodel->customEmails();
    }
    

}
