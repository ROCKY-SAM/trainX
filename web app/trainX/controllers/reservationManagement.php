<?php

class ReservationManagement extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('reservationManagement/index');
    }

    function emergency() {
        $this->view->render('reservationManagement/emergency');
    }

    function seat() {
        $this->view->render('reservationManagement/seat');
    }

    function schedulec() {
        $this->view->render('reservationManagement/addTrains');
    }

    function test1() {
        $this->view->render('reservationManagement/test');
    }

    public function insertTrains() {

        $trainname = $_POST['trainName'];
        $trainID = $_POST['trainID'];
        $SLocation = $_POST['startLocation'];
        $ELocation = $_POST['endLocation'];
        $TimeStart = $_POST['TimeStarting'];
        $TimeEnd = $_POST['TimeEnding'];
        $Seat01 = $_POST['SeatNo1'];
        $SeatNo2 = $_POST['SeatNo2'];
        $adult01 = $_POST['adult01'];
        $child01 = $_POST['child01'];
        $adult02 = $_POST['adult02'];
        $child02 = $_POST['child02'];


        $sendtomodel = new ReservationManagement_model();
        $sendtomodel->add_trains($trainname, $trainID, $SLocation, $ELocation, $TimeStart, $TimeEnd, $Seat01, $SeatNo2, $adult01,$child01 ,$adult02,$child02);
    }

}
