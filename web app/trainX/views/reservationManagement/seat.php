<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="location" class="btn btn-raised btn-success">Location</a>
        <a href="javascript:void(0)" id="cseat" class="btn btn-raised btn-default">Choose a seat</a>

    </div>
</div>


<script type="text/javascript">


    $('#location').click(function (e2) {
        e2.preventDefault();
        $('#subloader2').empty();
        $('#subloader2').load('reservationManagement/test1', function () {
        });
    });
</script>