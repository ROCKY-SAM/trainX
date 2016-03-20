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


                    $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].trainID + ' "method="POST" id="sendingemails" class="sendemail"><i class="mdi-content-mail"></i></a></div></td>');
                    //$("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="remove"><i class="material-icons">delete</i></a></div></td>');

                    $("." + x + "").append('<td id="' + "-employee" + '">' + '</td>');
                    $("." + x + "").append('<td class="hide" id="' + data[x].trainID + "-trainID" + '">' + x + '</td>');

                    $("." + x + "").append('</tr>');
                }

                $('#sendingemails').click(function (e2) {
                    
                    e2.preventDefault();
                    $('#subloader2').empty();
                    $('#subloader2').load('paymentHandel/customEmails', function () {
                    });
                });





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
                            $('#subloader2').load('paymentHandel/alertoffers').hide().fadeIn('slow');
                        }
                    });
                });


            });
        });


    </script>
