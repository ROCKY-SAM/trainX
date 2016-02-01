<?php

class ProfileManage_model extends Model {


    function __construct() {
        
        
        parent::__construct();

    }
	
	
	    public function update_procolor($sidebarcolor,$headerbarcolor,$idnum){
		
		$sql = $this->db->prepare("UPDATE users SET sidecolor=?,headercolor=? WHERE idNumber =? LIMIT 1");
        $sql->bindValue(1, $sidebarcolor);
        $sql->bindValue(2, $headerbarcolor);
        $sql->bindValue(3, $idnum);
        $sql->execute();

    }
	    public function update_profile($userprofile,$username,$idnum,$userpassword){
		
		$sql = $this->db->prepare("UPDATE users SET image=?,login=?,password=? WHERE idNumber =? LIMIT 1");
        $sql->bindValue(1, $userprofile);
        $sql->bindValue(2, $username);

		$sql->bindValue(3, $userpassword);
		$sql->bindValue(4, $idnum);
        $sql->execute();

    }	
	    public function select_all_users() {
        $results = $this->db->prepare("SELECT * FROM users");
        $results->execute();
        return $results->fetchAll();
    }
	    public function delete_employee($empid) {

        $sql = $this->db->prepare("DELETE FROM users WHERE idNumber	=:empid");


        $sql->execute(array(
            ':empid' => $empid
        ));
    }
	
	
	
	
	    public function update_employees($idnumber,$fname,$lname,$role,$email,$phoneNumber) {

        $sql = $this->db->prepare("UPDATE users SET fname=?,lname=?,role=?,email=?,phoneNumber=? WHERE idNumber =? LIMIT 1");
        $sql->bindValue(1, $fname);
        $sql->bindValue(2, $lname);
        $sql->bindValue(3, $role);
        $sql->bindValue(4, $email);		
        $sql->bindValue(5, $phoneNumber);		
        $sql->bindValue(6, $idnumber);
        $sql->execute();
    }
}