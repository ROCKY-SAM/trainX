<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="btn-group btn-group-justified btn-group-raised">
        <a href="javascript:void(0)" id="payment_email" class="btn btn-raised btn-default" style="background-color: #CE93D8
">Send Emails</a> 
        <a href="javascript:void(0)" id="payement_sms" class="btn btn-raised btn-primary" style="background-color: #008066">Send SMS</a>

    </div>
</div>



<script type="text/javascript">


    $('#payment_email').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('paymentHandel/paymentEmails', function () {
        });
    });
</script>

<div  id="subloader22">



</div>