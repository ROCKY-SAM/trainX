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
        $inputemail = $_POST['inputEmail'];
        $inputSubject = $_POST['inputSubject'];
        $body = $_POST['body'];
        

        $sendtomodel = new PaymentHandle_model();
        $sendtomodel->sendEmail($inputemail, $inputSubject, $body);
    }

}
