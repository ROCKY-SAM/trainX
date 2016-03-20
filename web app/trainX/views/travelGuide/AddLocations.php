<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><legend>Edit Location</legend></h4>

            </div>
   <form class="form-horizontal" id="updateLocation_form" action="travelGuide/update_Location" method="post" ">
            <div class="modal-body">
             
                    <fieldset>






                        <div class="form-group">
                            <label for="managercode" class="col-lg-2 control-label">id</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="id" id="id"  readonly/>
                            </div>
                        </div>

                        
                        <div class="form-group">

                            <div class="col-lg-2 control-label">
                                <label for="fnameManager">Location</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="Locations" placeholder="" id="Locations"
                                       title="Use only letters for Location"/>
                            </div>

                            <div class="col-lg-2 control-label">
                                <label for="lnameManager">Nearest Railway Station</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="nearestRS" placeholder="" id="nearestRS"
                                       title="Use only letters " />
                            </div>

                        </div>



                 

                        <div class="form-group">
                            <div class="col-lg-2 control-label">
                                <label for="mpnumber">Description</label>
                            </div>

                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="Description" placeholder="" id="Description"
                                       title="Use only letters " />
                            </div>

                        </div>
						
                    </fieldset>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>

            </div>
        </form>

        </div>
    </div>
</div>