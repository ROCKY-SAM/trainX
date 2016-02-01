	    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	      <div class="mdl-tabs__tab-bar">
	          <a href="javascript:void(0)" id="message" class="btn btn-raised btn-default">Messages</a>
	          <a href="javascript:void(0)" id="adminuser" class="btn btn-raised btn-default">Admin Users</a>
	          <a href="javascript:void(0)" id="customer" class="btn btn-raised btn-default">CustomerS</a>
	      </div>
	    </div>
		
   

		
		<button class="edit">sam</button>

		
		
		
		<!-- start of model -->

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><legend>Edit Shift</legend></h4>

                </div>
                <form class="form-horizontal" id="updateemp_form" action="profileManage/pages" method="post">
                    <div class="modal-body">

                        <fieldset>

                            <div class="form-group">
                                <label for="shiftid" class="col-lg-2 control-label">Shift ID</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="shiftid" placeholder="autogenerate" name="shiftid" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="shiftname" class="col-lg-2 control-label">Shift Name</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="shiftname" placeholder="Shift Name.." name="shiftname" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="shiftduration" class="col-lg-2 control-label">Shift Duration</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="shiftduration" placeholder="eg: 7 hours" name="shiftduration" >
                                </div>
                            </div> 
                            <div class="form-group">
                                <label for="shiftrate" class="col-lg-2 control-label">Shift Rate</label>
                                <div class="col-lg-7">
                                    <input type="text" class="form-control" id="shiftrate"  name="shiftrate" >
                                </div>
                            </div> 
                               

                        </fieldset>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" id ="upshift" class="btn btn-primary">Save changes</button>

                    </div>
                </form>

            </div>
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
	 
	 
	 
	 
	             $('.edit').click(function (e) {
               
$('#myModal').appendTo("body").modal('show');

            });
	        </script>
	 	
		    <div  id="subloader22">



	                </div>