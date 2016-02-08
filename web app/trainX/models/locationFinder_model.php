<?php
class LocationFinder_model extends Model {

   function __construct() {
        
        
        parent::__construct();

    }
 public function search_train()
 {
           $results = $this->db->prepare("SELECT * FROM traindeatals ");
           
           
        $results->execute();
        return $results->fetchAll();
     
     
 }
  public function search_root()
 {
           $results = $this->db->prepare("SELECT * FROM root ");
           
           
        $results->execute();
        return $results->fetchAll();
     
     
 }
   public function view_rooting()
 {
           $results = $this->db->prepare("SELECT * FROM rooting ");
           
           
        $results->execute();
        return $results->fetchAll();
     
     
 }
 function insert_station_root($rootid,$station,$latitude,$longitude,$point)
 {
      $adder = $this->db->prepare("INSERT INTO rooting (rootid,station,latitude,longitude,point)
       VALUES(:rootid,:station,:latitude,:longitude,:point)");

      $adder->execute(array(':rootid' =>$rootid,':station' =>$station,':latitude' =>$latitude,':longitude' =>$longitude,':point' =>$point));
    
     
     
 }
 function update_station_root($rootid,$station,$latitude,$longitude,$point) {
     
    $sql = $this->db->prepare("UPDATE rooting SET rootid=?,station=?,latitude=?,longitude=?,point=?, WHERE rootid =? LIMIT 1");
        $sql->bindValue(1, $rootid);
        $sql->bindValue(2, $station);
        $sql->bindValue(3, $latitude);
        $sql->bindValue(4, $longitude);
        $sql->bindValue(5, $point);
        $sql->execute();
     
 }
   public function delete_station_inform($rootid) {

        $sql = $this->db->prepare("DELETE FROM rooting WHERE rootid	=:rootid");


        $sql->execute(array(
            ':rootid' => $rootid
        ));
    }
}
?>