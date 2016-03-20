angular.module('app.controllers', [])

        .controller('loginCtrl', function ($scope, $ionicModal, $timeout, $state, $http, $ionicPopup) {

//start

//form data for the login modal
            $scope.loginData = {};

//create the login modal that we will use later

            $ionicModal.fromTemplateUrl('templates/login.html', {
                scope: $scope
            }).then(function (Modal) {
                $scope.modal = modal;
            });

//login modal to close it 

            $scope.closeLogin = function () {
                $scope.modal.hide();
            };

//openthe login modal
            $scope.login = function () {
                $scope.modal.show();
            };

            $scope.doLogin = function () {



                $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainxAndroid/Topic.php').then(function (response)
                {

                    var markers = [];
                    markers = response;

                    var records = markers.data;


                    for (var i = 0; i < records.length; i++) {

                        var record = records[i];


                        if ($scope.loginData.username == record.login)
                        {
                            if ($scope.loginData.passwordq == record.password) {
                                var valueofthename = record.customerfname + " " + record.customerlname;
                                window.localStorage.setItem("name", 'done');
                                window.localStorage.setItem("useridforchat", record.id);
                                window.localStorage.setItem("usernametopay", valueofthename);
                                window.localStorage.setItem("useremail", record.login);
                                window.localStorage.setItem("usernumber", record.phoneNumber);

                                window.localStorage.setItem("userpasswordforchat", record.Password);
                                $state.transitionTo("tabsController.home");
                                break;
                            } else {


                                var alertPopup = $ionicPopup.alert({
                                    title: 'Login Error',
                                    template: 'User Name and Password not match'
                                });

                                alertPopup.then(function (res) {

                                });

                                break;
                            }
                        }

                        if (i == records.length - 1)
                        {


                            var alertPopup = $ionicPopup.alert({
                                title: 'Login Error',
                                template: 'User Name and Password not found'
                            });

                            alertPopup.then(function (res) {

                            });


                        }
                    }



                });


            };


//end

        })

        .controller('signupCtrl', function ($scope, $http, $state, $ionicPopup) {
//----

            window.localStorage.setItem("v1", 0);
            window.localStorage.setItem("v2", 0);
            window.localStorage.setItem("v3", 0);
            window.localStorage.setItem("v4", 0);


            $scope.submitform = function () {



                if (!document.getElementById('fCode').value.trim() || !document.getElementById('lCode').value.trim() || !document.getElementById('ncode').value.trim() || !document.getElementById('pcode').value.trim() || !document.getElementById('emails').value.trim()) {

                    var alertPopup = $ionicPopup.alert({
                        title: 'Empty field',
                        template: 'Please fill all information !'
                    });

                } else {

                    //********



                    if (document.getElementById('newpasscode').value == document.getElementById('cnpasswordcode').value)
                    {
                        var passwd = '';
                        var chars = '0123456789';
                        for (i = 1; i < 5; i++) {
                            var c = Math.floor(Math.random() * chars.length + 1);
                            passwd += chars.charAt(c)
                        }


                        //----

                        var currentTime = new Date();
                        var dateeofthe = currentTime.getMinutes();
                        if (dateeofthe < 10)
                        {
                            dateeofthe = "0" + dateeofthe;
                        }
                        var tim = currentTime.getHours() + "" + dateeofthe;
                        var yearr = currentTime.getFullYear();
                        var monthh = currentTime.getMonth() + 1;
                        if (monthh < 10)
                        {
                            monthh = "0" + monthh;
                        }
                        var dateof = currentTime.getDate();
                        if (dateof < 10)
                        {
                            dateof = "0" + dateof;
                        }
                        passwd = tim + "" + yearr + "" + monthh + "" + dateof + "" + passwd;




                        //--





                        $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/addCustomers?id=' + passwd + '&fname=' + document.getElementById('fCode').value + '&lname=' + document.getElementById('lCode').value + '&ncode=' + document.getElementById('ncode').value + '&pcode=' + document.getElementById('pcode').value + '&email=' + document.getElementById('emails').value + '&passwordofc=' + document.getElementById('cnpasswordcode').value).then(function (response)
                        {

                            var alertPopup = $ionicPopup.alert({
                                template: response.data
                            });
                            $state.transitionTo("signup");

                        });

                    } else {

                        var alertPopup = $ionicPopup.alert({
                            title: 'Error',
                            template: 'New Password not Match'
                        });


                    }







                    //********

                }

            };
//----
        })

        .controller('homeCtrl', function ($scope, $interval, $http) {


            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/message_list').then(function (response)
            {

                var markers = [];
                markers = response;
                var records = markers.data;
                $("tbody").empty();
                window.localStorage.setItem("remainmessage", records.length);
                for (var i = 0; i < records.length; i++) {

                    var record = records[i];
                    if (window.localStorage.getItem("useridforchat") == record.senderId) {


                        if (record.type == "receve") {

                            $("#addchatdb").append('<li class="ChatLog__entry"><p class="ChatLog__message">' + record.messageText + '</p></li>');

                        } else {
                            $("#addchatdb").append('<li class="ChatLog__entry ChatLog__entry_mine"><p class="ChatLog__message">' + record.messageText + '</p></li>');
                        }
                    }


                }

                $("#table-scroll").animate({
                    scrollTop: 10000000000
                });


            });


            $scope.incrementCounter = function () {





                $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/message_list').then(function (response)
                {

                    var markers = [];
                    markers = response;
                    var records = markers.data;
                    // $("tbody").empty();

                    if (window.localStorage.getItem("remainmessage") < records.length)
                    {
                        for (var i = window.localStorage.getItem("remainmessage"); i < records.length; i++) {

                            var record = records[i];
                            if (window.localStorage.getItem("useridforchat") == record.senderId) {


                                if (record.type == "receve") {

                                    $("#addchatdb").append('<li class="ChatLog__entry"><p class="ChatLog__message">' + record.messageText + '</p></li>');

                                } else {
                                    $("#addchatdb").append('<li class="ChatLog__entry ChatLog__entry_mine"><p class="ChatLog__message">' + record.messageText + '</p></li>');
                                }
                            }


                        }
                        window.localStorage.setItem("remainmessage", records.length);
                        $("#table-scroll").animate({
                            scrollTop: 10000000000
                        });
                    }



                });








            }

            $interval($scope.incrementCounter, 1000);


        })

        .controller('myAccountCtrl', function ($scope, $http, $state) {


            $scope.logoutthesystem = function () {

                window.localStorage.setItem("name", 0);
                window.localStorage.setItem("useridforchat", 0);
                window.localStorage.setItem("userpasswordforchat", 0);
                window.localStorage.setItem("v1", 0);
                window.localStorage.setItem("v2", 0);
                window.localStorage.setItem("v3", 0);
                window.localStorage.setItem("v4", 0);
                window.localStorage.setItem("v1", 0);
                window.localStorage.setItem("v2", 0);
                window.localStorage.setItem("v3", 0);
                window.localStorage.setItem("v4", 0);
                window.localStorage.setItem("v5", 0);
                window.localStorage.setItem("traindates", 0);
                window.localStorage.setItem("foundinup", 0);
                window.localStorage.setItem("foundinup", 0);
                window.localStorage.setItem("trainstartandend", 0);
                window.localStorage.setItem("train1number", 0);
                window.localStorage.setItem("train1starttime", 0);
                window.localStorage.setItem("train1startend", 0);
                window.localStorage.setItem("train2number", 0);
                window.localStorage.setItem("bookingvaluesaa", 0);
                window.localStorage.setItem("bookingvaluesaa", 0);
                window.localStorage.setItem("train1price", 0);
                window.localStorage.setItem("train1class", 0);
                window.localStorage.setItem("arraydata", 0);
                window.localStorage.setItem("arraydatasize", 0);
                window.localStorage.setItem("train1class", 0);
                window.localStorage.setItem("arraydata", 0);
                window.localStorage.setItem("arraydatasize", 0);
                window.localStorage.setItem("selectitemid", 0);
                window.localStorage.setItem("travelguideendstation", 0);
                window.localStorage.setItem("v1", 0);
                window.localStorage.setItem("v1", 0);
                window.localStorage.setItem("v2", 0);
                window.localStorage.setItem("v2", 0);
                window.localStorage.setItem("v3", 0);
                window.localStorage.setItem("v3", 0);
                window.localStorage.setItem("v3", 0);
                window.localStorage.setItem("v4", 0);
                window.localStorage.setItem("v4", 0);
                window.localStorage.setItem("v5", 0);
                window.localStorage.setItem("v5", 0);


                $state.transitionTo("login");
            }

            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/customer_list').then(function (response)
            {
                var markers = [];
                markers = response;
                var records = markers.data;


                for (var i = 0; i < records.length; i++) {

                    var record = records[i];


                    if (window.localStorage.getItem("useridforchat") == record.customerId)
                    {

                        $("#carddetails").append('Name: ' + record.customerfname + " " + record.customerlname + '</br>Email: ' + record.email + '</br>Phone: ' + record.phoneNumber + '</br>NIC: ' + record.Nic);
                    }


                }



            });



        })

        .controller('myAccountEditCtrl', function ($scope, $ionicPopup, $http) {

            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/customer_list').then(function (response)
            {
                var markers = [];
                markers = response;
                var records = markers.data;


                for (var i = 0; i < records.length; i++) {

                    var record = records[i];


                    if (window.localStorage.getItem("useridforchat") == record.customerId)
                    {

                        document.getElementById('fCode').value = record.customerfname;
                        document.getElementById('lCode').value = record.customerlname;
                        document.getElementById('emails').value = record.email;
                        document.getElementById('pcode').value = record.phoneNumber;
                        document.getElementById('ncode').value = record.Nic;

                    }


                }



            });



            window.localStorage.setItem("v1", 0);
            window.localStorage.setItem("v2", 0);
            window.localStorage.setItem("v3", 0);
            window.localStorage.setItem("v4", 0);
            window.localStorage.setItem("v5", 0);

            $scope.submitform = function () {

                var v1 = window.localStorage.getItem("v1");
                var v2 = window.localStorage.getItem("v2");
                var v3 = window.localStorage.getItem("v3");
                var v4 = window.localStorage.getItem("v4");
                var k = Number(v1) + Number(v2) + Number(v3) + Number(v4);

                if (!document.getElementById('fCode').value.trim() || !document.getElementById('lCode').value.trim() || !document.getElementById('ncode').value.trim() || !document.getElementById('pcode').value.trim() || !document.getElementById('emails').value.trim()) {

                    var alertPopup = $ionicPopup.alert({
                        title: 'Data Not match',
                        template: 'Please check input data again !'
                    });

                } else {

                    //********


                    if (k == 4)
                    {


                        var str = document.getElementById("emails").value;

                        var filter = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
                        if (filter.test(str))
                        {

                            //send data
                            if (!document.getElementById('cpasswordcode').value.trim() || !document.getElementById('newpasscode').value.trim() || !document.getElementById('cnpasswordcode').value.trim())
                            {


                                $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/updateCustomers?id=' + window.localStorage.getItem("useridforchat") + '&fname=' + document.getElementById('fCode').value + '&lname=' + document.getElementById('lCode').value + '&ncode=' + document.getElementById('ncode').value + '&pcode=' + document.getElementById('pcode').value + '&email=' + document.getElementById('emails').value + '&passwordofc=' + window.localStorage.getItem("userpasswordforchat")).then(function (response)
                                {
                                    var alertPopup = $ionicPopup.alert({
                                        title: 'Data Insert',
                                        template: 'Data save'
                                    });


                                });


                            } else {
                                //--
                                if (document.getElementById('cpasswordcode').value == window.localStorage.getItem("userpasswordforchat")) {
                                    if (document.getElementById('newpasscode').value == document.getElementById('cnpasswordcode').value)
                                    {

                                        $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/updateCustomers?id=' + window.localStorage.getItem("useridforchat") + '&fname=' + document.getElementById('fCode').value + '&lname=' + document.getElementById('lCode').value + '&ncode=' + document.getElementById('ncode').value + '&pcode=' + document.getElementById('pcode').value + '&email=' + document.getElementById('emails').value + '&passwordofc=' + document.getElementById('cnpasswordcode').value).then(function (response)
                                        {
                                            var alertPopup = $ionicPopup.alert({
                                                title: 'Data Insert',
                                                template: 'Data save'
                                            });


                                        });

                                    } else {

                                        var alertPopup = $ionicPopup.alert({
                                            title: 'Error',
                                            template: 'New Password not Match'
                                        });


                                    }
                                } else {
                                    var alertPopup = $ionicPopup.alert({
                                        title: 'Error',
                                        template: 'Current Password is Wrong'
                                    });
                                }
                                //--
                            }
                        } else
                        {
                            var alertPopup = $ionicPopup.alert({
                                title: 'Data Not match',
                                template: 'Please check input data again !'
                            });
                        }



                    } else {

                        var alertPopup = $ionicPopup.alert({
                            title: 'Data Not match',
                            template: 'Please check input data again !'
                        });


                    }

                    //********

                }

            };


        })

        .controller('informationCtrl', function ($scope, $http, $interval) {



            $scope.chatsendMessage = function () {




                var myVar = setTimeout(function ()
                {
                    $scope.$apply();

                }, 500);

                var currentTime = new Date();
                var dateeofthe = currentTime.getMinutes();
                if (dateeofthe < 10)
                {
                    dateeofthe = "0" + dateeofthe;
                }
                var tim = currentTime.getHours() + ":" + dateeofthe;
                var yearr = currentTime.getFullYear();
                var monthh = currentTime.getMonth() + 1;
                if (monthh < 10)
                {
                    monthh = "0" + monthh;
                }
                var dateof = currentTime.getDate();
                if (dateof < 10)
                {
                    dateof = "0" + dateof;
                }
                var timeYear = tim + " " + yearr + "-" + monthh + "-" + dateof;

                $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/profileManage/insertMessageAndroid?id=' + window.localStorage.getItem("useridforchat") + '&textofmessage=' + $scope.chat.message + '&time=' + timeYear).then(function (response) {

                    $scope.chat.message = "";
                });


            };

        })
        .controller('findMyTrainCtrl', function ($scope, $http) {
            $scope.showroute1 = false;
            $scope.showroute2 = false;
            $scope.showroute3 = false;
            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/locationFinder/navigation_root').then(function (response) {

                $scope.rooting = response.data;
            });


            $scope.getdetailvalue = function (x, y) {


                //	alert(document.getElementById("finddatavalue").value);
                window.localStorage.setItem("traindates", document.getElementById("finddatavalue").value);

                window.localStorage.setItem("foundinup", 0);
                var formaddress = x.split(/~/);
                formaddress[0];  //from
                formaddress[1];	//FROM ROOT ID	
                var toaddress = y.split(/~/);
                toaddress[0];	//To		
                toaddress[1];	//from root to




                var str = formaddress[1];
                var str1 = toaddress[1];

                var a1 = new Array();
                var a2 = new Array();

                a1 = str.split(",");
                a2 = str1.split(",");

/// display elements  ///

                for (i = 0; i < a1.length; i++)

                {
//alert(a1[i]);
                    for (ii = 0; ii < a2.length; ii++)

                    {
//alert(a1[i]);
                        if (a1[i] == a2[ii])
                        {
                            // 	alert(a2[ii]+" -1");
                            window.localStorage.setItem("foundinup", a2[ii]);
                            $scope.showroute1 = true;
                            $scope.showroute3 = true;
                            $scope.showroute2 = false;
                            $scope.code = formaddress[0] + " - " + toaddress[0];
                            var showshow = formaddress[0] + " - " + toaddress[0];
                            window.localStorage.setItem("trainstartandend", showshow);
                            window.localStorage.setItem("trainstartplace", formaddress[0]);
                            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/reservationManagement/select_alltrains?traintrack=' + window.localStorage.getItem("foundinup")).then(function (response) {

                                $scope.trains1 = response.data;

                            });

                            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/reservationManagement/select_alltrains?traintrack=' + window.localStorage.getItem("foundinup")).then(function (response) {

                                $scope.trains2 = "";

                            });


                            break;
                        } else {

                            //
                            $scope.trains1 = "";
                            $scope.showroute1 = false;
                            $scope.showroute2 = true;
                            $scope.code2 = "no train";


                            //

                            //	alert(a2[ii]);
                        }
