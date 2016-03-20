<?php

class ProfileManage_model extends Model {

    function __construct() {


        parent::__construct();
    }

    public function update_procolor($sidebarcolor, $headerbarcolor, $idnum) {

        $sql = $this->db->prepare("UPDATE users SET sidecolor=?,headercolor=? WHERE idNumber =? LIMIT 1");
        $sql->bindValue(1, $sidebarcolor);
        $sql->bindValue(2, $headerbarcolor);
        $sql->bindValue(3, $idnum);
        $sql->execute();
    }

    public function update_profile($userprofile, $username, $idnum, $userpassword) {

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

        $sql = $this->db->prepare("DELETE FROM users WHERE idNumber =:empid");


        $sql->execute(array(
            ':empid' => $empid
        ));
    }

    public function update_employees($idnumber, $fname, $lname, $role, $email, $phoneNumber) {

        $sql = $this->db->prepare("UPDATE users SET fname=?,lname=?,role=?,email=?,phoneNumber=? WHERE idNumber =? LIMIT 1");
        $sql->bindValue(1, $fname);
        $sql->bindValue(2, $lname);
        $sql->bindValue(3, $role);
        $sql->bindValue(4, $email);
        $sql->bindValue(5, $phoneNumber);
        $sql->bindValue(6, $idnumber);
        $sql->execute();
    }

    public function add_employees($code, $fname, $lname, $mpnumber, $emails, $emptyp, $user, $password, $image) {

        $adder = $this->db->prepare("INSERT INTO users (login,password,role,fname,lname,email,idNumber,image,phoneNumber)
       VALUES(:login,:password,:role,:fname,:lname,:email,:idNumber,:image,:phoneNumber)");

        $adder->execute(array(':login' => $user, ':password' => $password, ':role' => $emptyp, ':fname' => $fname, ':lname' => $lname, ':email' => $emails, ':idNumber' => $code, ':image' => $image, ':phoneNumber' => $mpnumber));




        $subject = "TrainXLife Account Information";
        $body = "Dear $fname $lname,

Your  account has now been setup and this email contains all the information you will need in order to begin using your account.
</br>
<h2>New Account Information</h2> </br>
User name : $user </br>
Password : $password</br>

</br>Thank you Admin.

";

        require_once '/public/email/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 1;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'trainxlife@gmail.com';                 // SMTP username
        $mail->Password = '0716010860';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->From = 'carwash@gmail.com';
        $mail->FromName = 'TrainXLife';
        $mail->addAddress($emails, $fname);   // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('trainxlife@gmail.com', 'TrainXLife');
//$mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }

    //customer db 
    public function select_all_customers() {
        $results = $this->db->prepare("SELECT * FROM customers");
        $results->execute();
        return $results->fetchAll();
    }

    public function select_all_usermessage() {
        $results = $this->db->prepare("SELECT DISTINCT senderId FROM messagesystem");
        $results->execute();
        return $results->fetchAll();
    }

    public function addNewMesseagephp($messagesenderId, $messagereceverId, $messageText, $messagetime) {
        $typeof = "receve";
        $adder = $this->db->prepare("INSERT INTO messagesystem (senderId,replyId,messageText,timeDate,type)
       VALUES(:senderId,:replyId,:messageText,:timeDate,:type)");

        $adder->execute(array(':senderId' => $messagesenderId, ':replyId' => $messagereceverId, ':messageText' => $messageText, ':timeDate' => $messagetime, ':type' => $typeof));
    }
	
	
	
	 public function addNewMesseageCus($messagesender, $messagerecever, $messageTexta, $messagetimea,$messagename)
	 {
	        $adder = $this->db->prepare("INSERT INTO customeremail (cusEmail,adminEmail,cusText,time)
       VALUES(:cusEmail,:adminEmail,:cusText,:time)");

        $adder->execute(array(':cusEmail' => $messagesender, ':adminEmail' => $messagerecever, ':cusText' => $messageTexta, ':time' => $messagetimea));
      	 
		//-----
		
		 $subject = "TrainXLife Account Information";
        $body = "Dear $messagename,

</br>
<h2>Sri lankan train department </h2> </br>
$messageTexta</br>

</br>Do not reply to this email.
</br>Thank you Admin.

";

        require_once '/public/email/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        //$mail->SMTPDebug = 1;                               // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'trainxlife@gmail.com';                 // SMTP username
        $mail->Password = '0716010860';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        $mail->From = 'carwash@gmail.com';
        $mail->FromName = 'TrainXLife';
        $mail->addAddress($messagesender, $messagename);   // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('trainxlife@gmail.com', 'TrainXLife');
//$mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
		
		//----
	 }
	
	
	
	

    //android db

    public function addNewMesseage($messageId, $messageText, $messagetime) {
        $typeof = "send";
        $adder = $this->db->prepare("INSERT INTO messagesystem (senderId,messageText,timeDate,type)
       VALUES(:senderId,:messageText,:timeDate,:type)");

        $adder->execute(array(':senderId' => $messageId, ':messageText' => $messageText, ':timeDate' => $messagetime, ':type' => $typeof));
        echo "done";
    }

    public function select_all_message() {
        $results = $this->db->prepare("SELECT * FROM messagesystem");
        $results->execute();
        return $results->fetchAll();
    }
	
	
    public function update_customer($idnumber, $fname, $lname,$email,$niccode, $phoneNumber,$passwordof){

        $sql = $this->db->prepare("UPDATE customers SET customerfname=?,customerlname=?,Nic=?,email=?,phoneNumber=?,Password=? WHERE customerId =? LIMIT 1");
        $sql->bindValue(1, $fname);
        $sql->bindValue(2, $lname);
        $sql->bindValue(3, $niccode);
        $sql->bindValue(4, $email);
        $sql->bindValue(5, $phoneNumber);
        $sql->bindValue(6, $passwordof);
        $sql->bindValue(7, $idnumber);
        $sql->execute();
		
		
    }
	
	


	//android
	
	    	    public function select_alltrainsmodal($valueat) {
        $results = $this->db->prepare("SELECT * FROM train_schedules where trackName='$valueat'");
       $results->execute();
       return $results->fetchAll();
	  
    }
	
	    	    public function select_trainsmodal($valueat1) {
        $results = $this->db->prepare("SELECT * FROM train_schedules where tid='$valueat1'");
       $results->execute();
       return $results->fetchAll();
	  
    }
	
	
    	    	    public function select_booknumbers($valueat) {
        $results = $this->db->prepare("SELECT * FROM booking where trainid='$valueat'");
       $results->execute();
       return $results->fetchAll();
	  
    }

        
            public function add_customer($code, $fname, $lname, $nic, $pcode, $email, $password) {
 //       echo $code, $fname, $lname, $nic, $pcode, $email, $password;
 
 
         $results = $this->db->prepare("SELECT * FROM customers where email='$email'");
       $results->execute();
       
if($results->fetch(PDO::FETCH_OBJ) > "0")
{
echo "Sorry email already exsist";
}
else{
	
	
	 $adder = $this->db->prepare("INSERT INTO customers (customerId,customerfname,customerlname,Nic,phoneNumber,email,Password)
    VALUES(:customerId,:customerfname,:customerlname,:Nic,:phoneNumber,:email,:Password)");

      $adder->execute(array(':customerId' => $code, ':customerfname' => $fname, ':customerlname' => $lname, ':Nic' => $nic, ':phoneNumber' => $pcode, ':email' => $email, ':Password' => $password));
     //   echo "done";
	echo "Data have begin added to Database";
}

    }
    

 }
