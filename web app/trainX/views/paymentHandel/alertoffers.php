<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
       
        <a href="javascript:void(0)" id="alertoffers" class="btn btn-raised btn-default">Alert Offers</a>
        <a href="javascript:void(0)" id="customEmail" class="btn btn-raised btn-default">Custom Emails</a>

    </div>
</div>

<br><br>     </br> </br>
<table class="table table-striped table-hover ">
    <col style="width:15%">		
    <col style="width:20%">
    <col style="width:20%">
    <col style="width:30%">
    <col style="width:50%">



    <thead>
        <tr>			

            <th>Payment ID</th>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Customer Email</th>
            <th>Send Email</th>


        </tr>
    </thead>
    <tbody id="dbody"></tbody>
</table>



<div class="modal fade" id="myModal06" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Custom Alerts</legend></h4>

            </div>

            <br> 
            <form class="form-horizontal" id="emailcustomers" action="paymentHandel/emailpayments" method="get" >
                <div class="modal-body">

                    <fieldset>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Customer Email</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="customerEmail" id="customerEmail"  readonly/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Subject</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="subject" id="subject" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="managercode" class="col-lg-4 control-label">Message</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="messagebody" id="messagebody" />
                            </div>
                        </div>
                        <br>



                        <div  id="kk">

                        </div>   </fieldset>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="email_sup" class="btn btn-primary">Send Email</button>

                </div>
            </form>
        </div>
    </div>
</div>




<script type="text/javascript">


    $(document).ready(function () {
        $.getJSON('paymentHandel/view_payments', function (data) {

            var len = data.length;

            for (x = 0; x < len; x++) {
                $("tbody").append('<tr class="' + x + '" id="' + data[x].trainID + '">');
                //$("." + x + "").append('<td id="' + data[x].id + "-image" + '">' +'<img src="/trainX/views/profileManage/propic/'+data[x].image+'"  class="img-responsive img-rounded">'  + '</td>');				
                $("." + x + "").append('<td id="' + data[x].trainID + "-paymentID" + '">' + data[x].paymentID + '</td>');
                $("." + x + "").append('<td id="' + data[x].trainID + "-cusName" + '">' + data[x].cusName + '</td>');
                //$("." + x + "").append('<td id="' + data[x].id + "-startLocation" + '">' + data[x].reservedTrain + '</td>');
                //  $("." + x + "").append('<td id="' + data[x].id + "-endLocation" + '">' + data[x].Depature + '</td>');
                $("." + x + "").append('<td id="' + data[x].trainID + "-TelephoneNumber" + '">' + data[x].TelephoneNumber + '</td>');
                $("." + x + "").append('<td id="' + data[x].trainID + "-customerEmail" + '">' + data[x].customerEmail + '</td>');


                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].trainID + '" class="sendemail"><i class="mdi-content-mail"></i></a></div></td>');
                //$("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="remove"><i class="material-icons">delete</i></a></div></td>');

                $("." + x + "").append('<td id="' + "-employee" + '">' + '</td>');
                $("." + x + "").append('<td class="hide" id="' + data[x].trainID + "-trainID" + '">' + x + '</td>');

                $("." + x + "").append('</tr>');
            }




            $('.sendemail').click(function (e) {

                var id = $(this).attr('href');


                setTimeout(function () {

                    var mycode = $('#' + id + '-trainID').text();
//assing values
                    $('#customerEmail').val(data[mycode].customerEmail);

                    $('#myModal06').appendTo("body").modal('show');

                }, 250);
                e.preventDefault();
            });

            $('#email_sup').click(function (e) {


                e.preventDefault();


                swal({title: "Wait", text: "processing to send e-mail", timer: 4000, showConfirmButton: false});
                var form = $('#email_form');
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function (data) {
                        swal("Email successfully!", "click okay to continue", "success");
                        $('#myModal06').appendTo("body").modal('hide');
                        $('#subloader2').empty();
                        $('#subloader2').load('paymentHandel/emailpayments').hide().fadeIn('slow');
                    }
                });
            });


        });
    });


</script>
