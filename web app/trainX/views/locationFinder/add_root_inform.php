

			</br></br>
			


    <!--start of filling application -->
    <div class="col-lg-14">
        <form class="form-horizontal" method="POST" action="locationFinder/insert_station_root" enctype="multipart/form-data"  id="insert_station_root" onsubmit="return submitForm();">
            <fieldset>
                <legend>Add New Station Root</legend> <!--font style-->
                 <div class="form-group">

                    <div class="col-md-2 control-label">
                        <label for="station">Root Code </label>
                    </div>

                  <div class="col-md-5" id="rootcode">
                        <select required class="form-control" id="rootcode" name="rootcode" >

                            <option value="">Choose here</option>
                            <option value="Main Line" >Main Line</option>
                            <option value="Costal Line " >Costal Line</option>
                            <option value="Kalani Vellay Line">Kalani Vellay Line</option>
                            <option value="Up Country Line">Up Country Line</option>
                            <option value="Matale Line">Matale Line</option>
                            <option value="Batticacoloa Line">Batticacoloa Line</option>
                            <option value="Trinco Line">Trinco Line</option>
                            <option value="Mannar Line">Mannar Line</option>
                            <option value="Puttalam Line">Puttalam Line</option>
                            
                            
                        </select>
                  </div>
                </div>

                <!--names -->
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="station">New Station</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="station" placeholder="" required="" 
                         />
                    </div>
              
			  </div>

                <div class="form-group">
				
                    <div class="col-lg-2 control-label">
                        <label for="latitude">Latitude</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="latitude" placeholder="" 
                               pattern="[0-9\.]{0,10}" title="Enter numbers only" required=""/>
                    </div>

                </div>

               

                <div class="form-group">

					

					<div class="col-lg-2 control-label">
                        <label for="longitude">Longitude</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="longitude" placeholder="" 
                               pattern="[0-9\.]{0,10}" title="Enter numbers only"  required="" />
                    </div>
					
								  </div>

                <div class="form-group">
					
					
					<div class="col-lg-2 control-label">
                        <label for="point">Point</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="point" placeholder="" pattern="[0-9]{0,10}" title="Enter numbers only" required=""  />
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
