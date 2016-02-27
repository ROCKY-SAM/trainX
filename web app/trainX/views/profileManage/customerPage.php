<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">

    </div>
</div>

<div id="subloader03">

    </br></br>

    <form class="form-horizontal">
        <fieldset>
            <legend>Search Customer</legend>
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
        <col style="width:20%">
        <col style="width:10%">
        <col style="width:20%">
        <col style="width:5%">		
        <col style="width:10%">
        <col style="width:10%">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Customer fullname</th>
                <th>National ID</th>
                <th>Email</th> 
                <th></th> 				
                <th>Phone number</th>						                
                <th>Last activity</th>

            </tr>

        </thead>
        <tbody id="dbody"></tbody>
    </table>




</div>



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





        $.getJSON('profileManage/customer_list', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {




                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' + data[x].customerId + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-fullname" + '">' + data[x].customerfname + ' ' + data[x].customerlname + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-cusnic" + '">' + data[x].Nic + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-cusemail" + '">' + data[x].email + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-cusemailsend" + '"><i class="mdl-color-text--green-800 material-icons" role="presentation">mail_outline</i></td>');
                $("." + x + "").append('<td id="' + data[x].id + "-cusphone" + '">' + data[x].phoneNumber + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-cuslogin" + '">' + data[x].lastlogindate + '</td>');
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