//
                    }
//
                }



            }



            //------
            $scope.train1select = function (x, y, z, w) {

                window.localStorage.setItem("train1number", x);
                window.localStorage.setItem("train1starttime", y);
                window.localStorage.setItem("train1startend", z);
                window.localStorage.setItem("trainnameselect", w);

            }
            //          $scope.train2select = function (xx) {
            //            window.localStorage.setItem("train2number", xx);
            //      }

        })

        .controller('seatReservations', function ($scope, $http, $rootScope) {



            var bookingvalues = [];
            var changevalue = 0;

            $scope.lol = 'http://' + window.localStorage.getItem("ipaddress") + '/trainxAndroid/icon1.jpg';
            $scope.pol = 'http://' + window.localStorage.getItem("ipaddress") + '/trainxAndroid/icon2.jpg';
            $scope.onTap = function (y, x, z) {
                if (z == 0) {
                    if (changevalue == 0) {
                        document.getElementById("myImg" + y + x).src = 'http://' + window.localStorage.getItem("ipaddress") + '/trainxAndroid/icon3.jpg';
//	$scope.lol = 'http://' + window.localStorage.getItem("ipaddress") + '/icon2.jpg';
                        var dd = y + x;
                        bookingvalues.push(dd);
                        changevalue = 1;
                        window.localStorage.setItem("bookingvaluesaa", bookingvalues);
                    } else {
                        document.getElementById("myImg" + y + x).src = 'http://' + window.localStorage.getItem("ipaddress") + '/trainxAndroid/icon2.jpg';
                        changevalue = 0;
                        var dd = y + x;

                        var i = bookingvalues.indexOf(dd);
                        if (i != -1) {
                            bookingvalues.splice(i, 1);
                            window.localStorage.setItem("bookingvaluesaa", bookingvalues);
                        }

                    }
                }
            };









            //  window.localStorage.getItem("train1number");
            //   window.localStorage.getItem("train2number");
            //	document.getElementById("findclassvalue").value;



            $scope.showSelectValue = function (mySelect) {
                //	alert(mySelect);

                if (mySelect == "1st Class")
                {
                    bookingvalues = [];
                    ///----
                    $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/reservationManagement/select_trainsseat?trainnumber=' + window.localStorage.getItem("train1number")).then(function (response) {

                        var markers = [];
                        markers = response;
                        var records = markers.data;
                        window.localStorage.setItem("train1price", records[0].firstclassprice);
                        window.localStorage.setItem("train1class", "1st Class");

                        var record = records[0].firstclassSeatNo;
                        // var record2 = records[0].secondclassSeatNo;
                        //alert(record+" - "+record2);
                        var x = parseInt(record / 4);


                        var jsonObj = [];



                        //	alert(x);
                        //  getbookingtoid

                        //---		, $rootScope		 

                        $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/reservationManagement/getbookingtoid?trainnumber=' + window.localStorage.getItem("train1number")).then(function (response) {
                            var dd = "";
                            var markers = [];
                            markers = response;
                            var records = markers.data;
                            for (var i = 0; i < records.length; i++) {

                                var record = records[i];
                                if (parseInt(record.classtrain) == 1 && record.date == window.localStorage.getItem("traindates")) {
                                    dd = dd + "-" + record.seatid;
									alert();

                                }
                                // $rootScope.addingseat =record.seatid;

                            }
                            window.localStorage.setItem("arraydata", dd);
                            window.localStorage.setItem("arraydatasize", records.length);

                        });
//alert(window.localStorage.getItem("arraydata"));					  
//---					  
                        var loopingseat = window.localStorage.getItem("arraydata").split(/-/);


                        for (y = 0; y < x; y++) {

                            var a = '1' + y;
                            var b = '2' + y;
                            var c = '3' + y;
                            var d = '4' + y;

                            //	alert(a+" "+b+" "+c+" "+d);
                            var aa = '0';
                            var bb = '0';
                            var cc = '0';
                            var dd = '0';
                            for (var i = 0; i < window.localStorage.getItem("arraydatasize"); i++) {
                                //   alert(loopingseat[i]);  
                                if (loopingseat[i] == a) {
                                    aa = '1';
                                    //	alert(loopingseat[i]);
                                } else if (loopingseat[i] == b) {
                                    bb = '1';
                                    //	alert(loopingseat[i]);
                                } else if (loopingseat[i] == c) {
                                    cc = '1';
                                    //	alert(loopingseat[i]);
                                } else if (loopingseat[i] == d) {
                                    dd = '1';
                                    //	alert(loopingseat[i]);
                                }

                            }



                            jsonObj.push({
                                id: y,
                                name: y,
                                seat1: aa,
                                seat2: bb,
                                seat3: cc,
                                seat4: dd,
                            });

                            //	$("#seatshower").append('<div class="row"><div class="col" onclick="myFunction(this)">a</div><div class="col" onclick="myFunction(this)">b</div><div class="col" onclick="myFunction(this)"> </div><div class="col" onclick="myFunction(this)">c</div><div class="col" onclick="myFunction(this)">d</div></div>');		
                        }

                        $scope.valuevalue = jsonObj;
                    });
