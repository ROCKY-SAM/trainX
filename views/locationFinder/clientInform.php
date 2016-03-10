		
<br>
<form class="form-horizontal">
    <fieldset>
        <legend>Search Train</legend>
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
                	
                <th>ID</th>
                <th>Train</th>
                <th>Date</th>
                <th>Term</th>
                <th>Inform</th>
            </tr>

        </thead>
        <tbody id="dbody" class="col-lg-14"></tbody>
    </table>
		
		
		
		
		</div>
		
		
		
		<script type="text/javascript">
    $(document).ready(function () {
		
		
		
		
		
		
		
        $.getJSON('locationFinder/search_train', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                				
                $("." + x + "").append('<td id="' + data[x].id + "-id" + '">' +data[x].id  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-train" + '">' + data[x].train + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-date" + '">' + data[x].date+'</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-term" + '">' + data[x].term  + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].idNumber + '" class="edit"><i class="material-icons" >message</i></a></div></td>');
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