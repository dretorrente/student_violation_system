{{-- Add Violation --}}
<div id="violation-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add Violation</h4> 
            </div> 
            <form action="{{ route('elem.addviolation')}}" method="POST">
                {{csrf_field()}}
                <div class="modal-body"> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-1" class="control-label">Category</label> 
                                <select class="form-control" id="exampleFormControlSelect1" name="category">
                                    <option value="1">Minor Offense</option>
                                    <option value="2">Major Offense</option>
                                </select>
                            </div> 
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Violation</label>
                                <textarea name="violation" class="form-control autogrow" id="field-7" placeholder="Write something about violation" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px"></textarea>                                                    
                            </div>
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-1" class="control-label">1st Sanction</label> 
                                <input type="text" name="1st_sanction" class="form-control" i1"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-2" class="control-label">2nd Sanction</label> 
                                <input type="text" name="2nd_sanction" class="form-control"> 
                            </div> 
                        </div>
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-2" class="control-label">3rd Sanction</label> 
                                <input type="text" name="3rd_sanction" class="form-control"> 
                            </div> 
                        </div>
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-2" class="control-label">4th Sanction</label> 
                                <input type="text" name="4th_sacntion" class="form-control"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-2" class="control-label">5th Sanction</label> 
                                <input type="text" name="5th_sanction" class="form-control"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-2" class="control-label">6th Sanction</label> 
                                <input type="text" name="6th_sanction" class="form-control"> 
                            </div> 
                        </div> 
                        <div class="col-md-12"> 
                            <div class="form-group"> 
                                <label for="field-2" class="control-label">7th Sanction</label> 
                                <input type="text" name="7th_sanction" class="form-control"> 
                            </div> 
                        </div>  
                    </div>
                </div>
                <div class="modal-footer"><br> 
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="md md-close"></i> Close</button> 
                    <button type="submit" class="btn btn-success waves-effect waves-light"><i class="md md-check"></i> Submit</button> 
                </div> 
            </form>
        </div> 
    </div>
</div>

{{-- Update Violation --}}
<div id="violation-update" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Update Violation</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">Category</label> 
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Minor Offense</option>
                                <option>Major Offense</option>
                            </select>
                        </div> 
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="field-2" class="control-label">Violation</label>
                            <textarea class="form-control autogrow" placeholder="Write something about violation" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px"></textarea>                                                    
                        </div>
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">1st Sanction</label> 
                            <input type="text" class="form-control" id="field-1"> 
                        </div> 
                    </div> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">2nd Sanction</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div>
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">3rd Sanction</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div>
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">4th Sanction</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">5th Sanction</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">6th Sanction</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">7th Sanction</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div>  
                </div>
            </div>
            <div class="modal-footer"><br> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="md md-close"></i> Close</button> 
                <button type="button" class="btn btn-purple waves-effect waves-light"><i class="md md-check"></i> Save Changes</button> 
            </div> 
        </div> 
    </div>
</div>

{{-- Delete Violation --}}
<div id="violation-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Delete Violation</h4> 
            </div> 
            <div class="modal-body"> 
                <p>Are you sure you want to delete this violation ?</p>
            </div>
            <div class="modal-footer"><br> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"> Cancel</button> 
                <button id="sa-warning" type="button" class="btn btn-danger waves-effect waves-light"><i class="ion-trash-b"></i> Delete</button> 
            </div> 
        </div> 
    </div>
</div>