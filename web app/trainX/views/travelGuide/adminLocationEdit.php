			</br></br>
			
			<form class="form-horizontal">
    <fieldset>
        <legend>Search Location</legend>
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
        <col style="width:5%">
        <col style="width:10%">
        <col style="width:10%">		
        <thead>
            <tr>
                <th></th>			
                <th>Location</th>
                <th>Description</th>
                <th>Nearest Railway Station</th>
                
				<th></th>
				<th >Edit Location</th>
				<th>Delete Location</th>
            </tr>

        </thead>
        <tbody id="dbody"></tbody>
    </table>
		
		

		
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Location</legend></h4>

            </div>
   <form class="form-horizontal" id="updateLocation_form" action="travelGuide/update_Location" method="post" ">
            <div class="modal-body">
             
                    <fieldset>






                        <div class="form-group">
                            <label for="managercode" class="col-lg-2 control-label">id</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="id" id="id"  readonly/>
                            </div>
                        </div>

                        
                        <div class="form-group">

                            <div class="col-lg-2 control-label">
                                <label for="fnameManager">Location</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="Locations" placeholder="" id="Locations"
                                       title="Use only letters for Location"/>
                            </div>

                            <div class="col-lg-2 control-label">
                                <label for="lnameManager">Nearest Railway Station</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="nearestRS" placeholder="" id="nearestRS"
                                       title="Use only letters " />
                            </div>

                        </div>



                 

                        <div class="form-group">
                            <div class="col-lg-2 control-label">
                                <label for="mpnumber">Description</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="Description" placeholder="" id="Description"
                                       title="Use only letters " />
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
		
        $.getJSON('travelGuide/Location_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                 $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-Photohoto" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].Photo+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-Locations" + '">' +data[x].Locations + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-Description" + '">' + data[x].Description + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-nearestRS" + '">' + data[x].nearestRS + '</td>');
                
                $("." + x + "").append('<td id="' + "-employee" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].id + "-employeeID" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="edit"><i class="material-icons" >mode_edit</i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id+ '" class="remove"><i class="material-icons">delete</i></a></div></td>');
               				

				$("." + x + "").append('</tr>');
            }
			
			            $('.remove').click(function (e) {
                var id = $(this).attr('href');

                swal({title: "Are you sure?",
                    text: "You will not be able to recover this Location!",
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
                            url: 'travelGuide/delete_Locations',
                            data: {idValue: id},
                            success: function (data) {
                                swal("Deleted!", "Data has been deleted!", "success");
                                $('#subloader03').empty();
                                $('#subloader03').load('travelGuide/adminLocationsAdd').hide().fadeIn('slow');
                               
                            }
                        });

                    } else {
                        swal("Cancelled", "Location is safe :)", "error");
                    }
                });


                return false;
            });
			
			    $('.edit').click(function (e) {
                var id = $(this).attr('href');

                $('#myModal').appendTo("body").modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-employeeID').text();
//assing values
                    $('#id').val(data[mycode].id);
					$('#Locations').val(data[mycode].Locations);
                   // $('#Locations').val(data[mycode].Locations);
                    $('#Description').val(data[mycode].Description);
                    $('#nearestRS').val(data[mycode].nearestRS);
                    
                    $('#Photo').val(data[mycode].Photo);
                   
                }, 250);
                e.preventDefault();
            });
			
			
			
			
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
  
  
          $('#updateLocation_form').submit(function (e) {
      
         e.preventDefault();
        var form = $('#updateLocation_form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').appendTo("body").modal('hide');
         $('#subloader03').empty();
           $('#subloader03').load('travelGuide/adminLocationsAdd').hide().fadeIn('slow');
            }
        });
                                
                                
        });
  
  
  
  
    });
	
	
	</script>
	
	
	
	
	
	
