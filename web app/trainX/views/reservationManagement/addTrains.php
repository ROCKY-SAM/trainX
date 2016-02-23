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


            <!-- emp type -->
            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >Start Location</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control" id="idDetails" name="startLocation" >

                        <option value="">Choose here</option>
                        <option value="admin" >Colombo Fort</option>
                        <option value="profileManage" >Kaluthara</option>
                        <option value="locationfind">Kandy</option>
                        <option value="travelGuide">Gampaha</option>
                        <option value="reservation">Anuradhapura</option>
                        <option value="payment">Mathara</option>							
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >End Location</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control" id="idDetails" name="endLocation" >
                        <option value="">Choose here</option>
                        <option value="admin" >Colombo Fort</option>
                        <option value="profileManage" >Kaluthara</option>
                        <option value="locationfind">Kandy</option>
                        <option value="travelGuide">Gampaha</option>
                        <option value="reservation">Anuradhapura</option>
                        <option value="payment">Mathara</option>							
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
                    <select required class="form-control" id="idDetails" name="SeatNo1" >
                        <option value="">Choose here</option>
                        <option value="admin" >30</option>	
                        <option value="admin" >38</option>	
                        <option value="admin" >40</option>	
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" >2nd Class NO. Of Seats</label>
                <div class="col-lg-5" id="typeinemp">
                    <select required class="form-control" id="idDetails" name="SeatNo2" >
                        <option value="">Choose here</option>
                        <option value="admin" >30</option>	
                        <option value="admin" >38</option>	
                        <option value="admin" >40</option>							
                    </select>
                </div>
            </div>


            <br> </br>
          

            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" > 1st Class Seat Price</label>

            </div>
            <div class="form-group">

                <div class="col-lg-2 control-label">
                    <label for="fnameManager"> Adult</label>
                </div>

                <div class="col-lg-2">
                    <input type="text" class="form-control" name="adult01" placeholder="" id="fname"
                           title="Use only letters for First Name"/>
                </div>

                <div class="col-lg-2 control-label">
                    <label for="lnameManager">Child</label>
                </div>

                <div class="col-lg-2">
                    <input type="text" class="form-control" name="child01" placeholder="" id="lname"
                           title="Use only letters for Last Name" />
                </div>

            </div>


            <div class="form-group">
                <label for="emptype" class="col-lg-2 control-label" > 2nd Class Seat Price</label>
            </div>
            <div class="form-group">

                <div class="col-lg-2 control-label">
                    <label for="fnameManager"> Adult</label>
                </div>

                <div class="col-lg-2">
                    <input type="text" class="form-control" name="adult02" placeholder="" id="fname"
                           title="Use only letters for First Name"/>
                </div>

                <div class="col-lg-2 control-label">
                    <label for="lnameManager">Child</label>
                </div>

                <div class="col-lg-2">
                    <input type="text" class="form-control" name="child02" placeholder="" id="lname"
                           title="Use only letters for Last Name" />
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
                    $('#subloader03').empty();
                    $('#subloader03').load('reservationManagement/addTrains').hide().fadeIn('slow');
                }
            });


        });

    </script>
    
    