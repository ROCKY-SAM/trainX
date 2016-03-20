<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="detailedReport" class="btn btn-raised btn-default">Detailed Report</a>
        <a href="javascript:void(0)" id="graphicalReport" class="btn btn-raised btn-default">Graphical Report</a>
        <a href="javascript:void(0)" onclick="myFunction()" id="paypal" class="btn btn-raised btn-default">Paypal Account Login</a>
    </div>
</div>

    <br>

    </br>
    <form class="form-horizontal" method="post" action="clients/insertTranactions" id="clienttrasactions">
        <fieldset> 
            <label for="cname" class="col-lg-2 control-label">Train Name</label>
            <div class="col-lg-3">

                <select id="trainName" class="form-control" name="trainName" onchange="loadnum()" required>
                    <option></option>
                </select>
            </div>

            <div class="form-group">
                <label for="cyear" class="col-lg-1 control-label">Year</label>
                <div class="col-lg-2">

                    <select id="cliyear" class="form-control" name="cliyear" onchange="loadyear()" required>
                        <option></option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                    </select>
                </div>

                <label for="cmonth" class="col-lg-1 control-label">Month</label>
                <div class="col-lg-2">

                    <select id="climonth" class="form-control" name="climonth" onchange="loadmonth()" required>
                        <option></option>
                        <option value="01">January</option>
                        <option value="02">February</option>
                        <option value="03">March</option>
                        <option value="04">April</option>
                        <option value="05">May</option>
                        <option value="06">June</option>
                        <option value="07">July</option>
                        <option value="08">August</option>
                        <option value="09">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>                
                    </select>
                </div>




            </div>

        </fieldset>
    </form>
    <br>
    <table class="table table-striped table-hover ">
        <col style="width:15%">		
        <col style="width:10%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <thead>
            <tr>

                <th>Payment ID</th>
                <th>Date</th>
                <th>Customer Name</th>
                <th>Reserved Train</th>
                <th>Class</th>
                <th>Ticket Price</th>
            </tr>

        </thead>
        <tbody id="newww"></tbody>
    </table>

    <div class="form-group">
        <label for="" class="col-lg-2 control-label">Total Amount</label>
        <div class="col-lg-3">
            <input type="text" class="form-control" id="amountt" placeholder="" name="amountt" readonly >
        </div>
    </div>


<script type="text/javascript">


    $.getJSON('paymentHandel/view_trains_payment', function (data) {

        var len = data.length;

        for (x = 0; x < len; x++) {
            $('#trainName').append(
                    $('<option class="trainName" id="' + x + '"></option>').val(x).html(data[x].tname));
            
        }


    });

    function loadnum() {
        var Table = document.getElementById("newww");
        Table.innerHTML = "";
        var totalof = parseInt("0");
        var ee = document.getElementById("trainName").value;
        $.getJSON('paymentHandel/view_trains_payment', function (datae) {


            $.getJSON('paymentHandel/view_Report_detailed', function (data) {



                var len = data.length;
                for (y = 0; y < len; y++) {
                    if (data[y].reservedTrain === datae[ee].tname) {
                        $("#newww").append('<tr class="' + "a" + y + '" id="' + data[y].paymentDate + '">');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-a" + '">' + data[y].paymentID + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-e" + '">' + data[y].paymentDate + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-b" + '">' + data[y].cusName + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-c" + '">' + data[y].reservedTrain + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-d" + '">' + data[y].class + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-e" + '">' + data[y].ticketPrice + '</td>');
                        $("." + "a" + y + "").append('</tr>');
                        totalof = totalof + parseInt(data[y].ticketPrice);
                    }
                }
                document.getElementById("amountt").value = totalof;

            });


        });
    }
    
    
    function loadyear() {
        
var Table = document.getElementById("newww");
Table.innerHTML = "";

document.getElementById("amountt").value="";

var totalof=parseInt("0");

        var ee = document.getElementById("trainName").value;
        var ss = document.getElementById("cliyear").value;
    
       // $.getJSON('clients/getclientdata', function (data) {

                               
        $.getJSON('paymentHandel/view_Report_detailed', function (data) {
        
            var len = data.length;
            for (y = 0; y < len; y++) {
                if (data[y].reservedTrain === datae[ee].tname) {
                    
                    var datetake=data[y].paymentDate;
                     var res = datetake.split("-",1);
               if(ss===res){
                    
                    
                    
                    
                    
                $("#newww").append('<tr class="' +"a"+y + '" id="' + data[y].paymentDate + '">');
                $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-a" + '">' + data[y].paymentID + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-e" + '">' + data[y].paymentDate + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-b" + '">' + data[y].cusName + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-c" + '">' + data[y].reservedTrain + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-d" + '">' + data[y].class + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-e" + '">' + data[y].ticketPrice + '</td>');
                $("." + "a"+y + "").append('</tr>');
                totalof=totalof+parseInt(data[y].ticketPrice);
            }
            }
            }
              document.getElementById("amountt").value=totalof; 
            
      //   });   
            
           
        });
    }
    
    function loadmonth() {
        
var Table = document.getElementById("newww");
Table.innerHTML = "";

document.getElementById("amountt").value="";

var totalof=parseInt("0");

        var ee = document.getElementById("trainName").value;
        var ss = document.getElementById("cliyear").value;
     var tt = document.getElementById("climonth").value;
       // $.getJSON('clients/getclientdata', function (data) {

                               
        $.getJSON('paymentHandel/view_Report_detailed', function (data) {
        
            var len = data.length;
            for (y = 0; y < len; y++) {
               if (data[y].reservedTrain === datae[ee].tname) {
                    
                    var datetake=data[y].paymentDate;
                     var res = datetake.split("-", 1);
               if(ss===res){
                     var datetake=data[y].paymentDate;
                     var ress = datetake.split("-", 2);
                   
                   
                    if(tt===ress){
                    
                    
                    
                    
                $("#newww").append('<tr class="' +"a"+y + '" id="' + data[y].paymentDate + '">');
                $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-a" + '">' + data[y].paymentID + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-e" + '">' + data[y].paymentDate + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-b" + '">' + data[y].cusName + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-c" + '">' + data[y].reservedTrain + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-d" + '">' + data[y].class + '</td>');
                        $("." + "a" + y + "").append('<td style="text-align:left;" id="' + data[y].paymentDate + "-e" + '">' + data[y].ticketPrice + '</td>');
                $("." + "a"+y + "").append('</tr>');
                totalof=totalof+parseInt(data[y].ticketPrice);
            }
            }
            }
            }
              document.getElementById("amountt").value=totalof; 
            
      //   });   
            
           
        });
    }


    
    

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


</script>

<script type="text/javascript">
    $(document).ready(function () {


        $('#detailedReport').click(function (e2) {
            e2.preventDefault();
            $('#subloader2').empty();
            $('#subloader2').load('paymentHandel/detailspayment', function () {
            });
        });

        $('#graphicalReport').click(function (e2) {
            e2.preventDefault();
            $('#subloader2').empty();
            $('#subloader2').load('paymentHandel/graphicalReport', function () {
            });
        });
        
         $('#paypal').click(function (e2) {
            e2.preventDefault();
            $('#subloader2').empty();
            $('#subloader2').load('paymentHandel/paypal', function () {
            });
        });


     


    });

</script>

<script>
function myFunction() {
    window.open("https://www.sandbox.paypal.com/signin");
}
</script>