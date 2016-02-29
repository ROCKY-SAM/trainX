 <br><br>     </br> </br>
 <div id="subloader03">
			
		<table class="table table-striped table-hover ">
        <col style="width:10%">		
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:10%">
        <col style="width:10%">
        <col style="width:10% ">
        <col style="width:10% ">
        <thead>
            <tr>			
                
                <th>Train ID</th>
                <th>Train Name</th>
                <th>Start Location</th>
                <th>End Location</th>
                <th>Time Starting</th>
                <th>Time Ending</th>
                <th>Edit Schedule</th>
                <th>Delete Schedule</th>
                
            </tr>
        </thead>
        <tbody id="dbody"></tbody>
    </table>
 

 
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Train Schedule</legend></h4>

            </div>
            
            <br> </br>
   <form class="form-horizontal" id="updateTrains" action="ReservationManagement/updateSchedules" method="post" ">
            <div class="modal-body">
             
                    <fieldset>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Train ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tid" id="tid"  readonly/>
                            </div>
                        </div>
                        
                      <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Train Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tname" id="tname" />
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
                                <input type="text" class="form-control" name="timeStarting" placeholder="" id="timeStarting"/>
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

						
                    </fieldset>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>

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
                $("." + x + "").append('<td id="' + data[x].id + "-tid" + '">' +data[x].tid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-tname" + '">' + data[x].tname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-startLocation" + '">' +data[x].startLocation  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-endLocation" + '">' + data[x].endLocation + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-timeStarting" + '">' +data[x].timeStarting  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-TimeEnding" + '">' +data[x].TimeEnding  + '</td>');
		
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="edit"><i class="material-icons" >mode_edit</i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="remove"><i class="material-icons">delete</i></a></div></td>');
                
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

                $('#myModal').appendTo("body").modal('show');
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
                   
                }, 250);
                e.preventDefault();
            });
			
			
			$('#updateTrains').submit(function (e) {
      
         e.preventDefault();
        var form = $('#updateTrains');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').appendTo("body").modal('hide');
         $('#subloader03').empty();
           $('#subloader03').load('reservationManagement/updateTrains').hide().fadeIn('slow');
            }
        });
                                
                                
        });
			
			
  });
  
  
  
  
    
        });

</script>

<div id="subloader22">
    
</div>
