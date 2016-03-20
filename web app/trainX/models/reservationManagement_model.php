<?php

class ReservationManagement_model extends Model {

    function __construct() {


        parent::__construct();
    }

    public function add_trains($trainname, $trainID, $trainType, $classAvailable, $SLocation, $ELocation, $TimeStart, $TimeEnd, $SeatNo1, $SeatNo2, $price1stclass, $price2ndclass) {

        $adder = $this->db->prepare("INSERT INTO train_schedules (tname,tid,traintype,available_class,startLocation,endLocation,timeStarting,TimeEnding,firstclassSeatNo,secondclassSeatNo,firstclassprice,secondclassprice)
       VALUES(:trainName,:trainID,:trainType,:classavailable,:startLocation,:endLocation,:TimeStarting,:TimeEnding,:SeatNo1,:SeatNo2,:firstclassprice,:secondclassprice)");

        $adder->execute(array(':trainName' => $trainname, ':trainID' => $trainID, ':trainType' => $trainType, ':classavailable' => $classAvailable, ':startLocation' => $SLocation, ':endLocation' => $ELocation, ':TimeStarting' => $TimeStart, ':TimeEnding' => $TimeEnd, ':SeatNo1' => $SeatNo1, ':SeatNo2' => $SeatNo2, ':firstclassprice' => $price1stclass, ':secondclassprice' => $price2ndclass));
        //$adder->execute(array(':trainName' => $trainname, ':trainID' => $trainID, ':trainType' =>$trainType, ':available_class' =>$classAvailable, ':startLocation' => $SLocation, ':endLocation' => $ELocation, ':TimeStarting' => $TimeStart, ':TimeEnding' => $TimeEnd, ':noofStations' => $stationNo,':SeatNo1' => $SeatNo1, ':SeatNo2' => $SeatNo2, ':firstclassprice' => $price1stclass, ':secondclassprice' => $price2ndclass));
    }

    public function select_all_trains() {
        $results = $this->db->prepare("SELECT * FROM train_schedules");
        $results->execute();
        return $results->fetchAll();
    }

    public function select_all_station_list() {
        $results = $this->db->prepare("SELECT noofStations FROM train_schedules");
        $results->execute();
        return $results->fetchAll();
    }

    public function select_all_train_stations() {
        $results = $this->db->prepare("SELECT * FROM train_stations");
        $results->execute();
        return $results->fetchAll();
    }

    public function select_all_train_price() {
        $results = $this->db->prepare("SELECT * FROM train_schedules");
        $results->execute();
        return $results->fetchAll();
    }
    
    public function select_train_stations_Prices() {
        $results = $this->db->prepare("SELECT * FROM train_station_prices");
        $results->execute();
        return $results->fetchAll();
    }
       
    

      public function train_station_prices() {
        $results = $this->db->prepare("SELECT * FROM train_station_prices");
        $results->execute();
        return $results->fetchAll();
    }
    public function select_seats() {
        $results = $this->db->prepare("SELECT * FROM seat_reservation");
        $results->execute();
        return $results->fetchAll();
    }

    public function updateSchedules($tid, $tname, $startLocation, $endLocation, $timeStarting, $TimeEnding) {

        $sql = $this->db->prepare("UPDATE train_schedules SET tname=?,startLocation=?,endLocation=?,timeStarting=?,TimeEnding=? WHERE tid =? LIMIT 1");
        $sql->bindValue(1, $tname);
        $sql->bindValue(2, $startLocation);
        $sql->bindValue(3, $endLocation);
        $sql->bindValue(4, $timeStarting);
        $sql->bindValue(5, $TimeEnding);
        $sql->bindValue(6, $tid);
        $sql->execute();
    }

    public function updatePriceM($StationPrice,$tid) {

        $sql = $this->db->prepare("UPDATE train_station_prices SET station2price=? WHERE priceID =? LIMIT 1");
        $sql->bindValue(1, $StationPrice);
        $sql->bindValue(2, $tid);
       
        $sql->execute();
    }
    
    
    

    public function delete_train_prices($trainid) {

        $sql = $this->db->prepare("DELETE FROM train_schedules WHERE tid	=:trainid");


        $sql->execute(array(
            ':trainid' => $trainid
        ));
    }

    public function addstations1($trainname, $trainID, $SLocation, $ELocation, $TimeStart, $TimeEnd, $station1ID, $station1Name, $station1time1) {

        //   echo $trainname,$trainID,$SLocation, $ELocation, $TimeStart, $TimeEnd, $station1ID, $station1Name, $station1time1;
        //    $adder = $this->db->prepare("INSERT INTO train_stations(trainName,trainID,slocation,elocation,timestart,timeends,station2ID,station2Name,station2time1)
        // VALUES(:trainName,:trainID,:startLocation,:endLocation,:timeStarting,:TimeEnding,:stid2,:stname2,:stdt2)");
        $adder = $this->db->prepare("INSERT INTO train_stations(trainName,trainID,slocation,elocation,timestart,timeends,station2ID,station2Name,station2time1)
       VALUES(:trainName,:trainID,:startLocation,:endLocation,:timeStarting,:TimeEnding,:stid2,:stname2,:stdt2)");
        //  $adder->execute();
        $adder->execute(array(':trainName' => $trainname, ':trainID' => $trainID, ':startLocation' => $SLocation, ':endLocation' => $ELocation, ':timeStarting' => $TimeStart, ':TimeEnding' => $TimeEnd, ':stid2' => $station1ID, ':stname2' => $station1Name, ':stdt2' => $station1time1));
//        $adder->execute(array(':trainName' => $trainname, ':trainID' => $trainID, ':trainType' =>$trainType, ':available_class' =>$classAvailable, ':startLocation' => $SLocation, ':endLocation' => $ELocation, ':TimeStarting' => $TimeStart, ':TimeEnding' => $TimeEnd, ':noofStations' => $stationNo,':SeatNo1' => $SeatNo1, ':SeatNo2' => $SeatNo2, ':firstclassprice' => $price1stclass, ':secondclassprice' => $price2ndclass));
    }
    
    
    public function addstationprices($trainname, $trainID, $SLocation, $ELocation,$station1Name, $station1price) {

        //   echo $trainname,$trainID,$SLocation, $ELocation, $TimeStart, $TimeEnd, $station1ID, $station1Name, $station1time1;
        //    $adder = $this->db->prepare("INSERT INTO train_stations(trainName,trainID,slocation,elocation,timestart,timeends,station2ID,station2Name,station2time1)
        // VALUES(:trainName,:trainID,:startLocation,:endLocation,:timeStarting,:TimeEnding,:stid2,:stname2,:stdt2)");
        $adder = $this->db->prepare("INSERT INTO train_station_prices(trainName,trainID,slocation,elocation,station2Name,station2price)
       VALUES(:trainName,:trainID,:startLocation,:endLocation,:stname2,:stname2price)");
        //  $adder->execute();
        $adder->execute(array(':trainName' => $trainname, ':trainID' => $trainID, ':startLocation' => $SLocation, ':endLocation' => $ELocation,':stname2' => $station1Name, ':stname2price' => $station1price));
//        $adder->execute(array(':trainName' => $trainname, ':trainID' => $trainID, ':trainType' =>$trainType, ':available_class' =>$classAvailable, ':startLocation' => $SLocation, ':endLocation' => $ELocation, ':TimeStarting' => $TimeStart, ':TimeEnding' => $TimeEnd, ':noofStations' => $stationNo,':SeatNo1' => $SeatNo1, ':SeatNo2' => $SeatNo2, ':firstclassprice' => $price1stclass, ':secondclassprice' => $price2ndclass));
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
	public function addbookingseat($trainid,$cusid,$seatid,$date,$classtrain){
		
	
        $adder = $this->db->prepare("INSERT INTO booking (trainid,cusid,seatid,date,classtrain)
       VALUES(:trainid,:cusid,:seatid,:date,:classtrain)");

        $adder->execute(array(':trainid' => $trainid, ':cusid' => $cusid, ':seatid' => $seatid, ':date' => $date, ':classtrain' => $classtrain));
       	
	}

}