///----	
                } else
                {
                    bookingvalues = [];
                    window.localStorage.setItem("train1class", "2nd Class");
                    ///----
                    $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/reservationManagement/select_trainsseat?trainnumber=' + window.localStorage.getItem("train1number")).then(function (response) {

                        var markers = [];
                        markers = response;
                        var records = markers.data;


                        var record = records[0].secondclassSeatNo;
                        // var record2 = records[0].secondclassSeatNo;
                        //alert(record+" - "+record2);
                        var x = parseInt(record / 4);


                        var jsonObjq = [];



                        //	alert(x);
                        //  getbookingtoid

                        //---		, $rootScope		 

                        $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/reservationManagement/getbookingtoid?trainnumber=' + window.localStorage.getItem("train1number")).then(function (response) {
                            var dd = "";
                            var markers = [];
                            markers = response;
                            var records = markers.data;
                            for (var i = 0; i < records.length; i++) {

                                var record = records[i];
                                if (parseInt(record.classtrain) == 2 && record.date == window.localStorage.getItem("traindates")) {
                                    dd = dd + "-" + record.seatid;
                                }
                                // $rootScope.addingseat =record.seatid;
                                // alert(record.seatid);
                            }
                            window.localStorage.setItem("arraydata", dd);
                            window.localStorage.setItem("arraydatasize", records.length);

                        });
