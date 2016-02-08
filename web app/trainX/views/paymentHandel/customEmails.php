<!--
      <div class="col-md-10 col-md-offset-2">
      
        <button type="submit" class="btn btn-raised btn-primary"id="sendingemails" method="POST">Send Email</button>
         
     
    </div>-->

<div class="form-group">
    <label for="inputEmail" class="col-md-2 control-label">Successfully Button</label>
    <button type="submit" class="btn btn-raised btn-primary" method="POST" id="sendingemails">Send Email</button
</div>


<script type="text/javascript">


    $('#sendingemails').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('paymentHandel/customEmails', function () {
        });
    });
    
    
    
   </script>