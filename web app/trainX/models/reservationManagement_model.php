<?php

class ReservationManagement_model extends Model {

    function __construct() {


        parent::__construct();
    }

    public function add_trains($trainname, $trainID, $SLocation, $ELocation, $TimeStart, $TimeEnd, $Seat01, $SeatNo2, $adult01,$child01 ,$adult02,$child02) {

        $adder = $this->db->prepare("INSERT INTO train_schedules (tname,tid,startLocation,endLocation,timeStarting,TimeEnding,firstclassSeatNo,secondclassSeatNo,firstclassAdult,firstclassChild,secondclassAdult,secondclassChild)
       VALUES(:trainName,:trainID,:startLocation,:endLocation,:TimeStarting,:TimeEnding,:SeatNo1,:SeatNo2,:adult01,:child01,:adult02,:child02)");

        $adder->execute(array(':trainName' => $trainname, ':trainID' => $trainID, ':startLocation' => $SLocation, ':endLocation' => $ELocation, ':TimeStarting' => $TimeStart, ':TimeEnding' => $TimeEnd, ':SeatNo1' => $Seat01, ':SeatNo2' => $SeatNo2, ':adult01' => $adult01, ':child01' => $child01, ':adult02' => $adult02,  ':child02' => $child02));
    }
    
    	    public function select_all_trains() {
        $results = $this->db->prepare("SELECT * FROM train_schedules");
        $results->execute();
        return $results->fetchAll();
    }
	
		    public function select_all_train_price() {
        $results = $this->db->prepare("SELECT * FROM train_schedules");
        $results->execute();
        return $results->fetchAll();
    }

    	    public function select_seats() {
        $results = $this->db->prepare("SELECT * FROM seat_reservation");
        $results->execute();
        return $results->fetchAll();
    }
	
	
	
	
	    public function updateSchedules($tid,$tname,$startLocation,$endLocation,$timeStarting,$TimeEnding) {

        $sql = $this->db->prepare("UPDATE train_schedules SET tname=?,startLocation=?,endLocation=?,timeStarting=?,TimeEnding=? WHERE tid =? LIMIT 1");
        $sql->bindValue(1, $tname);
        $sql->bindValue(2, $startLocation);
        $sql->bindValue(3, $endLocation);
        $sql->bindValue(4, $timeStarting);		
        $sql->bindValue(5, $TimeEnding);		
        $sql->bindValue(6, $tid);
        $sql->execute();
    }

	
		 public function updatePriceM($tid,$tname,$firstclassAdult,$firstclassChild,$secondclassAdult,$secondclassAdult) {

        $sql = $this->db->prepare("UPDATE train_schedules SET tname=?,firstclassAdult=?,firstclassChild=?,secondclassAdult=?,secondclassAdult=? WHERE tid =? LIMIT 1");
        $sql->bindValue(1, $tname);
        $sql->bindValue(2, $firstclassAdult);
        $sql->bindValue(3, $firstclassChild);
        $sql->bindValue(4, $secondclassAdult);		
        $sql->bindValue(5, $secondclassAdult);		
        $sql->bindValue(6, $tid);
        $sql->execute();
    }
    
   
        public function delete_train_prices($trainid) {

        $sql = $this->db->prepare("DELETE FROM train_schedules WHERE tid	=:trainid");


        $sql->execute(array(
            ':trainid' => $trainid
        ));
    }
    
    
}



