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
    <col style="width:15%">		
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:15% ">
<!--    <col style="width:5% ">-->
    <thead>
        <tr>			

            <th>Train ID</th>
            <th>Train Name</th>
            <th>Start Location</th>
            <th>End Location</th>
           
            <th>View Station Prices</th>


<!--                <th>Reserved Seats</th>-->


        </tr>

    </thead>
    <tbody id="dbody"></tbody>
</table>

<div class="modal fade" id="myModal33" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>View Ticket Prices</legend></h4>

            </div>

            <br> </br>
            <form class="form-horizontal" id="updatePrices" >
                <div class="modal-body">

                    <fieldset>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Train ID</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tid" id="tid"  readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Train Name</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="tname" id="tname" readonly/>
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
                   
                </div>
            </form>
        </div>
    </div>
</div>
</div>



<script type="text/javascript">
    $(document).ready(function () {





        $.getJSON('reservationManagement/train_price', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {


                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' + data[x].tid + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].tname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' + data[x].startLocation + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].endLocation + '</td>');

                //$("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="viewPrices"><i class="material-icons" >image</i></a></div></td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="edit1"><i class="material-icons" >assignment</i></a></div></td>');

                //        $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="remove"><i class="material-icons">delete</i></a></div></td>');		
                $("." + x + "").append('<td id="' + "-employee" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].tid + "-trainID" + '">' + x + '</td>');



                $("." + x + "").append('</tr>');
            }

            $('#priceViewNext').click(function (e2) {
                e2.preventDefault();
                $('#subloader2').empty();
                $('#subloader2').load('reservationManagement/priceViewNextc', function () {
                });
            });




            $('.edit1').click(function (e) {
                var id = $(this).attr('href');
                $("#kkkk").empty();
                $('#myModal33').appendTo("body").modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-trainID').text();
//assing values
                    $('#tid').val(data[mycode].tid);
                    $('#tname').val(data[mycode].tname);


                    var passid=data[mycode].tid;
                    window.localStorage.setItem("selectitemsmm",passid);

                    $.getJSON('reservationManagement/train_station_prices', function (dataofthe) {
                        var len = dataofthe.length;
                        
                        for (x = 0; x < len; x++) {
                         
                            if (passid == dataofthe[x].trainID) {
                             
                              
                                $("#kkkk").append('<div class="form-group"><div class="col-lg-6"><input type="text" id="priceid' + x + '"  hidden/><input type="text" class="form-control" id="stname2' + x + '" name="stname2" readonly/></div><div class="col-lg-2"><input type="text" class="form-control" id="stname2price' + x + '" name="stname2price" readonly/></div></div>');
$('#priceid' + x).val(dataofthe[x].priceID);
                                $('#stname2' + x).val(dataofthe[x].station2Name);
                                $('#stname2price' + x).val(dataofthe[x].station2price);



                            }


                        }


                    });
                      $('#myModal33').appendTo("body").modal('show');
                      


                }, 250);
                e.preventDefault();
            });
            
            $('.viewPrices').click(function (e) {
                var id = $(this).attr('href');

          //      $('#myModal33').appendTo("body").modal('show');
                setTimeout(function () {
                    var mycode = $('#' + id + '-trainID').text();
//assing values
                    $('#tid').val(data[mycode].tid);
                    $('#tname').val(data[mycode].tname);


                    var passid=data[mycode].tid;
                    window.localStorage.setItem("selectitemsmm",passid);

                    $.getJSON('reservationManagement/train_station_prices', function (dataofthe) {
                        var len = dataofthe.length;
                        
                        for (x = 0; x < len; x++) {
                         
                            if (passid == dataofthe[x].trainID) {
                             
                              
                                $("#kkkk").append('<div class="form-group"><div class="col-lg-6"><input type="text" id="priceid' + x + '"  hidden/><input type="text" class="form-control" id="stname2' + x + '" name="stname2" readonly/></div><div class="col-lg-2"><input type="text" class="form-control" id="stname2price' + x + '" name="stname2price" /></div></div>');
$('#priceid' + x).val(dataofthe[x].priceID);
                                $('#stname2' + x).val(dataofthe[x].station2Name);
                                $('#stname2price' + x).val(dataofthe[x].station2price);



                            }


                        }


                    });
                      $('#myModal33').appendTo("body").modal('show');


                }, 250);
                e.preventDefault();
            });
            

        });


    });
    
    
    

               function myFunction() {
               
               
               
                $.getJSON('reservationManagement/train_stations', function (data3) {
           
            var len = data3.length;
            for (x = 0; x < len; x++) {
                if(window.localStorage.getItem("selectitemsmm") == data3[x].trainID)
                {
                    alert("sdfkh");
                var a = document.getElementById("priceid"+x).value;
                var b = document.getElementById("stname2price"+x).value;
                
                $.ajax({
                        type: 'POST',
                        url: 'reservationManagement/updateprices',
                        data: {
                           trainID: a,
                            station2price:b
                                      },
                        success: function (data3) {
                           alert(data3);
//                             $('#myModal33').appendTo("body").modal('hide');
//                             $('#subloader2').empty();
                             //$('#subloader2').load('reservationManagement/addTrains').hide().fadeIn('slow');
                        }
                    });
                
            }
        
            }
    });
    
                    }

</script>

