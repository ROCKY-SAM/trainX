<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-tabs__tab-bar">
        <a href="javascript:void(0)" id="detailedReport" class="btn btn-raised btn-default">Detailed Report</a>
        <a href="javascript:void(0)" id="graphicalReport" class="btn btn-raised btn-default">Graphical Report</a>
        <a href="javascript:void(0)" onclick="myFunction()" id="paypal" class="btn btn-raised btn-default">Paypal Account Login</a>
    </div>
</div>



<script type="text/javascript">
    $(document).ready(function () {


        $('#detailedReport').click(function (e2) {
            e2.preventDefault();
            $('#subloader2').empty();
            $('#subloader2').load('paymentHandel/detailspayment', function () {
            });
        });

        $('#graphicalReport').click(function (e2) {
            e2.preventDefault();
            $('#subloader2').empty();
            $('#subloader2').load('paymentHandel/graphicalReport', function () {
            });
        });
        
         $('#paypal').click(function (e2) {
            e2.preventDefault();
            $('#subloader2').empty();
            $('#subloader2').load('paymentHandel/paypal', function () {
            });
        });


     


    });

</script>
<script>
function myFunction() {
    window.open("https://www.sandbox.paypal.com/signin");
}
</script>