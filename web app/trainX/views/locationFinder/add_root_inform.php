

			</br></br>
			


    <!--start of filling application -->
    <div class="col-lg-14">
        <form class="form-horizontal" method="POST" action="locationFinder/insert_station_root" enctype="multipart/form-data"  id="insert_station_root" onsubmit="return submitForm();">
            <fieldset>
                <legend>Add New Station Root</legend> <!--font style-->

                <div class="form-group">
                    <label for="rootcode" class="col-lg-2 control-label">Root Code</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="rootcode" id="rootcode" placeholder="Root Id" >
                    </div>
                </div>

                <!--names -->
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="station">New Station</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="station" placeholder="" 
                         />
                    </div>
              
			  </div>

                <div class="form-group">
				
                    <div class="col-lg-2 control-label">
                        <label for="latitude">Latitude</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="latitude" placeholder="" 
                               />
                    </div>

                </div>

               

                <div class="form-group">

					

					<div class="col-lg-2 control-label">
                        <label for="longitude">Longitude</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="longitude" placeholder="" 
                               />
                    </div>
					
								  </div>

                <div class="form-group">
					
					
					<div class="col-lg-2 control-label">
                        <label for="point">Point</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="point" placeholder=""   </div>
.					
                </div>
                </div>



       	   
           
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                         
                        <input type="reset" class="btn btn-default">
                        <input type="submit" class="btn btn-primary"  >
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    <!-- end of filling application-->


<script type="text/javascript">
                         $('#insert_station_root').submit(function (e) {


	        e.preventDefault();
       
        var form = $('#insert_station_root');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
				 swal("Station Add  successfully!", "click okay to continue", "success");
                console.log(data);
                $('#subloader03').empty();
                $('#subloader03').load('locationFinder/view_root_inform').hide().fadeIn('slow');
            }
        });
	
	
    });
        </script>
