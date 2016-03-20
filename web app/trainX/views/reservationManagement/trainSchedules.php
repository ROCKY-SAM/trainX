<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="addTrains" class="btn btn-raised btn-default">Add Train Schedules</a>
        <a href="javascript:void(0)" id="updateTrains" class="btn btn-raised btn-default">Update Train Schedules</a>
        <a href="javascript:void(0)" id="viewTrainSchedules" class="btn btn-raised btn-default">View Train Schedules</a>

    </div>
</div>


<script type="text/javascript">


   $('#addTrains').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/addTrainsc', function () {
        });
    });
    
     $('#updateTrains').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/updateTrainsc', function () {
        });
    });
    
    $('#viewTrainSchedules').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/viewTrainSchedulesc', function () {
        });
    });

</script>
 