<br><br>     </br> </br>
<div id="subloader03">

    <table class="table table-striped table-hover ">
        <col style="width:10%">		
        <col style="width:20%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:13%">


        <thead>
            <tr>			

                <th>Train ID</th>
                <th>Train Name</th>
<!--                <th>Start Location</th>
                <th>End Location</th>
                <th>Time Starting</th>
                <th>Time Ending</th>
                <th>Add Stations</th>-->


            </tr>
        </thead>
        <tbody id="dbody"></tbody>
    </table>



    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel"><legend>Add Train Stations</legend></h4>

                </div>

                <br> 
                <form class="form-horizontal" action="reservationManagement/addstations1" method="post" >
                    <div class="modal-body">

                        <fieldset>

                            <div class="form-group">
                                <label for="managercode" class="col-lg-4 control-label">Train ID</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="trainID" id="tid"  readonly/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="managercode" class="col-lg-4 control-label">Train Name</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="trainName" id="tname" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="managercode" class="col-lg-4 control-label">Start Location</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="startLocation" id="startLocation" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="managercode" class="col-lg-4 control-label">End Location</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="endLocation" id="endLocation" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-4 control-label">
                                    <label for="mpnumber">Time Starting</label>
                                </div>

                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="TimeStarting" placeholder="" id="timeStarting"/>
                                </div>

                            </div>

                            <div class="form-group">
                                <div class="col-lg-4 control-label">
                                    <label for="mpnumber">Time Ending</label>
                                </div>

                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="TimeEnding" placeholder="" id="TimeEnding"/>
                                </div>

                            </div>


                            <div class="form-group">
                                <div class="col-lg-4 control-label">
                                    <label for="mpnumber"  >Number of Stations</label>
                                </div>

                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="numberofStations" placeholder="" id="numberofStations" onkeyup="myFunctionqq()"/>
                                </div>

                            </div>
                            <br>



                            <div  id="kk">

                            </div>





                        </fieldset>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" onclick="myFunction()" class="btn btn-primary">Add Schedules</button>

                    </div>
                </form>
            </div>
        </div>
    </div>




    <script type="text/javascript">
        

        $(document).ready(function () {
            
            

            /* 	
             $('#admin_list_manage').click(function (e2) {
             e2.preventDefault();
             $('#subloader03').empty();
             $('#subloader03').load('profileManage/adminUsersEdit', function () {
             });
             });
             $('#adminuser').click(function (e2) {
             e2.preventDefault();
             $('#subloader03').empty();
             $('#subloader03').load('profileManage/adminUsersAdd', function () {
             });
             }); */





            $.getJSON('reservationManagement/train_list', function (data) {

                var len = data.length;

                for (x = 0; x < len; x++) {




                    $("tbody").append('<tr class="' + x + '" id="' + data[x].tid + '">');
                    //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                    $("." + x + "").append('<td id="' + data[x].id + "-tid" + '">' + data[x].tid + '</td>');
                    $("." + x + "").append('<td id="' + data[x].id + "-tname" + '">' + data[x].tname + '</td>');
//                    $("." + x + "").append('<td id="' + data[x].id + "-startLocation" + '">' + data[x].startLocation + '</td>');
//                    $("." + x + "").append('<td id="' + data[x].id + "-endLocation" + '">' + data[x].endLocation + '</td>');
//                    $("." + x + "").append('<td id="' + data[x].id + "-timeStarting" + '">' + data[x].timeStarting + '</td>');
//                    $("." + x + "").append('<td id="' + data[x].id + "-TimeEnding" + '">' + data[x].TimeEnding + '</td>');


                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="edit"><i class="material-icons" >mode_edit</i></a></div></td>');
                    //$("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="remove"><i class="material-icons">delete</i></a></div></td>');

                    $("." + x + "").append('<td id="' + "-employee" + '">' + '</td>');
                    $("." + x + "").append('<td class="hide" id="' + data[x].tid + "-trainID" + '">' + x + '</td>');

                    $("." + x + "").append('</tr>');
                }


                $('.remove').click(function (e) {
                    var id = $(this).attr('href');

                    swal({title: "Are you sure?",
                        text: "You will not be able to recover this!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "No, cancel it!",
                        closeOnConfirm: false,
                        closeOnCancel: false},
                            function (isConfirm) {

                                if (isConfirm) {
                                    $.ajax({
                                        type: 'post',
                                        url: 'reservationManagement/delete_price',
                                        data: {idValue: id},
                                        success: function (data) {
                                            swal("Deleted!", "Data has been deleted!", "success");
                                            $('#subloader03').empty();
                                            $('#subloader03').load('reservationManagement/priceViewc').hide().fadeIn('slow');

                                        }
                                    });

                                } else {
                                    swal("Cancelled", "Train Schedules are fine! :)", "error");
                                }
                            });


                    return false;
                });


                $('.edit').click(function (e) {
                    var id = $(this).attr('href');


                    setTimeout(function () {
                        var mycode = $('#' + id + '-trainID').text();
//assing values
                        $('#tid').val(data[mycode].tid);
                        $('#tname').val(data[mycode].tname);
                        $('#startLocation').val(data[mycode].startLocation);
                        $('#endLocation').val(data[mycode].endLocation);
                        $('#timeStarting').val(data[mycode].timeStarting);
                        $('#TimeEnding').val(data[mycode].TimeEnding);
                        /* $('#image').val(data[mycode].image); */

                        $('#numberofStations').val(data[mycode].noofStations);

                        $('#myModal3').appendTo("body").modal('show');

                    }, 250);
                    e.preventDefault();
                });


            });










        });
        
        
 


