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
	
	public function getLocation() {
        $results = $this->db->prepare("SELECT location FROM addLocations");
        $results->execute();
        return $results->fetchAll();
    }
	
	public function disply_all_locationsWeb() {
        $results = $this->db->prepare("SELECT * FROM addlocations");
        $results->execute();
        return $results->fetchAll();
    }
	
	 public function delete_Locations($Lid) {

        $sql = $this->db->prepare("DELETE FROM locations WHERE id= :Lid");


        $sql->execute(array(
            ':Lid' => $Lid
        ));
	 }
	 
	 public function delete_LocationsfromWeb($Lid) {

        $sql = $this->db->prepare("DELETE FROM addlocations WHERE id= :Lid");


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
	
	 public function insertLocationmodal($Locations,$Photo,$Description,$nearestRS) {

      $adder = $this->db->prepare("INSERT INTO locations (Locations,Photo,Description,nearestRS)
       VALUES(:Locations,:Photo,:Description,:nearestRS)");


      $adder->execute(array(':Locations' =>$Locations,':Photo' =>$Photo,':Description' =>$Description,':nearestRS' =>$nearestRS));
    
	}
	
	public function addLocation($location,$longitude,$latitude)
	{
			$adder = $this->db->prepare("INSERT INTO addLocations (location,longitude,latitude)
			VALUES(:location,:longitude,:latitude)");
			
			$adder->execute(array(':location' =>$location,':longitude' =>$longitude,':latitude' =>$latitude));
	}
	
		//android part
		public function select_search_locations($wordof) {
        $results = $this->db->prepare("SELECT * FROM locations where Locations LIKE '$wordof%'");
        $results->execute();
        return $results->fetchAll();
    }
	
}