//alert(window.localStorage.getItem("arraydata"));					  
//---					  
                        var loopingseat = window.localStorage.getItem("arraydata").split(/-/);


                        for (y = 0; y < x; y++) {

                            var a = '1' + y;
                            var b = '2' + y;
                            var c = '3' + y;
                            var d = '4' + y;

                            //	alert(a+" "+b+" "+c+" "+d);
                            var aa = '0';
                            var bb = '0';
                            var cc = '0';
                            var dd = '0';
                            for (var i = 0; i < window.localStorage.getItem("arraydatasize"); i++) {
                                //   alert(loopingseat[i]);  
                                if (loopingseat[i] == a) {
                                    aa = '1';
                                    //	alert(loopingseat[i]);
                                } else if (loopingseat[i] == b) {
                                    bb = '1';
                                    //	alert(loopingseat[i]);
                                } else if (loopingseat[i] == c) {
                                    cc = '1';
                                    //	alert(loopingseat[i]);
                                } else if (loopingseat[i] == d) {
                                    dd = '1';
                                    //	alert(loopingseat[i]);
                                }

                            }



                            jsonObjq.push({
                                id: y,
                                name: y,
                                seat1: aa,
                                seat2: bb,
                                seat3: cc,
                                seat4: dd,
                            });

                            //	$("#seatshower").append('<div class="row"><div class="col" onclick="myFunction(this)">a</div><div class="col" onclick="myFunction(this)">b</div><div class="col" onclick="myFunction(this)"> </div><div class="col" onclick="myFunction(this)">c</div><div class="col" onclick="myFunction(this)">d</div></div>');		
                        }

                        $scope.valuevalue = jsonObjq;
                    });
