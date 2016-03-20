<?php

	header('Access-Control-Allow-Origin: *');

class TravelGuide extends Controller {
	

	
	        function __construct() {
		parent::__construct();	
	}
	
		function index() 
	{	
		$this->view->render('travelGuide/index');
	}
	
		function Locations() 
	{	
		$this->view->render('travelGuide/Locations');
	}
	
		function adminLocationEdit() 
	{	
		$this->view->render('travelGuide/adminLocationEdit');
	}

		function adminLocationsAdd() 
	{	
		$this->view->render('travelGuide/adminLocationsAdd');
	}
	
	
		function LocationList() 
	{	
		$this->view->render('travelGuide/LocationList');
	}
	
	function AddLocations() 
	{	
		$this->view->render('travelGuide/AddLocations');
	}
	//delete Locations from Locations in mobile app
	public function Location_list() {
		
        $model = new TravelGuide_model();
        echo json_encode($model->select_all_locations());

    }
	//delete Locations from Locations in webapp
	public function Location_listWeb() {
		
        $model = new TravelGuide_model();
        echo json_encode($model->disply_all_locationsWeb());

    }
	//Get Locations to dropdown 
	public function Location() {
		
        $model = new TravelGuide_model();
        echo json_encode($model->getLocation());

    }
	public function delete_Locations() {

        $id = $_POST['idValue'];
        $model = new TravelGuide_model();
        $delete = $model->delete_Locations($id);
     }
	 
	 public function delete_LocationsfromWeb() {

        $id = $_POST['idValue'];
        $model = new TravelGuide_model();
        $delete = $model->delete_LocationsfromWeb($id);
     }
	
	    public function update_Location() {
 

        $id = $_POST['id'];
        $Locations = $_POST['locationselect'];
        $nearestRS = $_POST['nearestRS'];
        $Description = $_POST['Description'];
        
        
        
           $sendtomodel=new TravelGuide_model();
           $sendtomodel->update_Location($id,$Locations,$nearestRS,$Description);
    }

	public function insertLocation() {

	
		$Locations = $_POST['Locationz'];
        $nearestRS = $_POST['railstation'];
        $Description = $_POST['descrip'];
        $Photo = $_POST['uploadphotos'];
       
//echo $Locations;
      $sendtomodel=new TravelGuide_model();
      $sendtomodel->insertLocationmodal($Locations,$Photo,$Description,$nearestRS);
	  
    }
	
	public function addLocation()
	{
		$location =  $_POST['location'];
		$longitude =  $_POST['longitude'];
		$latitude = $_POST['latitude'];
		
		$sendtomodel=new TravelGuide_model();
      $sendtomodel->addLocation($location,$longitude,$latitude);
	}
		//android application
	
		public function Location_listsearch() {
		$wordof = $_GET['wordof'];
        $model = new TravelGuide_model();
        echo json_encode($model->select_search_locations($wordof));

    }
}


