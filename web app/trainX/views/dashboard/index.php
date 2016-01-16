<!doctype html>


<html lang="en">
  <head>
  
  
  
      <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- mdl-->
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
	
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <title>Material Design Lite</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo URL; ?>public/material.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/styles.css">

  </head>

  <body>
      
      <?php Session::init(); ?>
      
      
      
      
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
            
            
            
            	<?php if (Session::get('loggedIn') == false):?>
<!--		<a href="<?php echo URL; ?>index">Index</a>
		<a href="<?php echo URL; ?>help">Help</a>-->
	<?php endif; ?>	
	<?php if (Session::get('loggedIn') == true):?>
            
            <span class="mdl-layout-title">
		<a href="<?php echo URL; ?>dashboard">TrainX</a>
		</span>
            
            
		<?php if (Session::get('role') == 'owner'):?>
		<a href="<?php echo URL; ?>user">Users owner</a>
		<?php endif; ?>
		

            
            
            
          
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
	  
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>		<a href="<?php echo URL; ?>dashboard/logout">Logout</a>	

	<?php endif; ?></li>
            </ul>
          </div>
        </header>
		
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="javascript:void(0)" id="profile"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">account_box</i>Profile Management</a>
          <a class="mdl-navigation__link" href="javascript:void(0)" id="location"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">add_location</i>Location Idintification</a>
		  <a class="mdl-navigation__link" href="javascript:void(0)" id="travel"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">directions</i>Travel Guide</a>
          <a class="mdl-navigation__link" href="javascript:void(0)" id="reservation"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">receipt</i>Reservation</a>
	      <a class="mdl-navigation__link" href="javascript:void(0)" id="payment"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">payment</i>Payment Handling</a>

          
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
	  
	  
      <main class="mdl-layout__content mdl-color--grey-500">
	 
        <div class="mdl-grid demo-content" id="subloader2">



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
	
	
	
	
	
	
	
        <script type="text/javascript">
            $('#changee').click(function (e2) {
              e2.preventDefault();
              //  var id = $(this).attr('id');
               $('#subloader2').load('controllers/profile.php', function () {
                });
            }); 

            $('#changee').click(function (e2) {
              e2.preventDefault();
              //  var id = $(this).attr('id');
               $('#subloader2').load('controllers/profile.php', function () {
                });
            }); 

            $('#changee').click(function (e2) {
              e2.preventDefault();
              //  var id = $(this).attr('id');
               $('#subloader2').load('controllers/profile.php', function () {
                });
            }); 

            $('#changee').click(function (e2) {
              e2.preventDefault();
              //  var id = $(this).attr('id');
               $('#subloader2').load('controllers/profile.php', function () {
                });
            }); 

            $('#changee').click(function (e2) {
              e2.preventDefault();
              //  var id = $(this).attr('id');
               $('#subloader2').load('controllers/profile.php', function () {
                });
            }); 			
        </script>
  </body>
</html>
