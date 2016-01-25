	    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	      <div class="mdl-tabs__tab-bar">
	          <a href="javascript:void(0)" id="message" class="mdl-tabs__tab">Messages</a>
	          <a href="javascript:void(0)" id="adminuser" class="mdl-tabs__tab">Admin Users</a>
	          <a href="javascript:void(0)" id="customer" class="mdl-tabs__tab">CustomerS</a>
	      </div>
	    </div>
		

					
					
					  <script type="text/javascript">


	    $('#message').click(function (e2) {
		       e2.preventDefault();
	        $('#subloader22').empty();
	       $('#subloader22').load('profileManage/pages', function () {
	        }); 
			});
	  
	      $('#adminuser').click(function (e2) {
		       e2.preventDefault();
	        $('#subloader22').empty();
	       $('#subloader22').load('profileManage/adminUsers', function () {
	        }); 
			});
			
			    $('#customer').click(function (e2) {
		       e2.preventDefault();
	        $('#subloader22').empty();
	       $('#subloader22').load('profileManage/pages', function () {
	        }); 
			});
	 
	        </script>
	 	
		    <div  id="subloader22">



	                </div>