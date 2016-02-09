		
<br>
<form class="form-horizontal">
    <fieldset>
        <legend>Search Station</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>

</br>
			
		<table class="table table-striped table-hover ">
        <col style="width:10%">		
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:20%">
        <col style="width:20%">
        <thead>
            <tr>
                	
                <th>Root ID</th>
                <th>Station</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Point</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

        </thead>
        <tbody id="dbody" class="col-lg-14"></tbody>
    </table>
		
		
		
		

		
		<!-- Edit Rooting Station -->
  		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Station</legend></h4>

            </div>
              <form class="form-horizontal" method="POST" action="locationFinder/update_station_root"  id="update_station_root" onsubmit="return submitForm();">
            <fieldset>
            
                <div class="modal-body">

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
                        <input type="text" class="form-control" id="station" name="station" placeholder="" 
                         />
                    </div>
              
			  </div>

                <div class="form-group">
				
                    <div class="col-lg-2 control-label">
                        <label for="latitude">Latitude</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="latitude" id="latitude" placeholder=""   />
                    </div>

                </div>

               

                <div class="form-group">

					

					<div class="col-lg-2 control-label">
                        <label for="longitude">Longitude</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="point" id="longitude" placeholder=""  />
                    </div>
					
								  </div>

                <div class="form-group">
					
					
					<div class="col-lg-2 control-label">
                        <label for="point">Point</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="point" id="point" placeholder=""  /> </div>
.					
                </div>
                </div>



       	   
           
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                         
                        <input type="reset" class="btn btn-default">
                        <input type="submit" class="btn btn-primary"  >
                    </div>
                </div>
                </div>
    </div>      
</fieldset>
        </form>
       
    </div>
                </div>
  <!-- -->
		
		<script type="text/javascript">
    $(document).ready(function () {
		
		
		
		
		
		
		
        $.getJSON('locationFinder/view_rooting', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].rootid + '">');
                				
                $("." + x + "").append('<td id="' + data[x].id + "-rootid" + '">' +data[x].rootid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-station" + '">' + data[x].station + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-latitude" + '">' + data[x].latitude+'</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-longitude" + '">' + data[x].longitude+'</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-point" + '">' + data[x].point  + '</td>');
                
                
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].rootid + '" class="edit"><i class="material-icons" >edit</i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].rootid + '" class="remove"><i class="material-icons" >delete</i></a></div></td>');
		    $("." + x + "").append('<td id="' + "-root" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].rootid + "-rootid" + '">' + x + '</td>');
	
                $("." + x + "").append('</tr>');
            }

//==========================
 $('.remove').click(function (e) {
                var id = $(this).attr('href');

                swal({title: "Are you sure?",
                    text: "You will not be able to recover this Employee!",
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
                            url: 'locationFinder/delete_station_inform',
                            data: {rootid: id},
                            success: function (data) {
                                swal("Deleted!", "Data has been deleted!", "success");
                                $('#subloader03').empty();
                                $('#subloader03').load('locationFinder/view_root_inform').hide().fadeIn('slow');
                               
                            }
                        });

                    } else {
                        swal("Cancelled", "Your Employee is safe :)", "error");
                    }
                });


                return false;
            });
    //======================
        $('.edit').click(function (e) {
                var id = $(this).attr('href');

                $('#myModal').appendTo("body").modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-rootid').text();
//assing values   
                     $('#rootcode').val(data[mycode].rootid);
                     $('#station').val(data[mycode].station);
                     $('#latitude').val(data[mycode].latitude);
                     $('#longitude').val(data[mycode].longitude);
                     $('#point').val(data[mycode].point);
                    
                }, 250);
                e.preventDefault();
            });









//====================
});
  
  
  	    $("#searchInput").keyup(function () {
        //split the current value of searchInput
        var data = this.value.split(" ");
        //create a jquery object of the rows
        var jo = $("#dbody").find("tr");
        if (this.value == "") {
            jo.show();
            return;
        }
        //hide all the rows
        jo.hide();

        //Recusively filter the jquery object to get results.
        jo.filter(function () {
            var $t = $(this);
            for (var d = 0; d < data.length; ++d) {
                if ($t.is(":contains('" + data[d] + "')")) {
                    return true;
                }
            }
            return false;
        })
        //show the rows that match.
        .show();
    });
  
   
			
    });
//=================================================
$('#update_station_root').submit(function (e) {
      
         e.preventDefault();
        var form = $('#update_station_root');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').appendTo("body").modal('hide');
         $('#subloader03').empty();
           $('#subloader03').load('locationFinder/view_root_inform').hide().fadeIn('slow');
            }
        });
                                
                                
        });

//================================================
	
	</script>