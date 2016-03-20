<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="addstations" class="btn btn-raised btn-default">Add  Stations</a>


    </div>
</div>


<script type="text/javascript">
    
    $('#addstations').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/addstationsc', function () {
        });
    });
   
</script>

