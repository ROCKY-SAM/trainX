<?php

class ProfileManage extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('profileManage/index');
    }

    function messagepage() {
        $this->view->render('profileManage/messagepage');
    }

    function pages() {
        $this->view->render('profileManage/pages');
    }

    function adminUsers() {
        $this->view->render('profileManage/adminUsers');
    }

    function adminUsersEdit() {
        $this->view->render('profileManage/adminUsersEdit');
    }

    function adminUsersAdd() {
        $this->view->render('profileManage/adminUsersAdd');
    }

    public function color_update() {

        $sidebarcolor = $_POST['sidebarcolor'];
        $headerbarcolor = $_POST['headerbarcolor'];
        $idnum = $_POST['idnum'];

        $colourUpdate = new ProfileManage_model();
        $colourUpdate->update_procolor($sidebarcolor, $headerbarcolor, $idnum);
    }

    public function profile_update() {

        $userprofile = $_POST['userprofile'];
        $username = $_POST['username'];
        $idnum = $_POST['idnum'];
        $userpassword = $_POST['userpassword'];


        $proUpdate = new ProfileManage_model();
        $proUpdate->update_profile($userprofile, $username, $idnum, $userpassword);
    }

    public function users_list() {
        $model = new ProfileManage_model();
        echo json_encode($model->select_all_users());
    }

    public function delete_employees() {

        $empid = $_POST['idValue'];
        $model = new ProfileManage_model();
        $delete = $model->delete_employee($empid);
    }

    public function updateEmployees() {


        $idnumber = $_POST['idnumber'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];


        $sendtomodel = new ProfileManage_model();
        $sendtomodel->update_employees($idnumber, $fname, $lname, $role, $email, $phoneNumber);
    }

    public function insertEmployees() {

        $code = $_POST['managercode'];
        $fname = $_POST['fnameManager'];
        $lname = $_POST['lnameManager'];
        $mpnumber = $_POST['mpnumber'];
        $emails = $_POST['emails'];
        $emptyp = $_POST['idDetails'];
        $user = $_POST['useriddone'];
        $password = $_POST['userpassworddone'];
        $image = $_POST['uploadphotos'];


        $sendtomodel = new ProfileManage_model();
        $sendtomodel->add_employees($code, $fname, $lname, $mpnumber, $emails, $emptyp, $user, $password, $image);
    }

    //customer part
    function customerPage() {
        $this->view->render('profileManage/customerPage');
    }

    public function customer_list() {
        $model = new ProfileManage_model();
        echo json_encode($model->select_all_customers());
    }

    public function message_senderlist() {
        $model = new ProfileManage_model();
        echo json_encode($model->select_all_usermessage());
    }

	
    public function sendEmailCustomer() {

        $messagesender = $_POST['recipient-name'];
        $messagerecever = $_POST['recipient'];
        $messageTexta = $_POST['message-text'];
        $messagetimea = $_POST['time'];
        $messagename = $_POST['name'];		
// $messagesenderId, $messagereceverId, $messageText, $messagetime;
        $messagecustomer = new ProfileManage_model();
        $messagecustomer->addNewMesseageCus($messagesender, $messagerecever, $messageTexta, $messagetimea,$messagename);
    }	
	
    public function insertMessagephp() {

        $messagesenderId = $_POST['senderid'];
        $messagereceverId = $_POST['receverid'];
        $messageText = $_POST['textofmessage'];
        $messagetime = $_POST['time'];

        $messagephp = new ProfileManage_model();
        $messagephp->addNewMesseagephp($messagesenderId, $messagereceverId, $messageText, $messagetime);
    }

    //android manager
    public function insertMessageAndroid() {

        $messageId = $_GET['id'];
        $messageText = $_GET['textofmessage'];
        $messagetime = $_GET['time'];

        $messageAndroid = new ProfileManage_model();
        $messageAndroid->addNewMesseage($messageId, $messageText, $messagetime);
    }

    public function message_list() {
        $model = new ProfileManage_model();
        echo json_encode($model->select_all_message());
    }

}
