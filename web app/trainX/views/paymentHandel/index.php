<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="payment_email" class="btn btn-raised btn-default">Send Emails</a> 
        <a href="javascript:void(0)" id="payement_sms" class="btn btn-raised btn-default">Send SMS</a>

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