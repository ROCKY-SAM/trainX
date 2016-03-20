<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="addTrains" class="btn btn-raised btn-default">Add Train Schedules</a>
        <a href="javascript:void(0)" id="updateTrains" class="btn btn-raised btn-default">Update Train Schedules</a>
        <a href="javascript:void(0)" id="viewTrainSchedules" class="btn btn-raised btn-default">View Train Schedules</a>

    </div>
</div>


<script type="text/javascript">


   $('#addTrains').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/addTrainsc', function () {
        });
    });
    
     $('#updateTrains').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/updateTrainsc', function () {
        });
    });
    
    $('#viewTrainSchedules').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/viewTrainSchedulesc', function () {
        });
    });

</script>
</br></br>



<!--start of filling application -->
<div class="col-lg-14">
    <form class="form-horizontal" method="POST" action="reservationManagement/insertTrains" enctype="multipart/form-data" id="insertTrains" onsubmit="return submitForm();">
        <fieldset>
            <legend>Add Train Schedules</legend> <!--font style-->

            <div class="form-group">
                <label for="managercode" class="col-lg-2 control-label">Train Name</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control" name="trainName" id="autocode" placeholder="" required>
                </div>
            </div>

            <!--names -->
            <div class="form-group">

                <div class="col-lg-2 control-label">
                    <label for="fnameManager">Train ID</label>
                </div>
                <div class="col-lg-5">
                    <input type="text" class="form-control" name="trainID" placeholder="" 
                           required/>
                </div>
            </div>


            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >Train Type</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control" id="idDetails" name="trainType" >

                        <option value="">Choose here</option>
                        <option value="Intercity Express Passanger Train Air Conditioned" >Intercity Express Passanger Train Air Conditioned</option>
                        <option value="Intercity Express Passanger Train Non AC" >Intercity Express Passanger Train Non AC</option>

                    </select>

                </div>
            </div>


            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >Available Class Types</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control" id="idDetails" name="classavailable" >

                        <option value="">Choose here</option>
                        <option value="1st class only" >1st class only</option>
                        <option value="2nd class only" >2nd class only</option>
                        <option value="1st & 2nd classes" >1st & 2nd classes</option>

                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >Start Location</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control" id="idDetails" name="startLocation" >

                        <option value="">Choose here</option>
                        <option value="Colombo Fort" >Colombo Fort</option>
                        <option value="Kaluthara" >Kaluthara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Mathara">Mathara</option>							
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >End Location</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control" id="idDetails" name="endLocation" >
                        <option value="">Choose here</option>
                        <option value="Colombo Fort" >Colombo Fort</option>
                        <option value="Kaluthara" >Kaluthara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Mathara">Mathara</option>							
                    </select>
                </div>
            </div>

            <br> </br>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >Time Starting</label>
                <div class="col-lg-5" id="typeinemp">
                    <input type="time" class="form-control" name="TimeStarting" id="autocode" placeholder="" required>
                </div>
            </div>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >Time Ending</label>
                <div class="col-lg-5" id="typeinemp">
                    <input type="time" class="form-control" name="TimeEnding" id="autocode" placeholder="" required>
                </div>
            </div>

      


            <br> </br>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >1st Class NO. Of Seats</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control"  name="SeatNo1" >
                        <option value="">Choose here</option>
                        <option value="30" >30</option>	
                        <option value="38" >38</option>	
                        <option value="40" >40</option>	
                        <option value="unavailable" >unavailable</option>	
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >2nd Class NO. Of Seats</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control"  name="SeatNo2" >
                        <option value="">Choose here</option>
                        <option value="30" >30</option>	
                        <option value="38" >38</option>	
                        <option value="40" >40</option>	
                        <option value="unavailable" >unavailable</option>
                    </select>
                </div>
            </div>


            <br> </br>


             <div class="form-group">

                <div class="col-lg-2 control-label">
                    <label for="fnameManager">1st Class Ticket Price</label>
                </div>
                <div class="col-lg-5">
                    <input type="text" class="form-control" name="firstclassprice" placeholder="" 
                           required/>
                </div>
            </div>


              <div class="form-group">

                <div class="col-lg-2 control-label">
                    <label for="fnameManager">2nd Class Ticket Price</label>
                </div>
                <div class="col-lg-5">
                    <input type="text" class="form-control" name="secondclassprice" placeholder="" 
                           required/>
                </div>
            </div>





            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <button type="button" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </fieldset>
        
    </form>


   



    <script>
        
        $('#insertTrains').submit(function (e) {

           
            e.preventDefault();
            swal({title: "Wait", text: "Processing Please Wait", timer: 4000, showConfirmButton: false});
            var form = $('#insertTrains');
            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function (data) {
                     
                    swal("Trains Successfully Added!", "Click Ok To Continue", "success");
                    console.log(data);
                    $('#subloader2').empty();
                    $('#subloader2').load('reservationManagement/addTrainsc').hide().fadeIn('slow');
                }
            });


        });


//        $('#updatestations').submit(function (e) {
//
//            e.preventDefault();
//            var form = $('#updateTrains');
//            $.ajax({
//                type: form.attr('method'),
//                url: form.attr('action'),
//                data: form.serialize(),
//                success: function (data) {
//                    $('#myModal').appendTo("body").modal('hide');
//                    $('#subloader2').empty();
//                    $('#subloader2').load('reservationManagement/updateTrains').hide().fadeIn('slow');
//                }
//            });
//
//
//        });
        
           
    </script>
