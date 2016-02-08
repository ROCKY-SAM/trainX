<?php

class TravelGuide_model extends Model {
	
	
	    function __construct() {
        
        
        parent::__construct();

    }
	
	
	
	public function select_all_locations() {
        $results = $this->db->prepare("SELECT * FROM locations");
        $results->execute();
        return $results->fetchAll();
    }
	
	 public function delete_Locations($Lid) {

        $sql = $this->db->prepare("DELETE FROM locations WHERE id= :Lid");


        $sql->execute(array(
            ':Lid' => $Lid
        ));
	 }
	 
	 public function update_Location($id,$Locations,$nearestRS,$Description) {

        $sql = $this->db->prepare("UPDATE locations SET Locations=?,Description=?,nearestRS=? WHERE id =? LIMIT 1");
        
        $sql->bindValue(1, $Locations);
		$sql->bindValue(2, $Description);
        $sql->bindValue(3, $nearestRS);
        $sql->bindValue(4, $id);		
        
        $sql->execute();
    }
	
	 public function insertLocation($Locations,$Photo,$Description,$nearestRS) {

       $adder = $this->db->prepare("INSERT INTO locations (Locations,Photo,Description,nearestRS)
       VALUES(:Locations,:Photo,:Description,:nearestRS)");

      $adder->execute(array(':Locations' =>$Locations,':Photo' =>$Photo,':Description' =>$Description,':nearestRS' =>$nearestRS));
    
	
	
/*	
	 $subject="TrainXLife Account Information";
			  $body="Dear $fname $lname,

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
	
	
	*/
	
	
	}
}