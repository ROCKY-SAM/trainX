
 <br></br>

  		<form class="form-horizontal">
    <fieldset>
        <legend>Search By Train Name</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>
    
    
    <br><br>     </br> </br>
			
		<table class="table table-striped table-hover ">
        <col style="width:12%">		
        <col style="width:12%">
        <col style="width:12%">
        <col style="width:12%">
        <col style="width:12%">
        <col style="width:12%">
        <col style="width:12% ">
        <col style="width:12% ">    
        <thead>
            <tr>			
                
                <th>Train ID</th>
                <th>Train Name</th>
                <th>Date</th>
                <th>No of Reserved Seats 1st Class</th>
                <th>Total No of Seats 1st Class</th>
                <th>No of Reserved Seats 1st Class</th>
                <th>Total No of Seats 2nd Class</th>
                <th>Send Email</th>

                
                
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
		
		
		
		
		
        $.getJSON('reservationManagement/select_seats', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].tid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].tname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].date  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].reservedFirst + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].totalFirst  + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].reservedSecond  + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].totalSecond  + '</td>');
                
                 $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="remove"> <i class="material-icons">mail_outline</i></a></div></td>');			
                                                                                               

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