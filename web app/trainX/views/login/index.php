  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php echo URL; ?>public/slider/css/example.css">
  <link rel="stylesheet" href="<?php echo URL; ?>public/slider/css/font-awesome.min.css">

<!-- mdl-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="public/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- mdl -->
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="<?php echo URL; ?>public/slider/js/jquery.slides.min.js"></script>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=destruction">

  
  <style>

  
      .mydiv {
        background:rgba(255,255,255,0.5);
     border-radius: 50px;
    top: 50%;
    left: 50%;
    width:30em;
    height:25em;
    margin-top: -13em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    border: 50px ;
    position:fixed;
     z-index: 10;
   
}
      
    body {

      padding-top:0px;
    }

    #slides {
      display: none
    }

    #slides .slidesjs-navigation {
      margin-top:3px;
    }

    #slides .slidesjs-previous {
      margin-right: 5px;
      float: left;
    }

    #slides .slidesjs-next {
      margin-right: 5px;
      float: left;
    }

    .slidesjs-pagination {
      margin: 6px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: -1px;
      background-image: url(img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>

  
  <style>
    #slides {
      display: none
        
    }

    .container {
    
        
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
      .container {
        width: auto
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
        width: auto
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
        width: 724px
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
        width: 1200px
      }
    }
  </style>

</head>
<body class="mdl-layout__content mdl-color--grey-300">

      
    
  
  <div class="container" >
    <div id="slides">
        
      <img src="<?php echo URL; ?>public/slider/img/Train-1.jpg" >
      <img src="<?php echo URL; ?>public/slider/img/Train-2.jpg" >
      <img src="<?php echo URL; ?>public/slider/img/Train-3.jpg" >
      <img src="<?php echo URL; ?>public/slider/img/Train-4.jpg" >
    <img src="<?php echo URL; ?>public/slider/img/Train-5.jpg" >
    <img src="<?php echo URL; ?>public/slider/img/Train-6.jpg" >
        <img src="<?php echo URL; ?>public/slider/img/Train-7.jpg" >
            <img src="<?php echo URL; ?>public/slider/img/Train-8.jpg" >
    </div>
  </div>
  
  
  
   <div class="mydiv" align="center" >
<h1 align="center" class="font-effect-destruction" >TrainX</h1>

<form action="login/run" method="post">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
    <input class="mdl-textfield__input" type="text" name="login" id="login" >
   <label class="mdl-textfield__label" for="login" >User Name</label>

</div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

    <input class="mdl-textfield__input" type="password"  name="password" id="password" >
    <label class="mdl-textfield__label" for="password">Password</label>
 
</div>   
    <div  style="margin-left: 200px;">
    
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" input type="submit">
  <i class="material-icons">forward</i>
  
</button>
        </div>
<!--	<label>Login</label><input type="text" name="login" /><br />
	<label>Password</label><input type="password" name="password" /><br />
	<label></label><input type="submit" />
        -->
        
</form>

</div>
  
  

  <script>
    $(function() {
      $('#slides').slidesjs({
         
        width: 1250,
        height: 689,
        navigation: false,
		    play: {
     
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
     // swap: false,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 50
        // [number] restart delay on inactive slideshow
    },
	
	    effect: {
      slide: {
        // Slide effect settings.
        speed: 2000
          // [number] Speed in milliseconds of the slide animation.
      },
      fade: {
        speed: 500,
          // [number] Speed in milliseconds of the fade animation.
        crossfade: true
          // [boolean] Cross-fade the transition.
      }
    }
	
      });
    });
  </script>
