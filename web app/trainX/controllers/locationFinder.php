<?php

	header('Access-Control-Allow-Origin: *');
class LocationFinder extends Controller {


        function __construct() {
		parent::__construct();	
	}
        function train_position(){
            $this->view->render('locationFinder/train_position');
        }
        function report(){
            $this->view->render('locationFinder/report');
        }
           
                function clientInform() 
	{	
		$this->view->render('locationFinder/clientInform');
	}
        function location_identi() 
	{	
		$this->view->render('locationFinder/location_identi');
	}
        
        function search_train1(){
             
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
           function navigation_root(){
             
             $model = new LocationFinder_model();
        echo json_encode($model->navigation_root());

        }
           function navigation_roota(){
             
             $model = new LocationFinder_model();
        echo json_encode($model->navigation_roota());

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
            $rootcode = array(array("Costal Line","CL"),array("Kalani Vellay Line","KVL"),array("Main Line","ML"),array("Up Country Line","UCP"),array("Matale Line","MAL"),array("Batticacoloa Line","BAL"),array("Trinco Line","TRL"),array("Mannar Line","MANL"),array("Puttalam Line","PUL"));
        for($i=0; $i<9;$i++)
        {
            if($rootcode[$i][0]==$rootid)    
        {
                $rcode = $rootcode[$i][1];
                $model->insert_station_root($rootid,$rcode,$station,$latitude,$longitude,$point);
        
        
        }
        
        }
        
        
        }
        function update_station_root()
        {
            
            
            $station = $_POST['station'];
            $latitude =$_POST['latitude'];
            $longitude = $_POST['longitude'];
            $point =$_POST['point'];
            
            $model = new LocationFinder_model();
            $model->update_station_root($station,$latitude,$longitude,$point);

            
        }
        function get_client_information()
        {
             $model = new LocationFinder_model();
        echo json_encode($model->get_client_information());

            
        }
                
        function change_client_availability()
        {       
             $availability = $_POST['availability'];
             $termid = $_POST['termid'];
             $model = new LocationFinder_model();
        echo json_encode($model-> change_client_availability($availability,$termid));

            
        }
        function inform_insert_client()
        {
            $data = json_decode(stripslashes($_POST['data']));
            $msg = $_POST['mesg'];
            $term_num = $_POST['term_num'];
            
            foreach($data as $d){
     
  
            $model = new LocationFinder_model();
            $model->inform_insert_client($d ,$msg,$term_num);
            }
            
        }
        function delete_station_inform()
        {
            
        $station = $_POST['station'];
        $model = new LocationFinder_model();
        $delete = $model->delete_station_inform($station);
        }
        public function search_to(){
			
           

                        $station = $_POST['to'];
			$model = new LocationFinder_model();
						
			echo json_encode($model->search_to($station));
	}
}
?>