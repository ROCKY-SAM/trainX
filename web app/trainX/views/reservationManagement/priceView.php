 <br><br>     </br> </br>
			
		<table class="table table-striped table-hover ">
        <col style="width:15%">		
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15% ">
        <thead>
            <tr>			
                
                <th>Train ID</th>
                <th>Train Name</th>
                <th>Adult First Class</th>
                <th>Child First Class</th>
                <th>Adult Second Class</th>
                <th>Child Second Class</th>
<!--                <th>Reserved Seats</th>-->
                
                
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
		
		
		
		
		
        $.getJSON('reservationManagement/train_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].tid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].tname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].firstclassAdult  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].firstclassChild + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].secondclassAdult  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].secondclassChild  + '</td>');
				$("." + x + "").append('</tr>');
            }
  });
 
  
  
    });
	
	
	</script>