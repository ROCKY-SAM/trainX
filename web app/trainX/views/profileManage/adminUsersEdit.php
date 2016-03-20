<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="admin_list_manage" class="btn btn-raised btn-default">Admin List Manage</a>
        &nbsp;
        <a href="javascript:void(0)" id="adminuser" class="btn btn-raised btn-default">Admin Users Add</a>
    </div>
</div>

			</br></br>
			
			<form class="form-horizontal">
    <fieldset>
        <legend>Search Employee</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="filter" />
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
                <th>Employee ID</th>
                <th>Employee Role</th>
                <th>Employee Full Name</th>
                <th>Employee Email</th>
				<th></th>
				<th >Edit Employee</th>
				<th>Delete Employee</th>
            </tr>

        </thead>
        <tbody id="dbody"></tbody>
    </table>
		
		
			
<!-- Modal -->
<div id="myModala" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	
	
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title" id="myModalLabel"><legend>Edit Employee</legend></h4>
      </div>
	  
	  
	   <form class="form-horizontal" id="updateAdmin_form" action="profileManage/updateEmployees" method="post" >  
	  
      <div class="modal-body">
                  <fieldset>


                        <div class="form-group">
                            <label for="managercode" class="col-lg-2 control-label">Employee Code</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="idnumber" id="idnumber"  readonly />
                            </div>
                        </div>

                        <!--names -->
                        <div class="form-group">

                            <div class="col-lg-2 control-label">
                                <label for="fnameManager">First Name</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="fname" placeholder="" id="fname"
                                       pattern="[a-zA-Z]{1,20}" title="Use only letters for First Name" required />
                            </div>

                            <div class="col-lg-2 control-label">
                                <label for="lnameManager">Last Name</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="lname" placeholder="" id="lname"
                                       pattern="[a-zA-Z]{1,20}" title="Use only letters for Last Name" required />
                            </div>

                        </div>



                 

                        <div class="form-group">
                            <div class="col-lg-2 control-label">
                                <label for="mpnumber">Mobile Phone</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="phoneNumber" placeholder="" id="phoneNumber"
                                       pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" title="Phone Number eg:0711234567 or 0112345678" required />
                            </div>

                        </div>

						                        <div class="form-group">
                            <div class="col-lg-2 control-label">
                                <label for="mpnumber">Role</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="role" placeholder="" id="role"
                                       title="Phone Number eg:0711234567 or 0112345678" />
                            </div>

                        </div>
						
                        <div class="form-group">
                            <div class="col-lg-2 control-label">
                                <label for="mpnumber">Email</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="email" class="form-control" name="email" placeholder="" id="email"
                                        required />
                            </div>

                        </div>




                    </fieldset>
      </div>
	  
	  
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 <button type="submit" class="btn btn-primary" >Save changes</button>
      </div>
    </form>  


  </div>

  </div>
</div>
	

		
		<script type="text/javascript">
    $(document).ready(function () {
		
        $.getJSON('profileManage/users_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].idNumber  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].role + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-fnamelname" + '">' + data[x].fname+" "+data[x].lname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-email" + '">' + data[x].email  + '</td>');
                $("." + x + "").append('<td id="' + "-employee" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].idNumber + "-employeeID" + '">' + x + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].idNumber + '" class="edit"><i class="material-icons" >mode_edit</i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].idNumber + '" class="remove"><i class="material-icons">delete</i></a></div></td>');
				$("." + x + "").append('</tr>');
            }
			
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
                            url: 'profileManage/delete_employees',
                            data: {idValue: id},
                            success: function (data) {
                                swal("Deleted!", "Data has been deleted!", "success");
                                $('#subloader03').empty();
                                $('#subloader03').load('profileManage/adminUsersAdd').hide().fadeIn('slow');
                               
                            }
                        });

                    } else {
                        swal("Cancelled", "Your Employee is safe :)", "error");
                    }
                });


                return false;
            });
			
			    $('.edit').click(function (e) {
                var id = $(this).attr('href');

               
                setTimeout(function () {
                    var mycode = $('#' + id + '-employeeID').text();
//assing values
                    $('#idnumber').val(data[mycode].idNumber);
                    $('#fname').val(data[mycode].fname);
                    $('#lname').val(data[mycode].lname);
                    $('#role').val(data[mycode].role);
                    $('#email').val(data[mycode].email);
                    $('#phoneNumber').val(data[mycode].phoneNumber);
                    $('#image').val(data[mycode].image);
     $('#myModala').appendTo("body").modal();               
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
  
  

  
  
  
  
    });
	
	
	          $('#updateAdmin_form').submit(function (e) {
      
         e.preventDefault();
     var form = $('#updateAdmin_form');
     $.ajax({
       type: form.attr('method'),
         url: form.attr('action'),
          data: form.serialize(),
         success: function (data) {
                $('#myModala').modal('hide');
			
             
         $('#subloader2').empty();
           $('#subloader2').load('profileManage/adminUsersEdit').hide().fadeIn('slow');
       }
     });
                                
                                
        });
	
	</script>
	
	
	
	
	
	
