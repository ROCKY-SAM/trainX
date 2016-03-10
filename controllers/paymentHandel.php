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

    function payment_sms() {
        $this->view->render('paymentHandel/SMSNoti');
    }

    function paypal() {
        $this->view->render('paymentHandel/paypal_web');
    }

    function detailspayment() {
        $this->view->render('paymentHandel/detailed_report');
    }

    function graphicalReport() {
        $this->view->render('paymentHandel/graphicalReport');
    }

    function detailed_report() {
        $this->view->render('paymentHandel/reports');
    }

       public function view_Report_detailed() {
        $model = new PaymentHandel_model();
        echo json_encode($model->select_payment_details());
    }
    
      public function view_payments() {
       $model = new PaymentHandel_model();
        echo json_encode($model->select_payment_finals());
    }

      public function RegularAlert() {
        $model = new PaymentHandel_model();
        $sendtomodel = $model->selectAllRegtransactions();
    }
}
