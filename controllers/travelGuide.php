<?php

class TravelGuide extends Controller {
	
	
	
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
	
	public function Location_list() {
		
        $model = new TravelGuide_model();
        echo json_encode($model->select_all_locations());

    }
	
	public function delete_Locations() {

        $id = $_POST['idValue'];
        $model = new TravelGuide_model();
        $delete = $model->delete_Locations($id);
     }
	
	    public function update_Location() {
 

        $id = $_POST['id'];
        $Locations = $_POST['Locations'];
        $nearestRS = $_POST['nearestRS'];
        $Description = $_POST['Description'];
        
        
        
           $sendtomodel=new TravelGuide_model();
           $sendtomodel->update_Location($id,$Locations,$nearestRS,$Description);
    }

	public function insertLocation() {

		$Locations = $_POST['Locations'];
        $nearestRS = $_POST['nearestRS'];
        $Description = $_POST['Description'];
        $Photo = $_POST['Photo'];
       

      $sendtomodel=new TravelGuide_model();
      $sendtomodel->insertLocation($Locations,$Photo,$Description,$nearestRS);
    }
}


