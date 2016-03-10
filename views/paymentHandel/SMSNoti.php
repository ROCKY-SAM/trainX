<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
       
        <a href="javascript:void(0)" id="alertSMS" class="btn btn-raised btn-default">Alert Customers</a>
        <a href="javascript:void(0)" id="customSMS" class="btn btn-raised btn-default">Custom Messages</a>

    </div>
</div>


<script type="text/javascript">


    $('#alertSMS').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('paymentHandel/alertoffers', function () {
        });
    });
    
    $('#customSMS').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('paymentHandel/customEmail', function () {
        });
    });
</script>

<div  id="subloader22">



</div>