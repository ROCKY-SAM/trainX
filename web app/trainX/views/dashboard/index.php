<!doctype html>
<html lang="en">
    <head>



        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- mdl-->
        <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=destruction">



        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <link rel="stylesheet" href="/trainX/public/material.min.css">
        <link rel="stylesheet" href="/trainX/public/styles.css">

        <link href="/trainX/public/css/roboto.min.css" rel="stylesheet">
        <link href="/trainX/public/css/material.min.css" rel="stylesheet">
        <link href="/trainX/public/css/ripples.min.css" rel="stylesheet">
        <link href="/trainX/public/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="/trainX/public/css/docs.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="/trainX/public/js/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/trainX/public/css/sweetalert.css">


    </head>

    <body>

        <?php Session::init(); ?>




        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header id="headerbackcolor" class="demo-header mdl-layout__header ">
                <div class="mdl-layout__header-row">



                    <?php if (Session::get('loggedIn') == false): ?>
                    <?php endif; ?>	
                    <?php if (Session::get('loggedIn') == true): ?>

                        <span class="mdl-layout-title">
                            <font size="7" class="font-effect-destruction">TrainXLife</font>
                        </span>




                        <div class="mdl-layout-spacer"></div>
                        <script type="text/javascript">
                            tday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
                            tmonth = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

                            function GetClock() {
                                var d = new Date();
                                var nday = d.getDay(), nmonth = d.getMonth(), ndate = d.getDate(), nyear = d.getYear();
                                if (nyear < 1000)
                                    nyear += 1900;
                                var nhour = d.getHours(), nmin = d.getMinutes(), nsec = d.getSeconds(), ap;

                                if (nhour == 0) {
                                    ap = " AM";
                                    nhour = 12;
                                } else if (nhour < 12) {
                                    ap = " AM";
                                } else if (nhour == 12) {
                                    ap = " PM";
                                } else if (nhour > 12) {
                                    ap = " PM";
                                    nhour -= 12;
                                }

                                if (nmin <= 9)
                                    nmin = "0" + nmin;
                                if (nsec <= 9)
                                    nsec = "0" + nsec;

                                document.getElementById('clockbox').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear + " " + nhour + ":" + nmin + ":" + nsec + ap + "";
                            }

                            window.onload = function () {
                                GetClock();
                                setInterval(GetClock, 1000);
                            }
                        </script>
						
						<a class="mdl-navigation__link" href="javascript:void(0)" id="message_page1"><i class="mdl-color-text--blue-grey-50 material-icons" role="presentation">forum</i><span class="badge"><li id="newmessagechatnumber"></li></span></a>
						
						
						
                        <div id="clockbox" class="mdl-navigation__link"></div>

                    </div>
                </header>
                <div  class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-800 mdl-color-text--blue-grey-50">

                    <header class="demo-drawer-header">


                        <p id="imageloader"> 


                        </p>

                        <div class="demo-avatar-dropdown">
                            <span id="usertype"></span>
                            <div class="mdl-layout-spacer"></div>
                            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <i class="material-icons" role="presentation">arrow_drop_down</i>
                                <span class="visuallyhidden">Accounts</span>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                                <li class="mdl-menu__item"><p style="text-decoration: none;" class="profileedit">Profile Settings</p></li>
                                <li class="mdl-menu__item" ><p style="text-decoration: none;" class="coloredit">Color Settings</p></li>
                                <a href="/trainX/dashboard/logout"><li class="mdl-menu__item"><i class="material-icons">arrow_back</i>Logout<?php endif; ?></li></a>
                        </ul>
                    </div>
                </header>

                <nav id="sidebackcolor" class="demo-navigation mdl-navigation ">

                    <div id="loadOnlyPart" ></div>






                    <div class="mdl-layout-spacer"></div>
                </nav>
            </div>


            <main class="mdl-layout__content mdl-color--grey-200" >

                <div class="col-md-12" id="subloader2" >






                </div>
            </main>
        </div>




        <!--  <script src="/trainX/public/material.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- mdl -->
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="/trainX/public/js/bootstrap-colorpicker.js"></script>
        <script src="/trainX/public/js/docs.js"></script>



        <style>
            a{
                text-decoration: none;
            }
            a:hover
            {
                color:white;
                text-decoration:none;
                cursor:pointer;
            } 
        </style>






        <!-- start of model color change-->

        <div class="modal fade" id="myModalcolor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><legend>Edit Page Style</legend></h4>

                    </div>
                    <form class="form-horizontal" id="updatecolor" action="profileManage/color_update" method="post">
                        <div class="modal-body">

                            <fieldset>




                                <div class="form-group">
                                    <label for="shiftid" class="col-lg-4 control-label">Header Colour Change</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" id="headercolorchange" value="<?php echo Session::get('headercolor'); ?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="shiftid" class="col-lg-4 control-label">Side Bar Colour Change</label>
                                    <div class="col-lg-7">
                                        <input type="text" class="form-control" id="sidebarcolorchange" value="<?php echo Session::get('sidecolor'); ?>" />
                                    </div>
                                </div>


                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" id ="profilecolor" class="btn btn-primary">Save changes</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>




        <!-- start of model profile settings-->

        <div class="modal fade" id="myModalprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><legend>Edit Profile Settings</legend></h4>

                    </div>
                    <form class="form-horizontal" id="updateprofile_form" action="profileManage/profile_update" onsubmit="return submitForm();" method="post" >
                        <div class="modal-body">

                            <fieldset>


                                <div class="col-lg-3" id="profilepic">


                                    </br></br>
                                </div>

                                <div class="form-group">

                                    <div class="col-lg-3">

                                        <label for="file" class="control-label">User Profile</label>

                                    </div>

                                    <div class="col-lg-5" id="wrapper">


                                        <input type="file" id="file" name="file">
                                        <input type="hidden" id="profileimage" name="profileimage">
                                    </div>



                                    </br></br></br>
                                    <div class="col-lg-3">

                                        <label for="2" class="control-label">User Name</label>

                                    </div>

                                    <div class="col-lg-5" id="gettheusername">


                                    </div>

                                    </br></br></br>
                                    <div class="col-lg-3">

                                        <label for="2" class="control-label">User Password</label>

                                    </div>

                                    <div class="col-lg-5">
                                        <a class="btn btn-raised btn-danger form-control" id="passwordchanger" >  Change </a>

                                    </div>

                                    <div id="hideandshow">					

                                        <div class="col-lg-4"><label  class="control-label">Current Password</label></div>
                                        <div class="col-lg-4"><input type="password" class="form-control" id="currentpassword"  />
                                            <p id="cupasswordchecker" style="color: red;" align="center"></p>
                                            <p id="cupasswordchecker1"></p>
                                        </div>



                                        <div class="col-lg-4"><label  class="control-label">New Password</label></div>
                                        <div class="col-lg-4"><input type="password" class="form-control"  id="newpassword"  /></br>
                                        </div>


                                        <div class="col-lg-4"><label  class="control-label">Confirm Password</label></div>
                                        <div class="col-lg-4"><input type="password" class="form-control"  id="confirmpassword"  />
                                            <p id="cupasswordchecker2" style="color: red;" align="center"></p>
                                            <p id="cupasswordchecker3"></p>

                                        </div>


                                    </div>

                                </div>






                            </fieldset>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" id ="profileupdate"  class="btn btn-primary">Save changes</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>


        <script>


            $('#headercolorchange').colorpicker().on('changeColor.colorpicker', function (event) {

                document.getElementById("headerbackcolor").style.backgroundColor = event.color.toHex();


            });

            $('#sidebarcolorchange').colorpicker().on('changeColor.colorpicker', function (event) {

                document.getElementById("sidebackcolor").style.backgroundColor = event.color.toHex();


            });
        </script>




        <script type="text/javascript">

            $(document).ready(function () {
window.localStorage.setItem("logginuserid",'<?php echo Session::get('idNumber'); ?>');
                var dbpassword;
                var userpassword;
                $.getJSON('profileManage/users_list', function (data) {

                    var len = data.length;

                    for (x = 0; x < len; x++) {


                        if (data[x].idNumber == '<?php echo Session::get('idNumber'); ?>') {

                            $('#imageloader').append('<img src="/trainX/views/profileManage/propic/' + data[x].image + '" class="demo-avatar"> <?php echo Session::get('fname'); ?> <?php echo Session::get('lname'); ?>');


                            $('#wrapper').append('<input readonly="" class="form-control floating-label" placeholder="" type="text" value="' + data[x].image + '"  id="upic">');
                            $('#profilepic').append('<img src="/trainX/views/profileManage/propic/' + data[x].image + '"  class="img-responsive img-rounded">');
                            $('#profilepic').append('<img src="/trainX/public/images/2.jpg"  class="img-responsive img-rounded">');
                            $('#profilepic').append('<img src="/trainX/public/images/2.jpg"  class="img-responsive img-rounded">');
                            $('#profilepic').append('<img src="/trainX/public/images/2.jpg" id="hideandshow1" class="img-responsive img-rounded">');
                            $('#profilepic').append('<img src="/trainX/public/images/2.jpg" id="hideandshow1" class="img-responsive img-rounded">');

                            $('#gettheusername').append('<input type="text" class="form-control" name="2" id="usernameid" value="' + data[x].login + '" />');
                            dbpassword = data[x].password;
                            userpassword = data[x].password;

                            document.getElementById("sidebackcolor").style.backgroundColor = data[x].sidecolor;
                            document.getElementById("headerbackcolor").style.backgroundColor = data[x].headercolor;
                            document.getElementById("profileimage").value = data[x].image;

                        }
                    }
                });

                $("#wrapper").on("change", "#file", function () {

                    var username = $("#file").val();

                    var fields = username.split("fakepath\\");
                    var name = fields[1];
                    document.getElementById("profileimage").value = name;
                });




                $('#hideandshow').hide();
                $('#hideandshow1').hide();
                $('#cupasswordchecker1').show();
                $('#cupasswordchecker').hide();

                $('#cupasswordchecker3').show();
                $('#cupasswordchecker2').hide();


                var test = '<?php echo Session::get('role'); ?>';
                if (test == "admin") {

                    $('#usertype').append('Admin');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="profile"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">account_box</i>Profile Management</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="location"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">add_location</i>Location Identification</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="travel"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">directions</i>Travel Guide</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="reservation"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Reservation</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="payment"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">payment</i>Payment Handling</a>');
                } else if (test == "profileManage") {
                    $('#usertype').append('Profile Manager');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="message_page"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">mail_outline</i>Messages</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="customer_page"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">people_outline</i>Customer Management</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="admin_page"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">person_outline</i>Admin Management</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="user_report_page"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Report</a>');

                } else if (test == "locationfind") {
                    $('#usertype').append('Location Idintification');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="clientInform"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">call</i>Client Inform</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="location_identification"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">add_location</i>Location Idintification</a>');                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="travel"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">directions</i>Travel Guide</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="reservation"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Reservation</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="payment"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">payment</i>Payment Handling</a>');
                } else if (test == "travelGuide") {
                    $('#usertype').append('Travel Guide');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="Locations"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">add_location</i>Locations</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="travel"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">directions</i>Travel Guide</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="reservation"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Reservation</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="payment"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">payment</i>Payment Handling</a>');
                } else if (test == "reservation") {
                    $('#usertype').append('Reservation');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="reportreserve"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">account_box</i>Customer Reservation</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="emrgncy"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">add_location</i>Seat Reservation</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="seat"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">directions</i>Admin Reservation</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="reservation"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Report</a>');


                } else if (test == "payment") {
                    $('#usertype').append('Payment Manager');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="notification_payment"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">mail_outline</i>Notifications</a>');
                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="payment_report"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Payment Report</a>');
//                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="travel"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">directions</i>Travel Guide</a>');
//                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="reservation"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Reservation</a>');
//                    $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="payment"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">payment</i>Payment Handling</a>');
                }

//profile management start
                $('#message_page').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('profileManage/messagepage', function () {
                    });
                });
                $('#message_page1').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('profileManage/messagepage', function () {
                    });
                });
                $('#customer_page').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('profileManage/customerPage', function () {
                    });
                });

                $('#admin_page').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('profileManage/adminUsers', function () {
                    });
                });
                $('#user_report_page').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('profileManage/pages', function () {
                    });
                });
			
