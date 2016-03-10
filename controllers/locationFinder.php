<?php
class LocationFinder extends Controller {

        function __construct() {
		parent::__construct();	
	}
	
	function clientInform() 
	{	
		$this->view->render('locationFinder/clientInform');
	}
        function location_identi() 
	{	
		$this->view->render('locationFinder/location_identi');
	}
        function search_train(){
             
             $model = new LocationFinder_model();
        echo json_encode($model->search_train());

        }
        function add_root_inform(){
            
            $this->view->render('locationFinder/add_root_inform');
            
            
        }
        function view_root_inform()
        {
            
            $this->view->render('locationFinder/view_root_inform');
        }
        function search_root(){
             
             $model = new LocationFinder_model();
        echo json_encode($model->search_root());

        }
        function view_rooting(){
             
             $model = new LocationFinder_model();
        echo json_encode($model->view_rooting());

        }
        function insert_station_root()
        {
            $rootid = $_POST['rootcode'];
            $station = $_POST['station'];
            $latitude =$_POST['latitude'];
            $longitude = $_POST['longitude'];
            $point =$_POST['point'];
            
            $model = new LocationFinder_model();
            $model->insert_station_root($rootid,$station,$latitude,$longitude,$point);

        }
        function update_station_root()
        {
            
            $rootid = $_POST['rootcode'];
            $station = $_POST['station'];
            $latitude =$_POST['latitude'];
            $longitude = $_POST['longitude'];
            $point =$_POST['point'];
            
            $model = new LocationFinder_model();
            $model->update_station_root($rootid,$station,$latitude,$longitude,$point);

            
        }
        function delete_station_inform()
        {
            
            $rootid = $_POST['rootid'];
        $model = new LocationFinder_model();
        $delete = $model->delete_station_inform($rootid);
        }
}
?>