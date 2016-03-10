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
    
    function seatResc() {
        $this->view->render('reservationManagement/seatRes');
    }

   
    
    
    function schedulec() {
        $this->view->render('reservationManagement/trainSchedules');
    }

    function addTrainsc() {
        $this->view->render('reservationManagement/addTrains');
    }
    
    function viewTrainSchedulesc() {
        $this->view->render('reservationManagement/viewTrainSchedules');
    }
    
    function updateTrainsc() {
        $this->view->render('reservationManagement/updateTrains');
    }
    
   
    
    
//    function viewTrainsc() {
//        $this->view->render('reservationManagement/viewTrains');
//    }
//    
    function pricesc() {
        $this->view->render('reservationManagement/pricesList');
    }
   
     function priceAddc() {
        $this->view->render('reservationManagement/priceAdd');
    }
    
     function priceUpdatec() {
        $this->view->render('reservationManagement/priceUpdate');
    }
    
      
     function priceViewNextc() {
        $this->view->render('reservationManagement/priceViewNext');
    }
    
    
    
    function test1() {
        $this->view->render('reservationManagement/test');
    }
    
    function addstations() {
        $this->view->render('reservationManagement/addstations');
    }
    
    
    	public function train_list() {
        $model = new ReservationManagement_model();
        echo json_encode($model->select_all_trains());

    }
    
    
    	public function train_stations() {
        $model = new ReservationManagement_model();
        echo json_encode($model->select_all_train_stations());

    }
    
    	public function station_list() {
        $model = new ReservationManagement_model();
        echo json_encode($model->select_all_station_list());

    }
	
    	public function train_price() {
        $model = new ReservationManagement_model();
        echo json_encode($model->select_all_train_price());

    }
    
    
    	public function select_seats() {
        $model = new ReservationManagement_model();
        echo json_encode($model->select_seats());

    }
    
      
         public function delete_price() {

        $trainid = $_POST['idValue'];
        $model = new ReservationManagement_model();
        $delete = $model->delete_train_prices($trainid);
     }
	 
	     public function updateSchedules() {
 

        $tid = $_POST['tid'];
        $tname = $_POST['tname'];
        $startLocation = $_POST['startLocation'];
        $endLocation = $_POST['endLocation'];
        $timeStarting = $_POST['timeStarting'];
        $TimeEnding = $_POST['TimeEnding'];
        
        
           $sendtomodel=new ReservationManagement_model();
           $sendtomodel->updateSchedules($tid,$tname,$startLocation,$endLocation,$timeStarting,$TimeEnding);
    }
	
    
        public function updatePrice() {
 

        $tid = $_POST['tid'];
        $tname = $_POST['tname'];
        $firstclassAdult = $_POST['firstclassAdult'];
        $firstclassChild = $_POST['firstclassChild'];
        $secondclassAdult = $_POST['secondclassAdult'];
        $secondclassAdult = $_POST['secondclassAdult'];
        
        
           $sendtomodel=new ReservationManagement_model();
           $sendtomodel->updatePriceM($tid,$tname,$firstclassAdult,$firstclassChild,$secondclassAdult,$secondclassAdult);
    }

    public function insertTrains() {

        $trainname = $_POST['trainName'];
        $trainID = $_POST['trainID'];
        $trainType = $_POST['trainType'];
        $classAvailable = $_POST['classavailable'];
        $SLocation = $_POST['startLocation'];
        $ELocation = $_POST['endLocation'];
        $TimeStart = $_POST['TimeStarting'];
        $TimeEnd = $_POST['TimeEnding'];
        $SeatNo1 = $_POST['SeatNo1'];
        $SeatNo2 = $_POST['SeatNo2'];
        $price1stclass = $_POST['firstclassprice'];
        $price2ndclass = $_POST['secondclassprice'];
        

        $sendtomodel = new ReservationManagement_model();
        $sendtomodel->add_trains($trainname,$trainID,$trainType,$classAvailable,$SLocation, $ELocation, $TimeStart, $TimeEnd,$SeatNo1, $SeatNo2, $price1stclass,$price2ndclass);
       
        
    }
     public function addstations1() {
        
        $trainname = $_POST['trainname'];
        $trainID = $_POST['trainID'];
        $SLocation = $_POST['SLocation'];
        $ELocation = $_POST['ELocation'];
        $TimeStart = $_POST['TimeStart'];
        $TimeEnd = $_POST['TimeEnd'];
        $station1ID = $_POST['station1ID'];
        $station1Name= $_POST['station1Name'];
        $station1time1 = $_POST['station1time1'];
        
//        echo  $station1ID;
//        echo $station1Name;
//        echo $station1time1;

        $sendtomodel = new ReservationManagement_model();
        $sendtomodel->addstations1($trainname,$trainID,$SLocation, $ELocation, $TimeStart, $TimeEnd, $station1ID, $station1Name, $station1time1);
       
        
    }
 

}
