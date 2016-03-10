<html>
<!--    <style>
        
        #txt_title {
	color: #3d381b;
	font-size: 34px;
	text-align:center;
	text-shadow: 0 -1px 2px rgba(255,255,255,.5);
}
    </style>    -->
    
<br>
<h4 id="txt_title">Payment Details</h4>		
<!--			<form class="form-horizontal">
    <fieldset>
        <legend>Search Customer</legend>
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="filter">
            </div>
        </div>
    </fieldset>
</form>-->

</br>

<table class="table table-striped table-hover ">
    <col style="width:15%">		
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:15%">
    <col style="width:15%">
    <thead>
        <tr>

            <th>Payment ID</th>
            <th>Customer Name</th>
            <th>Reserved Train</th>
            <th>Class</th>
            <th>Ticket Price</th>
        </tr>

    </thead>
    <tbody id="dbody"></tbody>
</table>

</html>
<script type="text/javascript">
    $(document).ready(function () {


        $('#admin_list_manage').click(function (e2) {
            e2.preventDefault();
            $('#subloader03').empty();
            $('#subloader03').load('profileManage/adminUsersEdit', function () {
            });
        });
        $('#adminuser').click(function (e2) {
            e2.preventDefault();
            $('#subloader03').empty();
            $('#subloader03').load('profileManage/adminUsersAdd', function () {
            });
        });





        $.getJSON('paymentHandel/view_Report_detailed', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {




                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' + data[x].paymentID + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].cusName + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-fnamelname" + '">' + data[x].reservedTrain + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-email" + '">' + data[x].class + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-email" + '">' + data[x].ticketPrice + '</td>');
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