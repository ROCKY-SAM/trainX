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

<!-- 

<div class="modal fade" id="myModalemail">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" ><legend>New message</legend></h4>

            </div>
            <form class="form-horizontal" id="email_form" action="profileManage/sendEmailCustomer" method="post" >
                <div class="modal-body">

                    <fieldset>





          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" name="recipient-name" id="recipient-name" readonly />
            <input type="text" class="form-control" name="recipient" id="recipient" hidden />	
            <input type="text" class="form-control" name="time" id="time" hidden />	
			
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" rows="4"  name="message-text" id="message-text"></textarea>
          </div>

                    </fieldset>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save changes</button>

                </div>
            </form>

        </div>
    </div>
</div>

-->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
	
	
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title" ><legend>New message</legend></h4>
      </div>
	  
	  
	  <form class="form-horizontal" id="email_form" action="profileManage/sendEmailCustomer" method="post" >
	  
      <div class="modal-body">
                  <fieldset>





          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" name="recipient-name" id="recipient-name" readonly />
            <input type="text" class="form-control" name="recipient" id="recipient" hidden />	
            <input type="text" class="form-control" name="time" id="time" hidden />	
            <input type="text" class="form-control" name="name" id="name" hidden />				
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" rows="4"  name="message-text" id="message-text"></textarea>
          </div>

                    </fieldset>
      </div>
	  
	  
	  
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 <button type="button" class="btn btn-primary" id="elamai">Save changes</button>
      </div>
           </form>


  </div>

  </div>
</div>





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
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + x + '" class="edit"><i class="mdl-color-text--green-800 material-icons" role="presentation">mail_outline</i></a></div></td>');
                $("." + x + "").append('<td id="' + data[x].id + "-cusphone" + '">' + data[x].phoneNumber + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-cuslogin" + '">' + data[x].lastlogindate + '</td>');
                $("." + x + "").append('</tr>');
            }
			
			
			
			
			            $('.edit').click(function (e) {
							
               var id = $(this).attr('href');

              
                setTimeout(function () {
					
					
                var currentTime = new Date();
                var dateeofthe = currentTime.getMinutes();
                if (dateeofthe < 10)
                {
                    dateeofthe = "0" + dateeofthe;
                }
                var tim = currentTime.getHours() + ":" + dateeofthe;
                var yearr = currentTime.getFullYear();
                var monthh = currentTime.getMonth() + 1;
                if (monthh < 10)
                {
                    monthh = "0" + monthh;
                }
                var dateof = currentTime.getDate();
                if (dateof < 10)
                {
                    dateof = "0" + dateof;
                }
                var timeYear = tim + " " + yearr + "-" + monthh + "-" + dateof;

				
           //     var mycode = $('#' + id + '-idNumber').text();
                  $('#recipient-name').val(data[id].email);
$('#recipient').val(window.localStorage.getItem("logginuserid"));
$('#time').val(timeYear);
$('#name').val(data[id].customerfname + ' ' + data[id].customerlname);



  $('#myModal').appendTo("body").modal();
                }, 250);
                e.preventDefault(); 
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
	

	     $('#elamai').click(function (e) {
		

  e.preventDefault();


          swal({title: "Wait", text: "processing to send e-mail", timer: 4000, showConfirmButton: false});
        var form = $('#email_form');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
			swal("Email successfully!", "click okay to continue", "success");
                $('#myModal').appendTo("body").modal('hide');
     $('#subloader03').empty();
      $('#subloader03').load('profileManage/customerPage').hide().fadeIn('slow');
            }
        });
        });
</script>