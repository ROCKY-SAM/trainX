
			
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
		
		
		
		
		
		
		
		<script type="text/javascript">
    $(document).ready(function () {
		

		
		
		
		
        $.getJSON('travelGuide/users_list', function (data) {
           
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
  
  

  
    });
	
	
	</script>