<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="greport" class="btn btn-raised btn-default">Generate Report</a>
        <a href="javascript:void(0)" id="rdetails" class="btn btn-raised btn-default">Reservation Details</a>

    </div>
</div>


<script type="text/javascript">


    $('#greport').click(function (e2) {
        e2.preventDefault();
        $('#subloader22').empty();
        $('#subloader22').load('reservationManagement/index', function () {
        });
    });
</script>
