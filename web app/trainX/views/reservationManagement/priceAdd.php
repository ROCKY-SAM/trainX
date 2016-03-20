<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="priceAdd" class="btn btn-raised btn-default">Add Train Prices </a>
        <a href="javascript:void(0)" id="priceUpdate" class="btn btn-raised btn-default">Update Train Prices</a>
         <a href="javascript:void(0)" id="priceView" class="btn btn-raised btn-default">View Station Prices</a>

    </div>
</div>


<script type="text/javascript">


   $('#priceAdd').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/priceAddc', function () {
        });
    });
    
     $('#priceUpdate').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/priceUpdatec', function () {
        });
    });
    
     $('#priceView').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/viewstationprices', function () {
        });
    });
    
    
</script>

<br>

  <table class="table table-striped table-hover ">
        <col style="width:10%">		
        <col style="width:20%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:13%">
       
        
        <thead>
            <tr>			
                
                <th>Train ID</th>
                <th>Train Name</th>
                <th>Start Location</th>
                <th>End Location</th>
                <th>Time Starting</th>
                <th>Time Ending</th>
                <th>Add Prices</th>
               
                
            </tr>
        </thead>
        <tbody id="dbody"></tbody>
    </table>
 

 
 <div class="modal fade" id="myModal09" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Add Station Prices</legend></h4>

            </div>
            
            <br> </br>
   <form class="form-horizontal" id="updateTrains" action="ReservationManagement/addstationprices" method="post">
            <div class="modal-body">
             
                    <fieldset>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Train ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="trainID" id="tid"  readonly/>
                            </div>
                        </div>
                        
                      <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Train Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="trainName" id="tname" readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Start Location</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="startLocation" id="startLocation" readonly/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">End Location</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="endLocation" id="endLocation" readonly />
                            </div>
                        </div>

                        <br>
                        
                        <div class="form-group"> 

                            <div class="col-lg-4 control-label"> 
                                <label for="">Station Name</label> 
                            </div> 

                            <div class="col-lg-4 control-label"> 
                                <label for="">Station Price</label> 
                            </div> 	

                        </div>
                        
                        <div  id="kkkk">

                            </div>
                                      
                                


						
                    </fieldset>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" onclick="myFunction()" class="btn btn-primary">Add Prices</button>

            </div>
        </form>
        </div>
        </div>
    </div>

		
		
		
	<script type="text/javascript">
    $(document).ready(function () {
		
        $.getJSON('reservationManagement/train_list', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].tid + '">');
                //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-tid" + '">' +data[x].tid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-tname" + '">' + data[x].tname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-startLocation" + '">' +data[x].startLocation  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-endLocation" + '">' + data[x].endLocation + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-timeStarting" + '">' +data[x].timeStarting  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-TimeEnding" + '">' +data[x].TimeEnding  + '</td>');
                
		
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="edit"><i class="material-icons" >mode_edit</i></a></div></td>');
                //$("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="remove"><i class="material-icons">delete</i></a></div></td>');
                
                $("." + x + "").append('<td id="' + "-employee" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].tid + "-trainID" + '">' + x + '</td>');
                                                                                                
    $("." + x + "").append('</tr>');
            }
            
            
        
	$('.edit').click(function (e) {
                var id = $(this).attr('href');
                 $("#kkkk").empty();
              
                setTimeout(function () {
                    var mycode = $('#' + id + '-trainID').text();
//assing values
                    $('#tid').val(data[mycode].tid);
                    $('#tname').val(data[mycode].tname);
                    $('#startLocation').val(data[mycode].startLocation);
                    $('#endLocation').val(data[mycode].endLocation);
                    $('#timeStarting').val(data[mycode].timeStarting);
                    $('#TimeEnding').val(data[mycode].TimeEnding);
                    /* $('#image').val(data[mycode].image); */
    
    var passid=data[mycode].tid;
  window.localStorage.setItem("selectitemsmm",passid);
    //------start
           $.getJSON('reservationManagement/train_stations', function (dataofthe) {
           
            var len = dataofthe.length;
            

            for (x = 0; x < len; x++) {
                
               if(passid == dataofthe[x].trainID){
                //   alert(dataofthe[x].trainID);
             $("#kkkk").append('<div class="form-group"><div class="col-lg-6"><input type="text" class="form-control" id="stname2' + x +'" name="stname2" readonly/></div><div class="col-lg-2"><input type="text" class="form-control" id="stname2price' + x + '" name="stname2price" /></div></div>');            
    //       $("#kk").append('<div class"form-group"><div class="col-lg-2"><input type="text" class="form-control" id="stname2' + x + '"/></div><div class="col-lg-3"><input type="text" class="form-control" id="stname2price' + x + '"/></div></div>');		
          //   $('#stname2price').val(dataofthe[x]);
           $('#stname2'+x).val(dataofthe[x].station2Name);
      //      alert(dataofthe[x].station2Name);
            
            
            }

           		

            } 
    });
    
    
    
    //-------end
    
                 //    $('#stationName').val(data[mycode].stationName);
					 
		     $('#myModal09').appendTo("body").modal('show');
                   
                }, 250);
                e.preventDefault();
//            $('#subloader03').empty();
//           $('#subloader03').load('reservationManagement/updateTrains').hide().fadeIn('slow');
            });
			
			
			$('#updateTrains').submit(function (e) {
      
         e.preventDefault();
        var form = $('#updateTrains');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal09').appendTo("body").modal('hide');
         $('#subloader2').empty();
           $('#subloader2').load('reservationManagement/updateTrains').hide().fadeIn('slow');
            }
        });
                                
                                
        });
			
			
  });
  
  
  
  
    
        });
	      



               function myFunction() {
                $.getJSON('reservationManagement/train_stations', function (data3) {
           
            var len = data3.length;
            for (x = 0; x < len; x++) {
                if(window.localStorage.getItem("selectitemsmm") == data3[x].trainID)
                {
                var a = document.getElementById("stname2"+x).value;
                var b = document.getElementById("stname2price"+x).value;
                alert(data3[x].station2Name);
                $.ajax({
                        type: 'POST',
                        url: 'reservationManagement/addstationprices',
                        data: {
                            trainname: document.getElementById("tname").value,
                            trainID: document.getElementById("tid").value,
                            SLocation: document.getElementById("startLocation").value,
                            ELocation: document.getElementById("endLocation").value,
                            station1ID: a,
                            station1Name: b
                           
//
                                      },
                        success: function (data3) {
                           alert(data3);
//                             $('#myModal09').appendTo("body").modal('hide');
//                             $('#subloader2').empty();
                             //$('#subloader2').load('reservationManagement/addTrains').hide().fadeIn('slow');
                        }
                    });
                
            }
        
            }
    });
    
                    }
                
 
    
    

 
    </script>

