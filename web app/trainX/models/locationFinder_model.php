<?php
class LocationFinder_model extends Model {

   function __construct() {
        
        
        parent::__construct();

    }
 public function search_train()
 {
           $results = $this->db->prepare("SELECT * FROM train_details where date>=:datee ");
           
           
           $results->execute(array(
				':datee' => Date('Y-m-d')
			));
        return $results->fetchAll();
     
     
 }
  public function search_root()
 {
     
           $results = $this->db->prepare("SELECT * FROM root_details ");
           
           $results->execute(array(
				
			));
           
        
        return $results->fetchAll();
     
     
 }
  public function navigation_root()
 {
           $results = $this->db->prepare("SELECT * FROM rooting_details");
           
           
        $results->execute();
        return $results->fetchAll();
     
     
 }

   public function navigation_roota()
 {
           $results = $this->db->prepare("SELECT * FROM rooting ");
           
           
        $results->execute();
        return $results->fetchAll();
     
     
 }
 
 public function view_rooting()
 {
           $results = $this->db->prepare("SELECT * FROM rooting_details ");
           
           
        $results->execute();
        return $results->fetchAll();
     
     
 }
 function insert_station_root($rootid,$rcode,$station,$latitude,$longitude,$point)
 {
      $adder = $this->db->prepare("INSERT INTO rooting_details (root,root_code,station,latitude,longitude,point)
       VALUES(:rootid,:root_code,:station,:latitude,:longitude,:point)");

      $adder->execute(array(':rootid' =>$rootid,':root_code'=>$rcode,':station' =>$station,':latitude' =>$latitude,':longitude' =>$longitude,':point' =>$point));
    
      //======================================================
      
//      $adder1 = $this->db->prepare("INSERT INTO rooting (rootid,station,latitude,longitude,point,root_code)
//       VALUES(:rootid,:station,:latitude,:longitude,:point,:root_code)");
//
//      $adder1->execute(array(':rootid' =>$rootid,':station' =>$station,':latitude' =>$latitude,':longitude' =>$longitude,':point' =>$point,':root_code'=>$rcode));
//    
     
     
 }
 function update_station_root($station,$latitude,$longitude,$point) {
     
    $sql = $this->db->prepare("UPDATE rooting_details SET latitude=?,longitude=?,point=? WHERE station=? LIMIT 1");
       
        $sql->bindValue(1, $latitude);
        $sql->bindValue(2, $longitude);
        $sql->bindValue(3, $point);
        $sql->bindValue(4, $station);
        $sql->execute();
     
 }
   public function delete_station_inform($station) {

        $sql = $this->db->prepare("DELETE FROM rooting_details WHERE station=:station");


        $sql->execute(array(
            ':station' => $station
        ));
    }
    public function search_to($station){
$sql = $this->db->prepare("SELECT * FROM rooting_details WHERE station=:station ");
			$sql->execute(array(
				':station' => $station
			));
			return $sql->fetchAll();
		}
                public function get_client_information()
                    {
                          $results = $this->db->prepare("SELECT * FROM client_details ");
                          $results->execute();
                            return $results->fetchAll();
                        
                    }

               
                  public function inform_insert_client($data,$msg,$term_num)
                   {
                       $adder = $this->db->prepare("INSERT INTO msg_details (number,message,termid)
                        VALUES(:number,:message,:termid)");

                        $adder->execute(array(':number' =>$data,':message'=>$msg,'termid'=>$term_num));
    
                        
                         include ( "public/sms/src/NexmoMessage.php" );

                	$nexmo_sms = new NexmoMessage('32a68cfb', '597cecf7');
                        $info = $nexmo_sms->sendText( $data, 'TrainXLIfe', $msg );
	                echo $nexmo_sms->displayOverview($info);

     
                      
                   }
                    public function change_client_availability($availability,$termid)
                  {
                     $sql = $this->db->prepare("UPDATE train_details SET availability=? WHERE termid=? LIMIT 1");
                     $sql->bindValue(1, $availability);
                     $sql->bindValue(2, $termid);
                     $sql->execute();
                  }
}
?>