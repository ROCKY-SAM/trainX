    <div id="wrapper">
			<div class="message-container">
				<div class="message-north">
					<ul class="message-user-list" id="userlistmessage">
					
					</ul>

					<div class="message-thread" id="messagebody">



					</div>
				</div>
				<div class="message-south">
				
				
					<textarea cols="20" rows="3" name="messagebodydata" placeholder="Type here" id="messagebodydata"></textarea>
					<button id="addmessage_form">Send</button>
 
		
				</div>
			</div>
		</div>
    
		
<style type="text/css">
		
		
		* {
	margin: 0;
	padding: 0;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", "Droid Sans", sans-serif;
}


.bubble-left {
	float: left;
	clear: both;
	background: #E0E0E0;
}

.bubble-left:hover {
	background: #9E9E9E;
}

.bubble-left:before {
	content: " ";
	display: block;
	position: relative;
	top: 0px;
	left: -11px;
	height: 13px;
	width: 13px;
	background: inherit; /*#B7CC90*/
	z-index: 100;

	-webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
}

.bubble-right {
	float: right;
	clear: both;
	text-align: right;
	background: #2196F3;
}

.bubble-right:hover {
	background: #1976D2;
}

.bubble-right:before {
	content: " ";
	display: block;
	position: relative;
	top: 0px;
	right: -99.8%;
	height: 13px;
	width: 13px;
	background: inherit; /*#90B2CC*/

	-webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
}

.message-container {
	overflow:hidden;
	
	margin-top: 1.5%;
	height: 550px; /*Global Height of Widget*/
	width: 100%; /*Global Width of Widget*/

	
}

.message-container > .message-north {
	width: 100%;
	height: 80%;

	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
}

.message-container > .message-south {
	width: 100%;
	height: 20%;
	padding: 1%;

	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
}

.message-container > .message-north > .message-user-list {
	list-style-type: none;
	float: left;
	clear: left;
	width: 25%;
	height: 100%;
	overflow-x: hidden;
	overflow-y: scroll;
}

.message-container > .message-north > .message-user-list a {
	display: block;
	padding: 10px;
	height: 40px; /*Keep height same as img thumbnail height*/
	text-decoration: none;
	color: #424242;
font-size: 110%;
	-webkit-transition: all ease .2s;
	   -moz-transition: all ease .2s;
	    -ms-transition: all ease .2s;
	     -o-transition: all ease .2s;
	        transition: all ease .2s;
}

.message-container > .message-north > .message-user-list a:hover {
	background: #9E9E9E;

	-webkit-transition: all ease .2s;
	   -moz-transition: all ease .2s;
	    -ms-transition: all ease .2s;
	     -o-transition: all ease .2s;
	        transition: all ease .2s;
}



.message-container > .message-north > .message-user-list a .user-title {
	margin-left: 5px;
}

.message-container > .message-north > .message-user-list a .user-desc {
	padding-left: 5px;
	padding-top: 5px;
	font-size: 12px;
	color: #5A5A5A;
    white-space: nowrap;
	overflow: hidden;    
    text-overflow: ellipsis;
}

.message-container > .message-north > .message-user-list a.active {
	background: #BFBFBF;
}

.message-container > .message-north > .message-user-list a.highlight {
	background: #90B2CC;
}

.message-container > .message-north > .message-user-list a.highlight .user-title,
.message-container > .message-north > .message-user-list a.highlight .user-desc {
	font-weight: bold;
}

.message-container > .message-north > .message-thread {
	float: right;
	width: 75%;
	height: 100%;
	padding-left: 10px;
	padding-right: 10px;
	background: #EEEEEE;
	overflow-x: hidden;
	overflow-y: scroll;

	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
}

.message-container > .message-north > .message-thread > .message {
	min-width: 40%;
	max-width: 70%;
	margin: 5px;
	margin-bottom: 2%;
	padding: 3px 5px 3px 5px;
	cursor: pointer;
}

.message-container > .message-north > .message-thread > .message > p {
	display: block;
	clear: both;
	margin-left: 3px;
	margin-right: 3px;
	font-size: 15px;
}

