{{-- Add Student --}}
<div id="student-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add Student</h4> 
            </div>
            <form action="{{ route('elem.studentadd')}}" method="post">
                {{csrf_field()}}
            <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">ID No.</label>
                                <input type="text" name="" class="form-control" id="field-1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">School Year</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                      <option>2017-2018</option>
                                      <option>2016-2017</option>
                                      <option>2015-2016</option>
                                      <option>2014-2015</option>
                                      <option>2013-2014</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-1" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="field-1">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Middle Name</label>
                                <input type="text" class="form-control" id="field-2">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Last Name</label>
                                <input type="text" class="form-control" id="field-2">
                            </div>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Age</label>
                                <input type="number" class="form-control" id="field-1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Gender</label>
                                <input type="text" class="form-control" id="field-2">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Adviser</label>
                                <input type="text" class="form-control" id="field-1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Grade &amp; Section</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                      <option>12 - Falcata</option>
                                      <option>12 - Salome</option>
                                      <option>12 - Compassion</option>
                                      <option>12 - Compassion</option>
                                      <option>12 - Compassion</option>
                                      <option>12 - Compassion</option>
                                      <option>12 - Compassion</option>
                                      <option>12 - Falcata</option>
                                      <option>11 - Falcata</option>
                                      <option>11 - Falcata</option>
                                      <option>11 - Salome</option>
                                      <option>11 - Salome</option>
                                      <option>11 - Salome</option>
                                      <option>11 - Salome</option>
                                      <option>11 - Salome</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Address</label>
                                <input type="text" class="form-control" id="field-3">
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

{{-- Update Student --}}
<div id="student-update" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Update Student</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">ID No.</label> 
                            <input type="text" class="form-control" id="field-1"> 
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="field-2" class="control-label">School Year</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                  <option>2017-2018</option>
                                  <option>2016-2017</option>
                                  <option>2015-2016</option>
                                  <option>2014-2015</option>
                                  <option>2013-2014</option>
                            </select>
                        </div>
                    </div> 
                </div>
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">First Name</label> 
                            <input type="text" class="form-control" id="field-1"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Middle Name</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div>
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Last Name</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div> 
                </div>
                 <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">Age</label> 
                            <input type="number" class="form-control" id="field-1"> 
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Gender</label> 
                            <input type="text" class="form-control" id="field-2"> 
                        </div> 
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-1" class="control-label">Adviser</label> 
                            <input type="text" class="form-control" id="field-1"> 
                        </div> 
                    </div> 
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Grade &amp; Section</label> 
                            <select class="form-control" id="exampleFormControlSelect1">
                                  <option>12 - Falcata</option>
                                  <option>12 - Salome</option>
                                  <option>12 - Compassion</option>
                                  <option>12 - Compassion</option>
                                  <option>12 - Compassion</option>
                                  <option>12 - Compassion</option>
                                  <option>12 - Compassion</option>
                                  <option>12 - Falcata</option>
                                  <option>11 - Falcata</option>
                                  <option>11 - Falcata</option>
                                  <option>11 - Salome</option>
                                  <option>11 - Salome</option>
                                  <option>11 - Salome</option>
                                  <option>11 - Salome</option>
                                  <option>11 - Salome</option>
                            </select>
                        </div> 
                    </div>
                </div>  
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Address</label> 
                            <input type="text" class="form-control" id="field-3"> 
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


{{-- Add Grade/Section --}}
<div id="section-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Add Section</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Grade</label> 
                            <input type="text" class="form-control" id="field-3">
                        </div> 
                    </div>
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Section</label> 
                            <input type="text" class="form-control" id="field-3"> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="modal-footer"><br> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="md md-close"></i> Close</button> 
                <button type="button" class="btn btn-success waves-effect waves-light"><i class="md md-check"></i> Submit</button> 
            </div> 
        </div> 
    </div>
</div>

{{-- Update Grade/Section --}}
<div id="section-update" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Update Section</h4> 
            </div> 
            <div class="modal-body"> 
                <div class="row">
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-2" class="control-label">Grade</label> 
                            <input type="text" class="form-control" id="field-3"> 
                        </div> 
                    </div>
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <label for="field-3" class="control-label">Section</label> 
                            <input type="text" class="form-control" id="field-3"> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div class="modal-footer"><br> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"><i class="md md-close"></i> Close</button> 
                <button type="button" class="btn btn-purple waves-effect waves-light"><i class="md md-check"></i> Submit</button> 
            </div> 
        </div> 
    </div>
</div>

{{-- Delete Grade/Section --}}
<div id="section-delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title">Delete Section</h4> 
            </div> 
            <div class="modal-body"> 
                <p>Are you sure you want to delete this section ?</p>
            </div>
            <div class="modal-footer"><br> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal"> Cancel</button> 
                <button type="button" class="btn btn-danger waves-effect waves-light"><i class="ion-trash-b"></i> Delete</button> 
            </div> 
        </div> 
    </div>
</div>

