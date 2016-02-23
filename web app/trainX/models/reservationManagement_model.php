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

}