.message-container > .message-north > .message-thread > .message label {
	margin-top: -13px;
	font-size: 13px;
	font-weight: bold;
	color: #5A5A5A;
	cursor: pointer;
}

.message-container > .message-north > .message-thread > .message .message-user {
	display: block;
	float: left;
	margin-left: 3px;
}

.message-container > .message-north > .message-thread > .message .message-timestamp {
	display: block;
	float: right;
	margin-right: 3px;
	text-align: right;
}

.message-container > .message-south > textarea {
	width: 100%;
	height: 65%;
	padding: 7px 10px;

	outline: none;
	resize: none;
	font-size: 13px;
	color: #666;
	background: #f6f6f6;
	border: 1px solid #b9b9b9;
	border-top-color: #a4a4a4;
	box-shadow: 0 1px 1px rgba(0,0,0,.17) inset;

	-webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
}

.message-container > .message-south > textarea:focus {
	background: #FFF;
}

.message-container > .message-south > button {
	display: inline-block;
	float: right;
	margin-top: 0px;
	height: 35px;
	width: 80px;
	color: #000000;
	background: -webkit-linear-gradient(#F5F5F5, #E9E9E9);
	background:    -moz-linear-gradient(#F5F5F5, #E9E9E9);
	background:      -o-linear-gradient(#F5F5F5, #E9E9E9);
	background:         linear-gradient(#F5F5F5, #E9E9E9);
	border: 2px solid #CCC;
	box-shadow: 0px 1px 2px #C6C6C6;
	cursor: pointer;
}

.message-container > .message-south > button:hover {
	background: -webkit-linear-gradient(#FFFFFF, #DFDFDF);
	background:    -moz-linear-gradient(#FFFFFF, #DFDFDF);
	background:      -o-linear-gradient(#FFFFFF, #DFDFDF);
	background:         linear-gradient(#FFFFFF, #DFDFDF);
}

.message-container > .message-south > button:active {
	box-shadow: inset 0px 0px 10px #5A5A5A;
	background: -webkit-linear-gradient(#E9E9E9, #F5F5F5);
	background:    -moz-linear-gradient(#E9E9E9, #F5F5F5);
	background:      -o-linear-gradient(#E9E9E9, #F5F5F5);
	background:         linear-gradient(#E9E9E9, #F5F5F5);
}
</style>


		<script type="text/javascript">
		var selectuserid=null;
		var lastmessagenumber=null;
		var messageglobl=null;
		var lastnumberofuser=null;
    $(document).ready(function () {
		
		
		timeout();
		
		
				$.getJSON('profileManage/message_senderlist', function (dataa) {
		$.getJSON('profileManage/customer_list', function (customerListdata) {
		
		            var len = dataa.length; //message customers
					var len2 = customerListdata.length;	//list customers	
					lastnumberofuser=len;
		  for (x = 0; x < len; x++)
		  {
			  
			  for (y = 0; y < len2; y++)//list customers		
				{
					
					  if(customerListdata[y].customerId == dataa[x].senderId){
			 
			$("#userlistmessage").append('<li><a onclick="myFunction('+dataa[x].senderId+')" >'+customerListdata[y].customerfname+" "+customerListdata[y].customerlname+'&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge mdl-color-text--white-800" id="smsnumber'+y+'"></span></a></li>');
				}
		  }
		  }
		});
		});
		
		
		
		$.getJSON('profileManage/customer_list', function (customerListdata) {
		
					 		$.getJSON('profileManage/message_list', function (data) {
		
		
		            var len = data.length;
					var len2 = customerListdata.length;	//list customers
			var xb=null;		
		  for (x = 0; x < len2; x++)
		  {
			  
			  xb=0; 
			  for (y = 0; y < len; y++)//list customers		
				{
					
					  if(customerListdata[x].customerId == data[y].senderId){
						  xb=parseInt(xb+1);
					  }
			 
				}
				 document.getElementById("smsnumber"+x).innerHTML = xb;
		  }
		
		
		});
				});

		
		
		
			
    });
	
	         function myFunction(a) {
selectuserid=a;

			 $("#messagebody").empty();
			 
			 		$.getJSON('profileManage/message_list', function (data) {
		
		
		            var len = data.length;
lastmessagenumber=len;
            for (x = 0; x < len; x++) {
				
				
				if(data[x].senderId == selectuserid){
               if(data[x].type == "send")
			   {
				   
				   $("#messagebody").append('<div id="eemessaa" class="message bubble-right"><label class="message-user">'+data[x].senderId+'</label><label class="message-timestamp">'+data[x].timeDate+'</label><p>'+data[x].messageText+'</p></div>');
						
				   
				   
			   }else
			   {
				   
				   
				   	$("#messagebody").append('<div id="eemessaa" class="message bubble-left"><label class="message-user">'+data[x].replyId+'</label><label class="message-timestamp">'+data[x].timeDate+'</label><p>'+data[x].messageText+'</p></div>');
				   
			   }
			   
			   
			}
			}
		
		
		});
			 
			 
			 
				$("#messagebody").animate({
				scrollTop:  10000000000
			   });
				  
				   
			 }

	
	
	
	
	                $('#addmessage_form').click(function (e2) {

					if(selectuserid == null){
						alert("select user");
					}else{
						var typedata=document.getElementById("messagebodydata").value;
						if(typedata == "")
						{
								alert("cant send blank message");
						}
						else{
							var recevierid=window.localStorage.getItem("logginuserid");
							
							
							
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
							
							
							
							
							
							
							
							
							$.ajax({
        type: 'POST',
        url: 'profileManage/insertMessagephp',
        data: {
            senderid : selectuserid,
			receverid : recevierid,     
            textofmessage : typedata,
			time : timeYear
        },
        success: function( data ) {
            console.log( data );
        }
    });
							
						}
					}
					
					document.getElementById("messagebodydata").value="";
					
                });

	
	

  
	
	function timeout() {
    setTimeout(function () {
		
	
		//window.localStorage.setItem("2ndvalue",);
        // Do Something Here
       
	   $.getJSON('profileManage/message_list', function (data) {
		
		
		            var len = data.length;
		if(lastmessagenumber < len){
			
			
			            for (x = lastmessagenumber; x < len; x++) {
				
				
				if(data[x].senderId == selectuserid){
               if(data[x].type == "send")
			   {
				   
				   $("#messagebody").append('<div id="eemessaa" class="message bubble-right"><label class="message-user">'+data[x].senderId+'</label><label class="message-timestamp">'+data[x].timeDate+'</label><p>'+data[x].messageText+'</p></div>');
						
				   
				   
			   }else
			   {
				   
				   
				   	$("#messagebody").append('<div id="eemessaa" class="message bubble-left"><label class="message-user">'+data[x].replyId+'</label><label class="message-timestamp">'+data[x].timeDate+'</label><p>'+data[x].messageText+'</p></div>');
				   
			   }
			   
			   
			}
			}
			
			lastmessagenumber=len;
			$("#messagebody").animate({
				scrollTop:  10000000000
			   });
			
			
		}
	   
	   });
	   
	   //user loading

	   				$.getJSON('profileManage/message_senderlist', function (dataa) {
		$.getJSON('profileManage/customer_list', function (customerListdata) {
		
		            var len = dataa.length; //message customers
					var len2 = customerListdata.length;	//list customers	
					if(lastnumberofuser != len)
					{ 
			
		  for (x = lastnumberofuser; x < len; x++)
		  {
			
			  for (y = 0; y < len2; y++)//list customers		
				{
					  if(customerListdata[y].customerId == dataa[x].senderId){
			$("#userlistmessage").append('<li><a onclick="myFunction('+dataa[x].senderId+')" >'+customerListdata[y].customerfname+" "+customerListdata[y].customerlname+'</a></li>');
				}
				}
		  }
		  }
					
				lastnumberofuser = len;
					
		});
		});
	   
        // create a recursive loop.
        timeout();
    }, 2000);
}
	
	
	
	
	</script>