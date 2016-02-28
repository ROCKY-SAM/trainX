 <br><br>     </br> </br>
			
		<table class="table table-striped table-hover ">
        <col style="width:15%">		
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
   
        <thead>
            <tr>			
                
                <th>Train ID</th>
                <th>Train Name</th>
                <th>Start Location</th>
                <th>End Location</th>
                <th>Time Starting</th>
                <th>Time Ending</th>
        
                
            </tr>
        </thead>
        <tbody id="dbody"></tbody>
    </table>
 

 
 
</div>
		
		
		
	<script type="text/javascript">
    $(document).ready(function () {
		

		
        $.getJSON('reservationManagement/train_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].tid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].tname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].startLocation  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].endLocation + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].timeStarting  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' +data[x].TimeEnding  + '</td>');
              
    $("." + x + "").append('</tr>');
            }
            
            
       

                 
    
    
			
  });
  
  
  
  
    
        });

</script>

<div id="subloader22">
    
</div>
