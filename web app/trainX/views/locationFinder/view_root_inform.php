		
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
                	
                <th>Root </th>
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
            <!--Form Start -->
                     <form class="form-horizontal" method="POST" action="locationFinder/update_station_root" enctype="multipart/form-data"  id="update_station_root" > 
            <fieldset>
                 <!--font style-->
                 
                <!--names -->
                <div class="form-group">

                    <div class="col-lg-3 control-label">
                        <label for="station">New Station</label>
                    </div>

                    <div class="col-lg-8">
                        <input type="text" id="station"class="form-control" name="station" placeholder="" 
                         />
                    </div>
              
			  </div>

                <div class="form-group">
				
                    <div class="col-lg-3 control-label">
                        <label for="latitude">Latitude</label>
                    </div>

                    <div class="col-lg-8">
                        <input type="text" id="latitude"class="form-control" name="latitude" placeholder="" 
                         pattern="[0-9\.]{0,10}" title="Enter numbers only"  required=""      />
                    </div>

                </div>

               

                <div class="form-group">

					

					<div class="col-lg-3 control-label">
                        <label for="longitude">Longitude</label>
                    </div>

                    <div class="col-lg-8">
                        <input type="text" id="longitude"class="form-control" name="longitude" placeholder="" 
                             pattern="[0-9\.]{0,10}" title="Enter numbers only"  required=""  />
                    </div>
					
								  </div>

                <div class="form-group">
					
					
					<div class="col-lg-3 control-label">
                        <label for="point">Point</label>
                    </div>

                    <div class="col-lg-8">
                        <input type="text" id="point"class="form-control" name="point" placeholder=""  pattern="[0-9]{0,10}" title="Enter numbers only"  required="" />
.					
                </div>
                </div>



       	   
           
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-8">
                         
                    <button type="submit" class="btn btn-primary">Okay</button>
                    </div>
                </div>

            </fieldset>
        </form>

            <!--Form End -->

            
            
            
            
            </div>
             
            </div>   
    </div>
                </div>

  <!-- -->
		
		<script type="text/javascript">
    $(document).ready(function () {
		
		
		
		
		
		
		
        $.getJSON('locationFinder/view_rooting', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                				
                $("." + x + "").append('<td id="' + data[x].id + "-root" + '">' +data[x].root  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-station" + '">' + data[x].station + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-latitude" + '">' + data[x].latitude+'</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-longitude" + '">' + data[x].longitude+'</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-point" + '">' + data[x].point  + '</td>');
                
                
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="edit"><i class="material-icons" >edit</i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].station+ '" class="remove"><i class="material-icons" >delete</i></a></div></td>');
		    $("." + x + "").append('<td id="' + "-root" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].id + "-rootid" + '">' + x + '</td>');
	
                $("." + x + "").append('</tr>');
            }

//==========================
 $('.remove').click(function (e) {
                var station = $(this).attr('href');

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
                            data: {station: station},
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

                //$('#myModal').appendTo("body").modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-rootid').text();
//assing values   
                   // alert(mycode);
                    
                     $('#station').val(data[mycode].station);
                     $('#latitude').val(data[mycode].latitude);
                     $('#longitude').val(data[mycode].longitude);
                     $('#point').val(data[mycode].point);
                  $('#myModal').appendTo("body").modal('show');  
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