//---
        function myFunctionqq() {
            $("#kk").empty();
            var x = document.getElementById("numberofStations").value;

            for (xx = 0; xx < x; xx++) {

                $("#kk").append('<div class="form-group">\n\
    <div class="col-lg-1 control-label">\n\
    <label for="mpnumber">Station ID</label>\n\
</div>\n\
<div class="col-lg-2">\n\
<input type="text" class="form-control" id="stid2' + xx + '"/>\n\
</div>\n\
<div class="col-lg-2 control-label">\n\
<label for="mpnumber">Station Name</label>\n\
</div>\n\
<div class="col-lg-3">\n\
<input type="text" class="form-control" id="stname2' + xx + '"/>\n\
</div>\n\
<div class="col-lg-2 control-label">\n\
<label for="mpnumber">Depature Time</label>\n\
</div>\n\
<div class="col-lg-2">\n\
<input type="text" class="form-control" id="stdt2' + xx + '"/>\n\
</div>\n\
</div>');
            }
        }
 
    
    //---       
                function myFunction() {
    
 //--   $('#updateTrains').submit(function (e) {
              //  alert("awa");
     //--           e.preventDefault();
                //-- add schedule button
                var y = document.getElementById("numberofStations").value;
              //  alert(y + "- gatha");
                for (yy = 0; yy < y; yy++) {
                  //  alert(yy);

              //  alert(document.getElementById("stid20").value);
                    var a = document.getElementById("stid2"+yy).value;
                    var b = document.getElementById("stname2"+yy).value;
                    var c = document.getElementById("stdt2"+yy).value;

              //      alert(a + " - " + b + " - " + c);
                    $.ajax({
                        type: 'POST',
                        url: 'reservationManagement/addstations1',
                        data: {
                            trainname: document.getElementById("tname").value,
                            trainID: document.getElementById("tid").value,
                            SLocation: document.getElementById("startLocation").value,
                            ELocation: document.getElementById("endLocation").value,
                            TimeStart: document.getElementById("timeStarting").value,
                            TimeEnd: document.getElementById("TimeEnding").value,
                            station1ID: a,
                            station1Name: b,
                            station1time1: c
//
                                      },
                        success: function (data) {
                           alert(data);
//                             $('#myModal3').appendTo("body").modal('hide');
//                             $('#subloader03').empty();
                             //$('#subloader03').load('reservationManagement/addTrains').hide().fadeIn('slow');
                        }
                    });
                }
                //-----                        

     //--       });        
        
    
    
}    
    
    </script>

    <div id="subloader22">

    </div>
