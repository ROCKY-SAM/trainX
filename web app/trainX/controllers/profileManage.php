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
	
	function adminUsersAdd() 
	{	
		$this->view->render('profileManage/adminUsersAdd');
	}
    
	public function color_update() {

        $sidebarcolor = $_POST['sidebarcolor'];
        $headerbarcolor = $_POST['headerbarcolor'];
       $idnum = $_POST['idnum'];

    $colourUpdate = new ProfileManage_model();
    $colourUpdate->update_procolor($sidebarcolor,$headerbarcolor,$idnum);  
    
    }	
	
	    public function profile_update() {
			
$userprofile = $_POST['userprofile'];
$username = $_POST['username'];
$idnum = $_POST['idnum'];
$userpassword = $_POST['userpassword'];


    $proUpdate = new ProfileManage_model();
    $proUpdate->update_profile($userprofile,$username,$idnum,$userpassword);  
    
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
 
 echo $idnumber,$fname,$lname,$role,$email,$phoneNumber;
        $idnumber = $_POST['idnumber'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        
        
           $sendtomodel=new ProfileManage_model();
           $sendtomodel->update_employees($idnumber,$fname,$lname,$role,$email,$phoneNumber);
    }
}