///----	
                }
            }




        })


        .controller('reservationDetails', function ($scope, $http,$state) {
            //alert(window.localStorage.getItem("bookingvaluesaa"));


            var gg = window.localStorage.getItem("bookingvaluesaa").split(',');
            //alert(gg.length);s

            var valueofthe = parseInt(gg.length) * parseInt(window.localStorage.getItem("train1price"));

            $scope.trainNumber = window.localStorage.getItem("train1number");
            $scope.dateoftrain = window.localStorage.getItem("traindates");
            $scope.starttimeoftrain = window.localStorage.getItem("train1starttime") + " - " + window.localStorage.getItem("train1startend");
            $scope.seatnumbers = window.localStorage.getItem("bookingvaluesaa");
            $scope.seatprice = window.localStorage.getItem("train1price");
            $scope.trainstartend = window.localStorage.getItem("trainstartandend");
            $scope.trainclass = window.localStorage.getItem("train1class");
            $scope.totalprice = valueofthe;

//page20/page60
            $scope.openInAppBrowser = function ()
            {


                // Open in app browser
                var ref = window.open('http://' + window.localStorage.getItem("ipaddress") + '/paypalTest/index.html', '_blank', 'location=yes');

                var x = 0;
                ref.addEventListener('loadstop', function (event) {
                    x = x + 1;
//alert(x);
//if(x == 4){
                    //window.localStorage.setItem("paypaladdress",event.url);
//}
//alert('stop: ' + event.url);
                });

                ref.addEventListener('exit', function () {
                    var valueclas;
                    if (window.localStorage.getItem("train1class") == "1st Class") {
                        valueclas = 1;
                    } else {
                        valueclas = 2;
                    }



                    if (parseInt(x) == 5)
                    {

                        //start 		  
                        //booking seat
                        for (var i = 0; i < gg.length; i++)
                        {
                            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/reservationManagement/addbookingseat?trainid=' + window.localStorage.getItem("train1number") + '&cusid=' + window.localStorage.getItem("useridforchat") + '&seatid=' + gg[i] + '&date=' + window.localStorage.getItem("traindates") + '&classtrain=' + valueclas).then(function (response) {


                            });

                        }

                        //send to payment db	   

                        var paymentidto = '';
                        var chars = '0123456789qwertyuioplkjhgfdsazxcvbnmZXCVBNMLKJHGFDSAQWERTYUIOP';
                        for (i = 1; i < 5; i++) {
                            var c = Math.floor(Math.random() * chars.length + 1);
                            paymentidto += chars.charAt(c)
                        }


                        //----

                        var currentTime = new Date();
                        var dateeofthe = currentTime.getMinutes();
                        if (dateeofthe < 10)
                        {
                            dateeofthe = "0" + dateeofthe;
                        }
                        var tim = currentTime.getHours() + "" + dateeofthe;
                        var yearr = currentTime.getFullYear();
                        var monthh = currentTime.getMonth() + 1;
                        if (monthh < 10)
                        {
                            monthh = "0" + monthh;
                        }
                        var dateof = currentTime.getDate();
                        if (dateof < 10)
                        {
                            dateof = "0" + dateof;
                        }
                        paymentidto = tim + "" + yearr + "" + monthh + "" + dateof + "" + paymentidto;
                        var thedayof = yearr + "-" + monthh + "-" + dateof;

                        $http.get('http://' + window.localStorage.getItem("ipaddress") +
						'/trainX/paymentHandel/addpayment?paymentID=' + paymentidto +
						'&custID=' + window.localStorage.getItem("useridforchat") +
						'&cusName=' + window.localStorage.getItem("usernametopay") +
						'&trainID=' + window.localStorage.getItem("train1number") +
						'&reservedTrain=' + window.localStorage.getItem("trainnameselect") +
						'&Depature=' + window.localStorage.getItem("trainstartplace") +
						'&classof=' + window.localStorage.getItem("train1class") +
						'&ticketPrice=' + valueofthe + 
						'&paymentDate=' + thedayof + 
						'&TelephoneNumber=' + window.localStorage.getItem("usernumber") + 
						'&customerEmail=' + window.localStorage.getItem("useremail")).then(function (response) {

                            //trainstartplace
alert(response.data);
                        });


                        //end  


                        $state.transitionTo("tabsController.paymentSuccess");
                    } else
                    {
                        sweetAlert(
                                'Sorry,',
                                'your payment was not successful',
                                'error'
                                )
                    }


                    //  	$state.transitionTo("tabsController.paymentSuccess");

                    //	alert(event.url); 
                });




            };





        })


        .controller('paymentMethod', function ($scope) {

        })

        .controller('paymentSuccess', function ($scope) {

        })


        .controller('travelGuide', function ($scope, $http) {
            $scope.ipaddressof = window.localStorage.getItem("ipaddress");










//db connect 
            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/travelGuide/Location_list').then(function (response) {

                $scope.names = response.data;
            });
            $scope.getidoflocation = function (x) {
                // alert(x);
                window.localStorage.setItem("selectitemid", x);
            };
