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
                <th>From</th>
                <th>TO</th>
                <th>Root Code</th>
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
            
           <div class="row">
    <div class="span11">
      <div id="map"></div>
    </div>
    <div class="span6">
        <br>
      
      <label>Train Root Information</label>
 <form class="form-horizontal" method="POST" action="locationFinder/update_station_root"  id="update_station_root" onsubmit="return submitForm();">
            <fieldset>
            
                

                <div class="form-group">
                    <label for="rootcode" class="col-lg-3 control-label">Root :</label>
                    <div class="col-lg-5">
                                <input type="text" class="form-control" name="point" id="root" placeholder=""  readonly/> 
                    </div>
                </div>
                    
                    <div class="form-group">
                    <label for="rootcode" class="col-lg-3 control-label">From:</label>
                    <div class="col-lg-5">
                                <input type="text" class="form-control" name="point" id="from" placeholder="" readonly /> 
                    </div>
                </div>
                     <div class="form-group">
                    <label for="rootcode" class="col-lg-3 control-label">To:</label>
                    <div class="col-lg-5">
                                <input type="text" class="form-control" name="point" id="to" placeholder="" readonly /> 
                    </div>
                     </div>
               <div class="form-group">
                    <label for="rootcode" class="col-lg-3 control-label">Root Code:</label>
                    <div class="col-lg-5">
                                <input type="text" class="form-control" name="point" id="root_code" placeholder=""  readonly/> 
                    </div>
               </div>
</fieldset>
        </form>
      
        <br>
      </div>
  </div>
            </div>
        </div>
    </div>
</div>
<!-- -->

		</div>
		
		
		<script type="text/javascript" src="alasql.min.js"></script>
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
                $("." + x + "").append('<td id="' + data[x].id + "-from" + '">' + data[x].from + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-to" + '">' + data[x].to + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-root_code" + '">' + data[x].rootcode  + '</td>');
		         $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="navigation"><i class="material-icons" >navigation</i></a></div></td>');
    	        $("." + x + "").append('<td id="' + "-id" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].id + "-id" + '">' + x + '</td>');
	       
    $("." + x + "").append('</tr>');
           }
            
            //===================================================
             $('.navigation').click(function (e) {
                var id = $(this).attr('href');

                $('#myModal').appendTo("body").modal('show');
                setTimeout(function () {
                    //========================================
                    
                   $.getJSON('locationFinder/navigation_root', function (data1) {
                  var  len1 = data1.length;
        map = new GMaps({
        el: '#map',
     
        
        lat:6.933499,
        lng:79.850399,
        click: function(e){
          console.log(e);
        }
      });
         var flightPlanCoordinates = [];
           var mycode1 = id;
            var cv = data[mycode1-1].rootcode;
               
            for (y = 0; y < len1; y++) {
               if(cv===data1[y].root_code){
                
                
              var point =new google.maps.LatLng(data1[y].latitude,data1[y].longitude);
              flightPlanCoordinates.push(point);
             
          
                
                }
                  
                }
               
      //=================
            
      //===================
         
            
                   
      map.drawPolyline({
       mapTypeId: google.maps.MapTypeId.ROADMAP,
        path: flightPlanCoordinates,
        strokeColor: '#181818',
        strokeOpacity: 0.6,
        strokeWeight: 6
       
      });
    //===================================
     for (i=0;i<len1;i++) {
  if(cv===data1[i].root_code){
  map.addMarker({
        lat: data1[i].latitude,
        lng: data1[i].longitude,
        title: 'Marker with InfoWindow',
        infoWindow: {
          content: '<p><i class="material-icons" >train</i>'+data1[i].station+'</p>'
        }
      }); 
  }}
    //===================================
  });
        //======================================
                var mycode = $('#' + id + '-id').text();
//assing values   
                     $('#root').val(data[mycode].root);
                     $('#from').val(data[mycode].from);
                     $('#to').val(data[mycode].to);
                     $('#root_code').val(data[mycode].rootcode);
                        
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