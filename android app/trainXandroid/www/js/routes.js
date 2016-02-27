angular.module('app.routes', [])

        .config(function ($stateProvider, $urlRouterProvider) {

            // Ionic uses AngularUI Router which uses the concept of states
            // Learn more here: https://github.com/angular-ui/ui-router
            // Set up the various states which the app can be in.
            // Each state's controller can be found in controllers.js
            $stateProvider



                    .state('login', {
                        url: '/page5',
                        templateUrl: 'templates/login.html',
                        controller: 'loginCtrl'
                    })





                    .state('signup', {
                        url: '/page6',
                        templateUrl: 'templates/signup.html',
                        controller: 'signupCtrl'
                    })





                    .state('tabsController.home', {
                        url: '/page21',
                        views: {
                            'tab13': {
                                templateUrl: 'templates/home.html',
                                controller: 'homeCtrl'
                            }
                        }
                    })





                    .state('tabsController.myAccount', {
                        url: '/page22',
                        views: {
                            'tab14': {
                                templateUrl: 'templates/myAccount.html',
                                controller: 'myAccountCtrl'
                            }
                        }
                    })

.state('tabsController.myAccountEdit', {
                        url: '/myaccounteditpage',
                        views: {
                            'tab14': {
                                templateUrl: 'templates/myAccountEdit.html',
                                controller: 'myAccountEditCtrl'
                            }
                        }
                    })



                    .state('tabsController.information', {
                        url: '/page23',
                        views: {
                            'tab15': {
                                templateUrl: 'templates/information.html',
                                controller: 'informationCtrl'
                            }
                        }
                    })


                    .state('tabsController.findMyTrain', {
                        url: '/page25',
                        views: {
                            'tab13': {
                                templateUrl: 'templates/ticketReservation.html',
                                controller: 'findMyTrainCtrl'
                            }
                        }
                    })


                    .state('tabsController.seatReservations', {
                        url: '/page30',
                        views: {
                            'tab13': {
                                templateUrl: 'templates/seatReservations.html',
                                controller: 'findMyTrainCtrl'
                            }
                        }
                    })




                    .state('tabsController.reservationDetails', {
                        url: '/page57',
                        views: {
                            'tab13': {
                                templateUrl: 'templates/reservationDetails.html',
                                controller: 'reservationDetails'
                            }
                        }
                    })
                    
                    
                     .state('tabsController.paymentMethod', {
                        url: '/page58',
                        views: {
                            'tab13': {
                                templateUrl: 'templates/paymentMethod.html',
                                controller: 'paymentMethod'
                            }
                        }
                    })
                    
                    
					  .state('tabsController.travelGuide', {
      url: '/page29',
      views: {
        'tab13': {
          templateUrl: 'templates/travelGuide.html',
          controller: 'travelGuide'
        }
      }
    })
	
	      .state('tabsController.PlacesOfTravelG', {
      url: '/page31',
      views: {
        'tab13': {
          templateUrl: 'templates/PlacesOfTravelG.html',
          controller: 'PlacesOfTravelG'
        }
      }
    })
	
	      .state('tabsController.TrainSchedules', {
      url: '/page32',
      views: {
        'tab13': {
          templateUrl: 'templates/TrainSchedules.html',
          controller: 'TrainSchedules'
        }
      }
    })
	
	
					
					
                     .state('tabsController.paymentSuccess', {
                        url: '/page60',
                        views: {
                            'tab13': {
                                templateUrl: 'templates/paymentSuccess.html',
                                controller: 'paymentSuccess'
                            }
                        }
                    })
                    
					                    .state('tabsController', {
                        url: '/page20',
                        abstract: true,
                        templateUrl: 'templates/tabsController.html'
                    })


            // if none of the above states are matched, use this as the fallback
           // $urlRouterProvider.otherwise('/page5');

        });