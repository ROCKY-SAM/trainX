
 <br></br>
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
       
           <!--  <a href="javascript:void(0)" class="btn btn-default btn-raised">Date</a>
              <a href="bootstrap-elements.html" data-target="#" class="btn btn-default btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>-->
             
               <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Date
  <span class="caret"></span></button>
  
              
              <a href="javascript:void(0)" class="btn btn-default btn-raised">Train Name</a>
              <a href="bootstrap-elements.html" data-target="#" class="btn btn-default btn-raised dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>

              <ul class="dropdown-menu">
                <li><a href="javascript:void(0)">Action</a></li>
                <li><a href="javascript:void(0)">Another action</a></li>
                <li><a href="javascript:void(0)">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="javascript:void(0)">Separated link</a></li>
              </ul>
            </div> 
    
   <!-- <br></br>
    <center>
     <a href="javascript:void(0)" class="btn btn-default btn-raised">Search</a>
    </center>
   -->
  
    
    
    <br><br>     </br> </br>
			
		<table class="table table-striped table-hover ">
        <col style="width:10%">		
        <col style="width:20%">
        <col style="width:20%">
        <col style="width:12%">
        <col style="width:12%">
        <col style="width:12%">
        <col style="width:12% ">
        <thead>
            <tr>
                <th></th>			
                
                <th>Train ID
                    
                </th>
                <th>Train Name</th>
                <th>Date</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Total Seats</th>
                <th>Reserved Seats</th>
                
                
            </tr>

        </thead>
        <tbody id="dbody"></tbody>
    </table>
		
		
		
		
		</div>
		
		
		
		<!--<script type="text/javascript">
    $(document).ready(function () {
		
		
	
		
		
		
		
		
        $.getJSON('profileManage/customer_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].customerId  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].Nic + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-fnamelname" + '">' + data[x].email + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-email" + '">' + data[x].phoneNumber  + '</td>');
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
	
	
	</script> -->