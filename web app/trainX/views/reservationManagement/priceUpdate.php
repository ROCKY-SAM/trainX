<br><br>     </br> </br>

<table class="table table-striped table-hover ">
    <col style="width:10%">		
    <col style="width:12%">
    <col style="width:12%">
    <col style="width:12%">
    <col style="width:12%">
    <col style="width:15%">
    <col style="width:15% ">
    <col style="width:5%">
<!--    <col style="width:5% ">-->
    <thead>
        <tr>			

            <th>Train ID</th>
            <th>Train Name</th>
            <th>Adult First Class</th>
            <th>Child First Class</th>
            <th>Adult Second Class</th>
            <th>Child Second Class</th>
            <th>Edit Price</th>
            <th>Delete Price</th>


<!--                <th>Reserved Seats</th>-->


        </tr>

    </thead>
    <tbody id="dbody"></tbody>
</table>

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Ticket Prices</legend></h4>

            </div>
            
            <br> </br>
   <form class="form-horizontal" id="updatePrices" action="ReservationManagement/updatePrice" method="post" ">
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
                            <label for="managercode" class="col-lg-4 control-label">Adult First Class Price</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="firstclassAdult" id="firstclassAdult" />
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Child First Class Price</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="firstclassChild" id="firstclassChild" />
                            </div>
                        </div>
                        
                      


                        
                        <div class="form-group">
                            <div class="col-lg-4 control-label">
                                <label for="mpnumber">Adult Second Class Price</label>
                            </div>

                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="secondclassAdult" placeholder="" id="secondclassAdult"/>
                            </div>

                        </div>

			<div class="form-group">
                            <div class="col-lg-4 control-label">
                                <label for="mpnumber">Child Second Class Price</label>
                            </div>

                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="secondclassChild" placeholder="" id="secondclassChild" />
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
</div>



<script type="text/javascript">
    $(document).ready(function () {


      /*   $('#admin_list_manage').click(function (e2) {
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
        });
 */




        $.getJSON('reservationManagement/train_price', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {

                 
                 $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-tid" + '">' +data[x].tid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-tname" + '">' + data[x].tname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-firstclassAdult" + '">' +data[x].firstclassAdult  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-firstclassChild" + '">' + data[x].firstclassChild + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-secondclassAdult" + '">' +data[x].secondclassAdult  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-secondclassChild" + '">' +data[x].secondclassChild  + '</td>');
	
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="edit1"><i class="material-icons" >mode_edit</i></a></div></td>');
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
    
    
         $('.edit1').click(function (e) {
                var id = $(this).attr('href');

                $('#myModal1').appendTo("body").modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-trainID').text();
//assing values
                    $('#tid').val(data[mycode].tid);
                    $('#tname').val(data[mycode].tname);
                    $('#firstclassAdult').val(data[mycode].firstclassAdult);
                    $('#firstclassChild').val(data[mycode].firstclassChild);
                    $('#secondclassAdult').val(data[mycode].secondclassAdult);
                    $('#secondclassChild').val(data[mycode].secondclassChild);
                    
                   
                }, 250);
                e.preventDefault();
            });
			
  });
  
    
        });

</script>

<div id="subloader22">
    
</div>