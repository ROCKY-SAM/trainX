<!--start of filling application -->
<div class="col-lg-14">
    <form class="form-horizontal" method="POST" action="travelGuide/insertLocation" enctype="multipart/form-data" id="insertLocation" onsubmit="return submitForm();">
        <fieldset>
            <legend>New Location Details</legend> <!--font style-->
            
            <div class = "form-group">
                <label for="addlocation" class="col-lg-2 control-label">Add Location</label>
                <div class="col-lg-5">
                    <button type="add" class="btn btn-primary" id="addlocation" >Add Location</button>
                </div></div>


            <div class="form-group">
                <label for="Location" class="col-lg-2 control-label">Location In List</label>
                <div class="col-lg-5">




                    <!-- drop down-->
                    <div class="form-group">
                      
                        <div class="col-lg-5" id="location">
                            <select requierd class="form-control" id="Locationz" value="Locationz" name="Locationz">

                            </select>
                        </div>
                    </div>
                    <!-- drop down end-->
                </div>
            </div>


            <div class="form-group">

                <div class="col-lg-2 control-label">
                    <label for="railstation">Nearest Railway Station</label>
                </div>

                <div class="col-lg-5">
                    <input type="text" class="form-control" id="railstation" name="railstation" placeholder=""/>
                </div>

            </div>

            <div class="form-group">

                <div class="col-lg-2 control-label">
                    <label for="descrip">Description</label>
                </div>

                <div class="col-lg-5">
                    <textarea  class="form-control" rows="8" name="descrip" placeholder="" id="descrip" title="Use only letters " ></textarea>

                </div>

            </div>



            <!-- image upload -->


            <div class="form-group">
                <label for="file" class="col-lg-2 control-label">Image Of Location</label>
                <div class="col-lg-5" id="wrapper">
                    <input type="text" readonly="" class="form-control floating-label" placeholder="Browse...">
                    <input type="file" name="file" id="file">
                    <input type="hidden" id="uploadphotos" name="uploadphotos">
                </div>
            </div>



            <!-- end -->
            <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">

                    <input type="reset" class="btn btn-default">
                    <input type="submit" class="btn btn-primary"  >
                </div>
            </div>

        </fieldset>
    </form>
</div>
<!-- end of filling application-->

<!-- ADD Location  model -->


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>

                <h4 class="modal-title" id="myModalLabel"><legend>Edit Station</legend></h4>

                <!--*******************************************************************************************************************************-->
                <form class="form-horizontal" method="POST" action="travelGuide/addLocation" enctype="multipart/form-data" id="addLocation" onsubmit="return initialize();">
                    <!--<form class="form-horizontal">-->
                    <fieldset>
                        <div class="form-group">
                            <label for="inpusearch" class="col-md-3 control-label">Search Location</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="location" id="search_location" placeholder="Search">
                            </div>
                            <a href="javascript:void(0)" id="seacrh" class="btn btn-raised btn-success" onclick="initialize()">Success</a>
                        </div>
                        <!---->
                        <div class="form-group">
                            <label for="latitude" class="col-md-2 control-label">Latitude</label>

                            <div class="col-md-4">
                                <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Latitude">
                            </div>
                            <label for="longitude" class="col-md-2 control-label">Longitude</label>
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Add Location to List</button>
                        </div>
                        <!---->

                    </fieldset>
                </form>
                

                <!-- InstanceBeginEditable name="main-content" -->
                <div class="row content">

                    <!--Map-->
                    <p id="results" style="font-size:1.1em; font-family:Verdana, Geneva, sans-serif; margin-left:6%; margin-top:5%; color:#006;"></p>
                    <div id="map"></div>

                </div>
              
            </div>
        </div>





    </div>
</div>

<script  type="text/javascript">
    $(document).ready(function () {
        document.getElementById("uploadphotos").value = "default_location_photo.png";
    });

    $("#wrapper").on("change", "#file", function () {

        var username = $("#file").val();

        var fields = username.split("fakepath\\");
        var name = fields[1];
        document.getElementById("uploadphotos").value = name;
    });

//Display Location List


    $.getJSON('travelGuide/Location', function (data) {
        var len = data.length;

        for (x = 0; x < len; x++) {
            $("#Locationz").append('<option  value="' + data[x].location + '" >' + data[x].location + '</option>');

        }
      //  alert(data[x].id);
    });


//
    $('#addLocation').submit(function (e) {


        e.preventDefault();

        var form = $('#addLocation');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {


                swal("Location inserted successfully!", "click okay to continue", "success");
                console.log(data);
                $('#subloader2').empty();
                $('#subloader2').load('travelGuide/adminLocationsAdd').hide().fadeIn('slow');
            }

        });


    });

    function submitLocation() {

        console.log("submit event");
        var fd = new FormData(document.getElementById("addLocation"));

        fd.append("label", "");
        $.ajax({
            //url: "/trainX/views/travelGuide/upload.php",
            type: "POST",
            data: fd,
            enctype: 'multipart/form-data',
            processData: false, // tell jQuery not to process the data
            contentType: false   // tell jQuery not to set contentType
        }).done(function (data) {
            console.log("PHP Output:");
            console.log(data);
        });
        return false;
    }

    $('#insertLocation').submit(function (e) {


        e.preventDefault();

        var form = $('#insertLocation');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
                var selected = $('#Locationz').val();
                //	alert("okay"+selected);
                $('#subloader2').empty();
                $('#subloader2').load('travelGuide/adminLocationsAdd').hide().fadeIn('slow');
            }

        });


    });


    function submitForm() {

        console.log("submit event");
        var fd = new FormData(document.getElementById("insertLocation"));

        fd.append("label", "");
        $.ajax({
            url: "/trainX/views/travelGuide/upload.php",
            type: "POST",
            data: fd,
            enctype: 'multipart/form-data',
            processData: false, // tell jQuery not to process the data
            contentType: false   // tell jQuery not to set contentType
        }).done(function (data) {
            console.log("PHP Output:");
            console.log(data);
        });
        return false;
    }


    //========================================================================
    $('#addlocation').click(function (e) {
        //	alert("okay");

        $('#myModal').appendTo("body").modal('show');
        setTimeout(function () {
            //==========================


            $('#seacrh').click(function (e) {
                var address1 = document.getElementById("search_location").value;
                //alert(address1);	
                var geocoder = new google.maps.Geocoder();
                //================================================
                var location1;

                if (geocoder)
                {
                    geocoder.geocode({'address': address1}, function (results, status)
                    {
                        if (status == google.maps.GeocoderStatus.OK)
                        {
                            //location of first address (latitude + longitude)
                            location1 = results[0].geometry.location;
                            //alert(location1.lat());
                            //======================
                            $('#latitude').val(location1.lat());
                            $('#longitude').val(location1.lng());
                            var map;
                            map = new GMaps({
                                el: '#map',
                                lat: location1.lat(),
                                lng: location1.lng()
                            });
                            map.addMarker({
                                lat: location1.lat(),
                                lng: location1.lng(),
                                title: 'Marker with InfoWindow',
                                infoWindow: {
                                    content: '<p>' + address1 + '</p>'
                                }
                            });
                            //====================
                        } else
                        {
                            $("#error").text("Unable to retrieve your route map! ERROR : " + status);
                            //alert("Geocode was not successful for the following reason: " + status);
                        }
                    });
                }

                //===============================================


            });


        }, 250);
        e.preventDefault();
    });
    //================================================================


</script>
<!--***********************************************************************-->
