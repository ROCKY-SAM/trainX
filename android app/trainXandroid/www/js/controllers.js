angular.module('app.controllers', [])
  
.controller('loginCtrl', function($scope,$ionicModal,$timeout,$state,$http,$ionicPopup) {

//start

//form data for the login modal
$scope.loginData= {};

//create the login modal that we will use later

$ionicModal.fromTemplateUrl('templates/login.html',{
	scope:$scope
}).then(function(Modal){
	$scope.modal = modal;
});

//login modal to close it 

$scope.closeLogin = function(){
$scope.modal.hide();	
};

//openthe login modal
$scope.login = function(){
	$scope.modal.show();
};

$scope.doLogin = function(){


alert(window.localStorage.getItem("name"));




	$http.get('http://192.168.1.4/Topic.php').then(function(response)
	{

		var markers = [];
		markers = response;

		var records = markers.data;

		
		for (var i = 0; i < records.length; i++) {
 
          var record = records[i];   

		  
		if($scope.loginData.username == record.login )
		{
			if($scope.loginData.passwordq == record.password ){
				window.localStorage.setItem("name",'done');
			 $state.transitionTo("tabsController.home");
			break;
			}else{
				
				
	var alertPopup = $ionicPopup.alert({
     title: 'Login Error',
     template: 'User Name and Password not match'
   });

   alertPopup.then(function(res) {
    
   });
			
				break;
			}
		}
		
		if( i == records.length-1)
		{
			
			
	var alertPopup = $ionicPopup.alert({
     title: 'Login Error',
     template: 'User Name and Password not found'
   });

   alertPopup.then(function(res) {
    
   });
   
		
		}
		}
		
		

	});
	
	
};


//end

})
   
.controller('signupCtrl', function($scope) {

})
   
.controller('homeCtrl', function($scope) {

})
   
.controller('myAccountCtrl', function($scope) {

})
   
.controller('informationCtrl', function($scope) {

})
.controller('findMyTrainCtrl', function($scope) {

}) 

.controller('seatReservations', function($scope) {

})


.controller('reservationDetails', function($scope) {

})


.controller('paymentMethod', function($scope) {

})

.controller('paymentSuccess', function($scope) {

})


.controller('travelGuide', function($scope) {

})  

.controller('PlacesOfTravelG', function($scope) {

})  

.controller('TrainSchedules', function($scope) {

})  
