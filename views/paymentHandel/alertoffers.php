<html>    
<br><br><br>
<fieldset>
     
        <div class="form-group">
            <div class="col-lg-5">
                <input type="text" class="form-control" id="searchInput" placeholder="Search">
            </div>
        </div>
    </fieldset>
<br><br>
    <table class="table table-striped table-hover ">
        <col style="width:10%">		
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:15%">
        <col style="width:20%">
        <col style="width:15% ">
       
        <thead>
            <tr>			

                <th>Payment ID</th>
                <th>Customer Name</th>
                <th>Reserved Train</th>
                <th>Depature Time</th>
                <th>Phone Number</th>
                <th>Customer Email</th>
                <th>Send Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Transactions as $transaction) : ?>						
                <tr>
                    <td><?php echo ($transaction->paymentID); ?></td>
                    <td><?php echo ($transaction->cusName); ?></td>
                    <td><?php echo ($transaction->reservedTrain); ?></td>
                    <td><?php echo ($transaction->customerEmail); ?></td>
                    <td>
                        <a id="alert_Cartrans" onclick="SendNormalAlert('<?php echo ($transaction->id); ?>', '<?php echo ($transaction->cname); ?>', '<?php echo ($transaction->email); ?>', '<?php echo ($transaction->contact); ?>')"> <i class="mdi-communication-textsms"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</html>

<!--
    <form class="form-horizontal" method="POST" id="sendingemails" action="paymentHandel/sendEmails">
        <fieldset>

            <div class="form-group">
                <label for="inputEmail" class="col-md-2 control-label">Email</label>

                <div class="col-md-10">
                    <input type="email" class="form-control" name="inputEmaill" id="inputEmaill" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputSubject" class="col-md-2 control-label">Subject</label>

                <div class="col-md-10">
                    <input type="text" class="form-control" name="inputSubjectl" id="inputSubjectl" placeholder="Subject">
                </div>
            </div>


            <div class="form-group">
                <label for="textArea" class="col-md-2 control-label">Content</label>

                <div class="col-md-10">
                    <textarea class="form-control" rows="3" id="bodyl" name="bodyl"></textarea>

                </div>
            </div>


            <div class="form-group">
                <div class="col-md-10 col-md-offset-2">

                    <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                    <button type="button" class="btn btn-raised btn-warning">Cancel</button>
                </div>
            </div>
        </fieldset>
    </form>-->

<!--   

        //validating input email
        //if(isset($_POST['inputEmail'], $_POST['inputSubject'],$_POST['content'])){
        //   
        //    if(empty($_POST['inputEmail'])){
        //            $errors[]="Please Enter a valid email address";
        //    }
        //    else if(strlen($_POST['inputEmail'])>347){
        //        $errors[]="Your email is tooo long";
        //    }
        //    else if(filter_var($_POST['inputEmail'],FILTER_VALIDATE_EMAIL)===FALSE){
        //        $error[]="Please provide a valid email address";
        //    }
        //    else{
        //        $email="<".htmlentities($_POST['inputEmail']).">";
        //    }
        // //validating subject
        //    if(empty($_POST['inputSubject'])){
        //            $errors[]="Please Enter Subject";
        //    }
        //    
        //    //validating body email
        //    if(empty($_POST['body'])){
        //        $errors[]="Please Enter a message";
        //    }
        //    else{
        //        $body=  htmlentities($_POST['body']);
        //    }
        //    
        //   $retval = mail ($to,$subject,$message,$header);   
        //    
        //}






        //    $('#sendingemails').submit(function (e) {
        //
        //
        //	e.preventDefault();
        //         swal({   title: "Wait",   text: "processing to send e-mail",   timer: 4000,   showConfirmButton: false });
        //        var form = $('#sendingemails');
        //        $.ajax({
        //            type: form.attr('method'),
        //            url: form.attr('action'),
        //            data: form.serialize(),
        //            success: function (data) {
        //			//	 swal("Email successfully!", "click okay to continue", "success");
        //                console.log(data);
        //             //   $('#subloader03').empty();
        //              //  $('#subloader03').load('paymentHandle/sendEmails').hide().fadeIn('slow');
        //            }
        //        });
        //	
        //	
        //    });






//        $('#sendingemails').submit(function (e) {
//
//
//            e.preventDefault();
//            swal({title: "Wait", text: "processing to send e-mail", timer: 4000, showConfirmButton: false});
//            var form = $('#sendingemails');
//            $.ajax({
//                type: form.attr('method'),
//                url: form.attr('action'),
//                data: form.serialize(),
//                success: function (data) {
//                    swal("Email successfully!", "click okay to continue", "success");
//                    console.log(data);
//                    //  $('#subloader03').empty();
//                    //  $('#subloader03').load('profileManage/adminUsersAdd').hide().fadeIn('slow');
//                }
//            });
//
//
//        });-->
        <script type="text/javascript"> 
            
             function SendNormalAlert(paymentID, cusName, reservedTrain, customerEmail) {
        swal({
            title: "Are you sure?",
            text: "You are about to send a confirmation Email to client for collect the vehicle!!",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes, Send Alert!",
            cancelButtonText: "No, Cancel!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                swal("Message Sent!", "Your Confirmation Alert has been sent.", "success");

                $.post('carwash/UpdateNonRegStatus', {id: paymentID, user: cusName, contact: reservedTrain, email: customerEmail}, function (data) {
                    console.log(data);

                });
                window.setTimeout(function () {
                    $('#subloader2').empty();
                    $('#subloader2').load('/IOC/carwash/NormalAlert', function () {
                        $('#subloader2').hide();
                        $('#subloader2').fadeIn('fast');
                        window.setTimeout(function () {
                            showAlert();
                        }, 3000);
                    });
                }, 3000);
            } else {
                swal("Cancelled", "Your Email was not sent :)", "error");
            }
        });
    }
         $(document).ready(function () {
        
         $.getJSON('paymentHandel/view_Report_detailed', function (data) {
             
            var len = data.length;

            for (x = 0; x < len; x++) {


                $("tbody").append('<tr class="' + x + '" id="' + data[x].id + '">');
                $("." + x + "").append('<td id="' + data[x].id + "-idNumber" + '">' + data[x].paymentID + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-role" + '">' + data[x].cusName + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-fnamelname" + '">' + data[x].reservedTrain + '</td>');
                 $("." + x + "").append('<td id="' + data[x].id + "-fnamelname" + '">' + data[x].Depature + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-email" + '">' + data[x].TelephoneNumber + '</td>');
                $("." + x + "").append('<td id="' + data[x].id + "-email" + '">' + data[x].customerEmail + '</td>');
                $("." + x + "").append('<td><div class="icon-preview"><a href="' + data[x].tid + '" class="sendmail"> <i class="material-icons">mail_outline</i></a></div></td>');
                $("." + x + "").append('</tr>');
            }
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
    
    
    $('.sendmail').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('paymentHandel/customEmails', function () {
        });
    });
    
    </script>






