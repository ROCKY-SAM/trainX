			</br></br>
			


    <!--start of filling application -->
    <div class="col-lg-14">
        <form class="form-horizontal" method="POST" action="travelGuide/insertLocation" enctype="multipart/form-data" id="insertLocation" onsubmit="return submitForm();">
            <fieldset>
                <legend>New Location Details</legend> <!--font style-->

                <div class="form-group">
                    <label for="managercode" class="col-lg-2 control-label">Location</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="managercode" id="autocode" placeholder="Location" required>
                    </div>
                </div>

                
                <div class="form-group">

                    <div class="col-lg-2 control-label">
                        <label for="fnameManager">Nearest Railway Station</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="fnameManager" placeholder="" 
                               pattern="[a-zA-Z]{1,20}" title="Use only letters" required/>
                    </div>
              
			  </div>

                <div class="form-group">
				
                    <div class="col-lg-2 control-label">
                        <label for="lnameManager">Description</label>
                    </div>

                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="lnameManager" placeholder="" 
                               pattern="[a-zA-Z]{1,20}" title="Use only letters" required />
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



<script  type="text/javascript">
 $(document).ready(function () {
document.getElementById("uploadphotos").value = "default_profile_photo.png";
   });

                $("#wrapper").on("change", "#file", function () {

                    var username = $("#file").val();

                    var fields = username.split("fakepath\\");
                    var name = fields[1];
                    document.getElementById("uploadphotos").value = name;
                });



	var userIdCreator;
    $("#idDetails").change(function () {
		
		

		
/*		
        var idDetails1 = document.getElementById("idDetails").value;
        if (idDetails1 === "admin")
        {
            userIdCreator = "Ad";

        } 
		else if (idDetails1 === "profileManage")
        {
            userIdCreator = "Pm";

        }
		else if (idDetails1 === "locationfind")
        {
            userIdCreator = "Lf";

        }
		else if (idDetails1 === "travelGuide")
        {
            userIdCreator = "Tg";

        }		
		else if (idDetails1 === "reservation")
        {
            userIdCreator = "Rn";

        }
		else if (idDetails1 === "payment")
        {
            userIdCreator = "Pt";

        }		
        var d = new Date();
        var x = d.getYear() + d.getMonth();
        var y = d.getDate() - d.getHours() - d.getMinutes() - d.getSeconds() + d.getMilliseconds();

        var userId = userIdCreator + "-" + (x + y);
        document.getElementById('useriddone').value = userId;
	  
	  
	  
	  		  var passwd = '';
  var chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  for (i=1;i<8;i++) {
    var c = Math.floor(Math.random()*chars.length + 1);
    passwd += chars.charAt(c)
  }

	document.getElementById('userpassworddone').value = passwd;  
	  
	  
	  
    });
	
	
	
	*/
    $('#insertLocation').submit(function (e) {


	       e.preventDefault();
        // swal({   title: "Wait",   text: "processing to send e-mail",   timer: 4000,   showConfirmButton: false });
        var form = $('#insertLocation');
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            success: function (data) {
				 swal("Data insereted successfully!", "click okay to continue", "success");
                console.log(data);
                $('#subloader03').empty();
                $('#subloader03').load('travelGuide/adminLocationsAdd').hide().fadeIn('slow');
            }
        });
	
	
    });
</script>
        <script type="text/javascript">
            function submitForm() {

                console.log("submit event");
                var fd = new FormData(document.getElementById("insertLocation"));

                fd.append("label", "");
                $.ajax({
                    url: "/trainX/views/profileManage/upload.php",
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
        </script>
