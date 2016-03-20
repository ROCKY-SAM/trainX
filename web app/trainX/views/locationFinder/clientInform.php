<style>
     #circle {
      width: 20px;
      height: 20px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      background: green;
    }
     #circle1 {
      width: 20px;
      height: 20px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      border-radius: 5px;
      background: red;
    }
</style>
<br>
 <div class="form-group">
       <label>Train Valuable : <a href="javascript:void(0)" class="btn btn-raised btn-success"></a> Train Invaluable : <a href="javascript:void(0)" class="btn btn-raised btn-danger"></a></label>
</div>

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

<br>
			
		<table class="table table-striped table-hover ">
        <col style="width:8%">		
        <col style="width:15%">
        <col style="width:10%">
        <col style="width:8%">
        <col style="width:16%">
         <col style="width:20%">
        <col style="width:10%">
        <thead>
            <tr>
                 <th> Term Id</th>
                <th>Train</th>
                <th>Date</th>
                <th>Term</th>
                <th>From</th>
                <th>To</th>
                <th>Availability</th>
            </tr>

        </thead>
        <tbody id="dbody" class="col-lg-14"></tbody>
    </table>
		
		
		
		
		
	<!---->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Client Inform</legend></h4>
            
      
     
 <form class="form-horizontal" method="POST" action="locationFinder/change_client_availability"  id="inform_insert_client" onsubmit="return submitForm();">
            <fieldset>
            
                <div class="modal-body">
                    
                <div class="form-group">
                    <label for="train" class="col-lg-2 control-label">Train:</label>
                    <div class="col-lg-4">
                                <input type="text" class="form-control" name="train" id="train" placeholder=""  readonly=""/> 
                    </div>
                    <label for="termid" class="col-lg-2 control-label">Term ID:</label>
                    <div class="col-lg-4">
                                <input type="text" class="form-control" name="termid" id="termid" placeholder=""  readonly=""/> 
                    </div>
                </div>

               <div class="form-group">
                    <label for="date" class="col-lg-2 control-label">Date:</label>
                    <div class="col-lg-4">
                             <input type="text" class="form-control" name="date" id="date" placeholder=""  readonly=""/> 
                    </div>
                    <label for="time" class="col-lg-2 control-label">Time:</label>
                    <div class="col-lg-4">
                                <input type="text" class="form-control" name="time" id="time" placeholder=""  readonly=""/> 
                    </div>
                    
                </div>
                       <div class="form-group">
                    <label for="from" class="col-lg-3 control-label">From:</label>
                    <div class="col-lg-6">
                                <input type="text" class="form-control" name="from" id="from" placeholder="" readonly=""  /> 
                    </div>
                    
                </div>
                     <div class="form-group">
                    <label for="to" class="col-lg-3 control-label">To:</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" name="to" id="to" placeholder="" readonly="" /> 
                    </div>
                     </div>
                    <div class="form-group">
                          <label for="availability" class="col-lg-3 control-label">Availability :</label>
                           <div class="col-md-6" id="availability">
                        <select required class="form-control" id="availability" name="availability" >

                            <option value="">Choose here</option>
                            <option value="true" >Valuable </option>
                            <option value="false" >Invaluable</option>
                      </select>
                  </div>
                    </div>
                    <div class="form-group">
      <label for="message" class="col-md-2 control-label">Message:</label>

      <div class="col-md-10">
        <textarea class="form-control" rows="3" id="message"></textarea>
          
      </div>
                    </div>
      <div class="form-group">
        
            <div class="col-rg-10">
                <button type="add" id="msg" class="btn btn-raised"><i class="glyphicon glyphicon-send"></i></button>
            </div>
      </div>
                    
                </div>
                   
                 </fieldset>
        </form>
      
        <br>
      </div>
  </div>
            </div>
        </div>
   

        <!---->
		
		
		<script type="text/javascript">
    $(document).ready(function () {
		
		
		
		
		
		
		
        $.getJSON('locationFinder/search_train1', function (data) {
           
            var len = data.length;

            for (x = 0; x < len; x++) {
               
			   
			    
			   
                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                				
                $("." + x + "").append('<td id="' + data[x].id + "-id" + '">' + data[x].termid  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-train" + '">' +data[x].train + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-date" + '">' + data[x].date+'</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-term" + '">' + data[x].term  + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-term" + '">' + data[x].from  + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-term" + '">' + data[x].to  + '</td>');
                  if(data[x].availability==="true")
                  {
                $("." + x + "").append('<td id="' + data[x].id + "-term" + '"><div id="circle"></div></td>');
                    }
                    else if(data[x].availability==="false")
                    {
                         $("." + x + "").append('<td id="' + data[x].id + "-term" + '"><div id="circle1"></div></td>');
                    }
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].id + '" class="inform"><i class="material-icons" >message</i></a></div></td>');
		$("." + x + "").append('<td class="hide" id="' + data[x].id + "-idd" + '">' + x + '</td>');
        $("." + x + "").append('</tr>');
            }
  //==========================================
  
  
  //==========================================
  
     $('.inform').click(function (e) {
           var id = $(this).attr('href');
 //          alert(id);
            
       
               setTimeout(function () {
                   
                     var mycode = $('#' + id + '-idd').text();
  
                        $('#train').val(data[mycode].train);
                        $('#termid').val(data[mycode].termid);
                        $('#date').val(data[mycode].date);
                        $('#time').val(data[mycode].term);
                        $('#from').val(data[mycode].from);
                        $('#to').val(data[mycode].to);
                        $('#availability').val(data[mycode].availability);
                      $('#myModal').appendTo("body").modal('show');
                }, 250);
                e.preventDefault();
//==============================================
    
 $.getJSON('locationFinder/get_client_information', function (data1) 
    {  
        var pnumber_array = [];
     //   var message_array = [];
       var leg = data1.length;
       var add_pnumber;
       var term_id = data[id-1].termid;
       for(z=0;z<leg;z++)
       {
           if((data1[z].termid)===(data[id-1].termid))
           {
            //=========================================
                
             add_pnumber = data1[z].pnumber;
             
             pnumber_array.push(add_pnumber);
            //===================================== 
         
           }
           
       }
      // alert(pnumber_array);
     
    //=============================================
        $('#msg').click(function (e) {
         
        var userPass = document.getElementById('message');
        var message = userPass.value;
        //========================================

        
        var dataString = pnumber_array; // array?
        var jsonString = JSON.stringify(dataString);
       
   $.ajax({
        type: "POST",
        url: "locationFinder/inform_insert_client",
        data: {data : jsonString ,mesg :message ,term_num :term_id}, 
        cache: false,

        success: function(){
            swal(
  'Inform Clinet!',
  'You clicked the button!',
  'success'
            );
      
    }
    }); 
        //=======================================
        
         
     }); 
     //====================
    });
//===============================================
    
    });
  

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
	//===============================
   $('#inform_insert_client').submit(function (e) {
      
         e.preventDefault();
        var form = $('#inform_insert_client');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                $('#myModal').appendTo("body").modal('hide');
         $('#subloader03').empty();
           $('#subloader03').load('locationFinder/clientInform').hide().fadeIn('slow');
            }
        });
                                
                                
        });

        
        //===============================
	
	</script>