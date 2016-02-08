	    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	      <div class="mdl-tabs__tab-bar">
	          <a href="javascript:void(0)" id="admin_list_manage" class="btn btn-raised btn-default">Admin List Manage</a>
			  &nbsp;
	          <a href="javascript:void(0)" id="adminuser" class="btn btn-raised btn-default">Admin Users Add</a>
	      </div>
	    </div>
	
		<div id="subloader03">
		
			</br></br>
			
			<form class="form-horizontal">
    <fieldset>
        <legend>Search Employee</legend>
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
                <th></th>			
                <th>Employee ID</th>
                <th>Employee Role</th>
                <th>Employee Full Name</th>
                <th>Employee Email</th>
            </tr>

        </thead>
        <tbody id="dbody"></tbody>
    </table>
		
		
		
		
		</div>
		
		
		
		<script type="text/javascript">
    $(document).ready(function () {
		
		
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
    });
		
		
		
		
		
        $.getJSON('profileManage/users_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].idNumber  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].role + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-fnamelname" + '">' + data[x].fname+" "+data[x].lname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-email" + '">' + data[x].email  + '</td>');
				$("." + x + "").append('</tr>');
            }
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
	
	
	</script>