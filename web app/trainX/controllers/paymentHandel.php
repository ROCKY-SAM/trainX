<?php
	header('Access-Control-Allow-Origin: *');
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

    public function view_trains_payment() {
        $model = new PaymentHandel_model();
        echo json_encode($model->view_trains_payment());
    }

    public function view_payments() {
        $model = new PaymentHandel_model();
        echo json_encode($model->select_payment_finals());
    }

    public function emailpayments() {
//        $to = $_POST['customerEmail'];
//        $subject = $_POST['subject'];
//        $txt = $_POST['messagebody'];
//        $txt = wordwrap($txt, 70);
        
        $toemail = $_GET['customerEmail'];
        $tosubject = $_GET['subject'];
        $tomessage = $_GET['messagebody'];
        
        echo $toemail;
        echo $tosubject;
        echo $tomessage;
        
        
        $sendtomodel = new PaymentHandel_model();
        $sendtomodel->SendMailalerts($toemail,$tosubject,$tomessage);
    }
//android
    public function addpayment() {

        $paymentID = $_GET['paymentID'];
        $custID = $_GET['custID'];
        $cusName = $_GET['cusName'];
        $trainID = $_GET['trainID'];
        $reservedTrain = $_GET['reservedTrain'];
        $Depature = $_GET['Depature'];
        $classof = $_GET['classof'];
        $ticketPrice = $_GET['ticketPrice'];
        $paymentDate = $_GET['paymentDate'];
        $TelephoneNumber = $_GET['TelephoneNumber'];
        $customerEmail = $_GET['customerEmail'];


        $sendtomodel = new PaymentHandel_model();
        $sendtomodel->addbooking($paymentID,$custID,$cusName,$trainID,$reservedTrain,$Depature,$classof,$ticketPrice,$paymentDate,$TelephoneNumber,$customerEmail);
		
		        
    }	
}
