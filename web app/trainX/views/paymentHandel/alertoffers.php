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
</form>

<script type="text/javascript">
 
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
    
    
    
    
    
    
        $('#sendingemails').submit(function (e) {


	        e.preventDefault();
         swal({   title: "Wait",   text: "processing to send e-mail",   timer: 4000,   showConfirmButton: false });
        var form = $('#sendingemails');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
				 swal("Email successfully!", "click okay to continue", "success");
                console.log(data);
              //  $('#subloader03').empty();
              //  $('#subloader03').load('profileManage/adminUsersAdd').hide().fadeIn('slow');
            }
        });
	
	
    });
    </script>