//profile management end

//payment start
                $('#notification_payment').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('paymentHandel/index', function () {
                    });
                });

                $('#payment_report').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('paymentHandel/payment_report', function () {
                    });
                });

//payment end

//Location Finder start
                $('#clientInform').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('locationFinder/clientInform', function () {
                    });
                });
                $('#location_identification').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('locationFinder/location_identi', function () {
                    });
                });
                //Location Finder end

                //travel guide start
//reservation start

                $('#reportreserve').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('reservationManagement/index', function () {
                    });
                });
                $('#emrgncy').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('reservationManagement/emergency', function () {
                    });
                });

                $('#seat').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('reservationManagement/seatRes', function () {
                    });
                });


//reservation ends

                $('#Locations').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('travelGuide/Locations', function () {
                    });
                });



//travel guide end

                $('#reservation').click(function (e2) {
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('reservation/index', function () {
                    });
                });


                $('.coloredit').click(function (e) {
                    $('#myModalcolor').appendTo("body").modal('show');
                });

                $('.profileedit').click(function (e) {
                    $('#myModalprofile').appendTo("body").modal('show');
                });



                $('#updatecolor').submit(function (e) {
                    e.preventDefault();
                    var sidebarcolor = $('#sidebarcolorchange').val();
                    var headerbarcolor = $('#headercolorchange').val();
                    var idnum = '<?php echo Session::get('idNumber'); ?>';
                    $.post('profileManage/color_update', {sidebarcolor: sidebarcolor, headerbarcolor: headerbarcolor, idnum: idnum}, function (data) {
                        console.log(data);
                        $('#myModalcolor').appendTo("body").modal('hide');
                    });


                });


                var x = 0;
                $('#passwordchanger').click(function (e2) {
                    e2.preventDefault();

                    if (x == 0) {
                        $('#hideandshow').show();
                        $('#hideandshow1').show();
                        x = 1;
                    } else {
                        $('#hideandshow').hide();
                        $('#hideandshow1').hide();
                        x = 0;
                    }


                });


                $('#updateprofile_form').submit(function (e) {


                    e.preventDefault();
                    var newpass = document.getElementById("currentpassword").value;



                    if (x == 1) {

                        if (newpass == dbpassword) {
                            $('#cupasswordchecker').hide();
                            $('#cupasswordchecker1').show();



                            var newpass = document.getElementById("newpassword").value;
                            var currentpass = document.getElementById("confirmpassword").value;

                            if (newpass == currentpass) {
                                $('#cupasswordchecker3').show();
                                $('#cupasswordchecker2').hide();

                                var idnum = '<?php echo Session::get('idNumber'); ?>';
                                var userprofile = document.getElementById("profileimage").value;
                                var username = document.getElementById("usernameid").value;
                                var userpassword = document.getElementById("confirmpassword").value;

                                $.post('profileManage/profile_update', {userprofile: userprofile, username: username, idnum: idnum, userpassword: userpassword}, function (data) {
                                    console.log(data);
                                    $('#myModalprofile').appendTo("body").modal('hide');
                                    location.reload();
                                    // "/trainX/dashboard/logout"
                                });

                            } else {
                                $('#cupasswordchecker2').show();
                                $('#cupasswordchecker3').hide();
                                document.getElementById("cupasswordchecker2").innerHTML = "Password not match";
                            }



                        } else {
                            $('#cupasswordchecker').show();
                            $('#cupasswordchecker1').hide();
                            document.getElementById("cupasswordchecker").innerHTML = "Wrong password";

                        }


                    } else
                    {
                        var idnum = '<?php echo Session::get('idNumber'); ?>';
                        var userprofile = document.getElementById("profileimage").value;
                        var username = document.getElementById("usernameid").value;


                        $.post('profileManage/profile_update', {userprofile: userprofile, username: username, idnum: idnum, userpassword: userpassword}, function (data) {
                            console.log(data);
                            $('#myModalprofile').appendTo("body").modal('hide');
                        });
                        location.reload();
                    }



                });

				
				
					
	var value1=null;
	          $.getJSON('profileManage/message_list', function (data) {      value1 = data.length;	});

	var value2=1;
	
	timeout();
           
	
	//------------------------------------------		


	function timeout() {
        setTimeout(function () {

          $.getJSON('profileManage/message_list', function (data) {


               var len = data.length;
              if (value1 < len) {
					value2=parseInt(len - value1);
					document.getElementById('newmessagechatnumber').innerHTML=value2;
				}

    });



// create a recursive loop.
            timeout();
        }, 2000);
    }
			//--
			
			 });
        </script>







        <script type="text/javascript">
            function submitForm() {

                console.log("submit event");
                var fd = new FormData(document.getElementById("updateprofile_form"));

                fd.append("label", "");
                $.ajax({
                    url: "/trainX/views/profileManage/upload.php",
                    type: "POST",
                    data: fd,
                    enctype: 'multipart/form-data',
                    processData: false, // tell jQuery not to process the data
                    contentType: false   // tell jQuery not to set contentType
                }).done(function (data) {
                    console.log("PHP Output:");
                    console.log(data);
                });
                return false;
            }
        </script>




        <script src="/trainX/public/js/ripples.min.js"></script>
        <script src="/trainX/public/js/material.min.js"></script>
        <script>
            $(document).ready(function () {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>
    </body>
</html>
