<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="priceAdd" class="btn btn-raised btn-default">Add Train Prices </a>
        <a href="javascript:void(0)" id="priceUpdate" class="btn btn-raised btn-default">Update Train Prices</a>
         <a href="javascript:void(0)" id="priceView" class="btn btn-raised btn-default">View Station Prices</a>

    </div>
</div>


<script type="text/javascript">


   $('#priceAdd').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/priceAddc', function () {
        });
    });
    
     $('#priceUpdate').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/priceUpdatec', function () {
        });
    });
    
     $('#priceView').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/viewstationprices', function () {
        });
    });
    
    
</script>