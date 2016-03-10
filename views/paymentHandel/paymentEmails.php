<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="btn-group btn-group-justified btn-group-raised">
       
        <a href="javascript:void(0)" id="alertoffers" class="btn btn-info">Alert Offers</a>
        <a href="javascript:void(0)" id="customEmail" class="btn btn-danger">Custom Emails</a>

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