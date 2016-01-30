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
        <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <link rel="stylesheet" href="<?php echo URL; ?>public/material.min.css">
        <link rel="stylesheet" href="<?php echo URL; ?>public/styles.css">

		
		
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  
    </head>

    <body>

        <?php Session::init(); ?>




        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="demo-header mdl-layout__header mdl-color--green-400 mdl-color-text--black-600">
                <div class="mdl-layout__header-row">



                    <?php if (Session::get('loggedIn') == false): ?>
                    <?php endif; ?>	
                    <?php if (Session::get('loggedIn') == true): ?>

                        <span class="mdl-layout-title">
                            <a href="<?php echo URL; ?>dashboard" class="font-effect-destruction"><font size="7">TrainXLife</font></a>
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

                                document.getElementById('clockbox').innerHTML = "" + tday[nday] + ", " + tmonth[nmonth] + " " + ndate + ", " + nyear + " </br>&nbsp;&nbsp;" + nhour + ":" + nmin + ":" + nsec + ap + "";
                            }

                            window.onload = function () {
                                GetClock();
                                setInterval(GetClock, 1000);
                            }
                        </script>
                        <div id="clockbox"></div>

                    </div>
                </header>
                <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-800 mdl-color-text--blue-grey-50">

                    <header class="demo-drawer-header">


                        <p> <img src="images/user.jpg" class="demo-avatar"> 


                        </p>

                        <div class="demo-avatar-dropdown">
                            <span id="usertype"></span>
                            <div class="mdl-layout-spacer"></div>
                            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                                <i class="material-icons" role="presentation">arrow_drop_down</i>
                                <span class="visuallyhidden">Accounts</span>
                            </button>
                            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
                                <li class="mdl-menu__item">Profile Settings</li>
                                <a href="<?php echo URL; ?>dashboard/logout"><li class="mdl-menu__item"><i class="material-icons">arrow_back</i>Logout<?php endif; ?></li></a>
                        </ul>
                    </div>
                </header>

                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-600">
          
                    <div id="loadOnlyPart" ></div>
         
 
 
 
 

                    <div class="mdl-layout-spacer"></div>
                </nav>
            </div>


            <main class="mdl-layout__content mdl-color--grey-000" >

                <div class="mdl-grid demo-content" id="subloader2" >

				
				
		



                </div>
            </main>
        </div>




        <script src="public/material.min.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <!-- mdl -->
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>




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


		



		
		
		
		
		
		
		
        <script type="text/javascript">


    $('#profile').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('profileManage/index', function () {
        });
    });
    $('#location').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('locationIdentify/index', function () {
        });
    });
    $('#travel').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('travelGuide/index', function () {
        });
    });
    $('#reservation').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservation/index', function () {
        });
    });
    $('#payment').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('paymentHandel/index', function () {
        });
    });
	
	
	
	
	
	
	
	
	
	 $(document).ready(function () { 
var test = '<?php echo Session::get('role'); ?>';
if(test == "admin"){
	
$('#usertype').append('Admin');
 $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="profile"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">account_box</i>Profile Management</a>');
 $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="location"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">add_location</i>Location Idintification</a>');                        
 $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="travel"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">directions</i>Travel Guide</a>');
 $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="reservation"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">receipt</i>Reservation</a>');
 $('#loadOnlyPart').append('<a class="mdl-navigation__link" href="javascript:void(0)" id="payment"><i class="mdl-color-text--blue-grey-100 material-icons" role="presentation">payment</i>Payment Handling</a>');
             	  }



else if(test == "profileManage"){
$('#usertype').append('Profile Manager');
   
}
else if(test == "locationfind"){
$('#usertype').append('Location Idintification');
   
}
else if(test == "travelGudie"){
$('#usertype').append('Travel Guide');
   
}
else if(test == "reservation"){
$('#usertype').append('Reservation');
   
}
else if(test == "payment"){
$('#usertype').append('Payment Handling');
   
}
                        
	 

	 });

        </script>
    </body>
</html>

