//-----
            $scope.reloaddata = function (x) {

                $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/travelGuide/Location_listsearch?wordof=' + x).then(function (response) {

                    $scope.namesq = response.data;
                });
            };

        })

        .controller('PlacesOfTravelG', function ($scope, $http) {
//	alert(window.localStorage.getItem("idofitem"));

            window.localStorage.getItem("selectitemid");


            //data

            $http.get('http://' + window.localStorage.getItem("ipaddress") + '/trainX/travelGuide/Location_list').then(function (response) {

                var markers = [];
                markers = response;
                var records = markers.data;


                for (var i = 0; i < records.length; i++) {

                    var record = records[i];


                    if (window.localStorage.getItem("selectitemid") == record.id)
                    {

                        window.localStorage.setItem("travelguideendstation", record.nearestRS);
                        $("#appendthedataselect").append('<h1>&nbsp&nbsp&nbsp' + record.Locations + '</h1>');
                        $("#appendthedataselect").append('<p><center>Nearset Station :- ' + record.nearestRS + '</center></p>');

                        $("#appendthedataselect2").append('<img class="full-image" src="http://' + window.localStorage.getItem("ipaddress") + '/trainX/views/travelGuide/places/' + record.Photo + '" height="150">');
                        $("#appendthedataselect2").append('<p>' + record.Description + '</p>');

//
                        prettyPrint();
                        map = new GMaps({
                            div: '#map',
                            lat: 6.9344,
                            lng: 79.8428
                        });
                        //   $('#geocoding_form').submit(function(e){
                        //     e.preventDefault();
                        GMaps.geocode({
                            address: record.Locations,
                            callback: function (results, status) {
                                if (status == 'OK') {
                                    var latlng = results[0].geometry.location;
                                    map.setCenter(latlng.lat(), latlng.lng());
                                    map.addMarker({
                                        lat: latlng.lat(),
                                        lng: latlng.lng()
                                    });
                                }
                            }
                        });
                        //    });

//	

                    }


                }



            });






        })

        .controller('TrainSchedules', function ($scope) {

        })


        .controller('myTicketscnt', function ($scope) {


            $scope.trainNumber = window.localStorage.getItem("train1number");
            $scope.dateoftrain = window.localStorage.getItem("traindates");
            $scope.starttimeoftrain = window.localStorage.getItem("train1starttime") + " - " + window.localStorage.getItem("train1startend");
            $scope.seatnumbers = window.localStorage.getItem("bookingvaluesaa");
            $scope.seatprice = window.localStorage.getItem("train1price");
            $scope.trainstartend = window.localStorage.getItem("trainstartandend");
            $scope.trainclass = window.localStorage.getItem("train1class");

            $scope.openInAppBrowser = function ()
            {
                // Open in app browser
                window.open('http://www.gpsui.net/zoom.php?lat=6.90826&lon=79.935013&z=16&addr=New+Kandy+Rd%2C+Sri+Lanka', '_blank');
            };


        })

        .controller('memebereditdetail', ['$scope', function ($scope) {

                $scope.changefname = function () {
                    var code, i, len;
                    var TCode = document.getElementById('fCode').value;
                    len = TCode.length;
                    for (i = 0; i < len; i++) {

                        code = TCode.charCodeAt(i);

                        if ((code > 64 && code < 91) || (code > 96 && code < 123))
                        {

                            window.localStorage.setItem("v1", 1);

                        } else
                        {
                            window.localStorage.setItem("v1", 0);
                            return true;
                            break;
                        }
                    }
                };

                //lname  

                $scope.changelname = function () {


                    var code, i, len;
                    var TCode = document.getElementById('lCode').value;
                    len = TCode.length;
                    for (i = 0; i < len; i++) {

                        code = TCode.charCodeAt(i);

                        if ((code > 64 && code < 91) || (code > 96 && code < 123))
                        {
                            window.localStorage.setItem("v2", 1);
                        } else
                        {
                            window.localStorage.setItem("v2", 0);
                            return true;
                            break;
                        }
                    }




                };

                //nic

                $scope.changenic = function () {


                    var code, i, len;
                    var TCode = document.getElementById('ncode').value;
                    for (i = 0, len = TCode.length; i < len; i++) {

                        code = TCode.charCodeAt(i);

                        if (code > 47 && code < 58 && i < 9) {

                            window.localStorage.setItem("v3", 1);
                        } else {
                            if ((code == 86 || code == 118) && i == 9)
                            {
                                window.localStorage.setItem("v3", 1);
                            } else
                            {
                                window.localStorage.setItem("v3", 0);
                                return true;
                                break;
                            }

                        }

                    }
                };

                //phone

                $scope.changephone = function () {


                    var code, i, len;
                    var TCode = document.getElementById('pcode').value;
                    for (i = 0, len = TCode.length; i < len; i++) {

                        code = TCode.charCodeAt(i);

                        if (code > 47 && code < 58 && i < 10) {

                            window.localStorage.setItem("v4", 1);
                        } else {
                            window.localStorage.setItem("v4", 0);
                            return true;
                            break;


                        }

                    }
                };

                //password

                $scope.changepasswordabc = function () {

                    var x = window.localStorage.getItem("v5");
                    if (x == 0) {
                        window.localStorage.setItem("v5", 1);
                        $scope.changepasswordabcd = true;
                    } else {
                        window.localStorage.setItem("v5", 0);
                        $scope.changepasswordabcd = false;
                    }


                };




                $scope.newpasswordcheck = function () {

                    var x = window.localStorage.getItem("v5");
                    if (x == 1) {
                        var fpassword = document.getElementById('newpasscode').value;
                        var spassword = document.getElementById('cnpasswordcode').value;
                        if (fpassword == spassword) {

                        } else {
                            return true;
                        }
                    }


                };

                $scope.newpasswordcheckq = function () {


                    var fpassword = document.getElementById('newpasscode').value;
                    var spassword = document.getElementById('cnpasswordcode').value;
                    if (fpassword == spassword) {

                    } else {
                        return true;
                    }


                };
            }]);