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



	$http.get('http://'+window.localStorage.getItem("ipaddress")+'/Topic.php').then(function(response)
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
				window.localStorage.setItem("useridforchat",record.id);
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
   
.controller('homeCtrl', function($scope,$interval,$http) {

        $scope.incrementCounter = function() {
         
		 
		

	
				$http.get('http://'+window.localStorage.getItem("ipaddress")+'/trainX/profileManage/message_list').then(function(response)
			{

			var markers = [];
			markers = response;
			var records = markers.data;
		 $("tbody").empty();
		for (var i = 0; i < records.length; i++) {
			
            var record = records[i];  
			if(window.localStorage.getItem("useridforchat") == record.senderId){


				if(record.type == "receve"){
	
$("#addchatdb").append('<li class="ChatLog__entry"><p class="ChatLog__message">' +record.messageText  + '</p></li>');
			
				}else{
		$("#addchatdb").append('<li class="ChatLog__entry ChatLog__entry_mine"><p class="ChatLog__message">' +record.messageText  + '</p></li>');			
			}
			}


		}

$("#table-scroll").animate({
				scrollTop:  10000000000
			   });

			   
			});

  
 
  
  
		 
		 
		 
        }

        $interval($scope.incrementCounter, 750);


})
   
.controller('myAccountCtrl', function($scope) {

})
 
.controller('myAccountEditCtrl', function($scope) {

})
 
.controller('informationCtrl', function($scope,$http,$interval) {



$scope.chatsendMessage = function(){
	
	
	
	
  var  myVar = setTimeout(function()
  {
	  $scope.$apply();
  
  }, 500);

var currentTime = new Date();
var dateeofthe=currentTime.getMinutes();
    if(dateeofthe<10)
        {
        dateeofthe="0"+dateeofthe;
        }
    var tim=currentTime.getHours()+":"+dateeofthe;
    var yearr=currentTime.getFullYear();
    var monthh=currentTime.getMonth()+1;
    if(monthh<10)
        {
        monthh="0"+monthh;
        }
	var dateof=currentTime.getDate();
            if(dateof<10)
            {
                dateof="0"+dateof;
            }
var timeYear =tim+" "+yearr+"-"+monthh+"-"+dateof;

	$http.get('http://'+window.localStorage.getItem("ipaddress")+'/trainX/profileManage/insertMessageAndroid?id='+window.localStorage.getItem("useridforchat")+'&textofmessage=' +$scope.chat.message+'&time='+timeYear).then(function(response){
		
		$scope.chat.message="";
		});


			};
  
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

<<<<<<< HEAD
=======

.controller('travelGuide', function($scope) {

})  

.controller('PlacesOfTravelG', function($scope) {

})  

.controller('TrainSchedules', function($scope) {

})  
>>>>>>> 687645207b89caa9b1e14a2f06d344ff9239adad
