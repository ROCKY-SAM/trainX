
<br></br>
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="priceAdd" class="btn btn-raised btn-default">View Train Prices </a>
        <a href="javascript:void(0)" id="priceUpdate" class="btn btn-raised btn-default">Update Train Prices</a>

    </div>
</div>


<script type="text/javascript">


   $('#priceAdd').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('reservationManagement/priceAddc', function () {
        });
    });
    
     $('#priceUpdate').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('reservationManagement/priceUpdatec', function () {
        });
    });
    
    
</script>



<div id="subloader22">
    
    
</div>

