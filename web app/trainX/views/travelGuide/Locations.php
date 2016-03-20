	    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	      <div class="mdl-tabs__tab-bar">
	          <a href="javascript:void(0)" id="admin_list_manage" class="btn btn-raised btn-default">Location List Manage</a>

	      </div>
	    </div>
	
			
			<form class="form-horizontal">
    <fieldset>
        <legend>Search Locations</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>

</br>
			
		<table class="table table-striped table-hover ">
        <col style="width:0%">		
        <col style="width:0%">
        <col style="width:0%">
        <col style="width:0%">

        <thead>
            <tr>
                <th></th>			
                <th>Location</th>
                <th>Description</th>
                <th>Nearest Railway Station</th>
                
            </tr>

        </thead>
        <tbody id="dbody"></tbody>
    </table>
		
		
		
		
		
		
		<script type="text/javascript">
    $(document).ready(function () {
		
		
		    $('#admin_list_manage').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('travelGuide/adminLocationEdit', function () {
        });
    });
				    $('#adminuser').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('travelGuide/adminLocationsAdd', function () {
        });
    });
		
		
		
		
		
        $.getJSON('travelGuide/Location_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-Photohoto" + '">' +'<img src="/trainX/views/travelGuide/places/'+data[x].Photo+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-Locations" + '">' +data[x].Locations + '</td>');				
                $("." + x + "").append('<td style="width: 50px;" id="' + data[x].id + "-Description" + '">' + data[x].Description + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-nearestRS" + '">' + data[x].nearestRS + '</td>');
                
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
	
	
	<style>
	table
{
    table-layout: fixed;
    
}

td
{
   
    overflow: hidden;
}
	
	</style>