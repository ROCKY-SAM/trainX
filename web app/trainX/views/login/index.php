<meta name="viewport" content="width=device-width">

<!-- mdl-->
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.indigo-pink.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script src="public/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- mdl -->
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>


<link href='https://fonts.googleapis.com/css?family=Luckiest+Guy' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=destruction">

<style>


    .mydiv {
        background:rgba(255,255,255,0.4);
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
   
    font { font-family: 'Luckiest Guy', cursive; font-weight: 350; }
    .inputtext{
        padding:5px;
        font-size:16px;
        font-family: 'Luckiest Guy', cursive;    
    }
</style>

</head>
<body class="mdl-layout__content mdl-color--grey-300" style="background-image: url(<?php echo URL; ?>public/images/1.jpg);height: screen.height; width: screen.width;background-repeat: no-repeat;">


    <div class="mydiv" align="center" >
        <h1 align="center" class="font-effect-destruction"  >TrainXLife</h1>

        <form action="login/run" method="post">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
                <input class="mdl-textfield__input inputtext" type="text" name="login" id="login"  >
                <label class="mdl-textfield__label " for="login" ><font size="4" color="black">User Name</font></label>

            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">

                <input class="mdl-textfield__input inputtext" type="password"  name="password" id="password" >
                <label class="mdl-textfield__label" for="password"><font size="4" color="black">Password</font></label>

            </div>   
            <div  style="margin-left: 270px;">

                <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" input type="submit">
                    <i class="material-icons">forward</i>

                </button>
            </div>


        </form>

    </div>




