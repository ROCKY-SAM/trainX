<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
       
        <a href="javascript:void(0)" id="alertoffers" class="btn btn-raised btn-default">Alert Offers</a>
        <a href="javascript:void(0)" id="customEmail" class="btn btn-raised btn-default">Custom Emails</a>

    </div>
</div>



<script type="text/javascript">


    $('#alertoffers').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('paymentHandel/alertoffers', function () {
            
        });
    });
    
    $('#customEmail').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('paymentHandel/customEmail', function () {
        });
    });
</script>

<div  id="subloader22">



</div>