	    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	      <div class="mdl-tabs__tab-bar">
                  <a href="javascript:void(0)" id="add_root_inform"class="btn btn-raised btn-success col-lg-3">Add Root Information</a>
	       
		
                  &nbsp;
                   <a href="javascript:void(0)" id="view_root_inform"class="btn btn-raised btn-success col-lg-3">View Root Information</a>
	          
	      </div>
	    </div>
	
		<div id="subloader03">
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
                	
                <th>Root</th>
                <th>Train</th>
                <th>From</th>
                <th>TO</th>
                <th>View Root</th>
            </tr>

        </thead>
        <tbody id="dbody" class="col-lg-14"></tbody>
    </table>
		
		
<!-- -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>View Train Root</legend></h4>
            
                <img src="C/Users/Laiya/Downloads/12615137_1021208477921058_3754565893992654190_o.jpg"  style="width:304px;height:228px;">
            </div>
        </div>
    </div>
</div>
<!-- -->

		</div>
		
		
		
		<script type="text/javascript">
    $(document).ready(function () {
		
		
		    $('#add_root_inform').click(function (e2) {
        e2.preventDefault();
        $('#subloader03').empty();
        $('#subloader03').load('locationFinder/add_root_inform', function () {
        });
    });
				    $('#view_root_inform').click(function (e2) {
        e2.preventDefault();
        $('#subloader03').empty();
        $('#subloader03').load('locationFinder/view_root_inform', function () {
        });
    });
		
		
		
		
		
        $.getJSON('locationFinder/search_root', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-root" + '">' +data[x].root  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-train" + '">' + data[x].train + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-from" + '">' + data[x].from + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-to" + '">' + data[x].to  + '</td>');
		         $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].idNumber + '" class="navigation"><i class="material-icons" >navigation</i></a></div></td>');
    	        $("." + x + "").append('<td id="' + "-id" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].id + "-id" + '">' + x + '</td>');
	       
    $("." + x + "").append('</tr>');
            }
            
            //===================================================
             $('.navigation').click(function (e) {
                var id = $(this).attr('href');

                $('#myModal').appendTo("body").modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-id').text();
//assing values   
                     $('#rootcode').val(data[mycode].rootid);
                     $('#station').val(data[mycode].station);
                     $('#latitude').val(data[mycode].latitude);
                     $('#longitude').val(data[mycode].longitude);
                     $('#point').val(data[mycode].point);
                    
                }, 250);
                e.preventDefault();
            });
            
            
            
            //=====================================================
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