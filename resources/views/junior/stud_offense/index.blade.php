

@extends('junior.admin.layouts.dashboard')
@section('title', 'Student Offense | Prefect of Discipline Students Violation Monitoring System')
@section('content')

<div class="content">
   <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Dashboard</a></li>
                        <li>Student Offense</li>
                    </ol>
                </div>
            </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Information</h3>
        </div>
        <div class="panel-body">
        @section('modal')
        @include('junior.stud_offense.includes.modal')
        @show
            <div class="col-md-6"> 
                <div class="form-group"> 
                    <button data-toggle="modal" data-target="#select-student" class="btn btn-info">Select Student Profile</button>
                    <br>
                    <label for="field-1" class="control-label">Search Student ID</label> 
                     <input type="text" class="form-control" id="field-1" readonly required="">
                     <label for="field-1" class="control-label">First Name</label> 
                     <input type="text" class="form-control" id="field-1" readonly required=""> 
                     <label for="field-1" class="control-label">Last Name</label> 
                     <input type="text" class="form-control" id="field-1" readonly required=""> 
                     <label for="field-1" class="control-label">Middle Name</label> 
                      <input type="text" class="form-control" id="field-1" readonly required=""> 
                </div> 
            </div>
             <div class="col-md-6"> 
                <div class="form-group"> 
                     <label for="field-1" class="control-label">Gender</label> 
                     <input type="text" class="form-control" id="field-1" readonly required=""> 
                     <label for="field-1" class="control-label">Adviser</label> 
                     <input type="text" class="form-control" id="field-1" readonly required=""> 
                     <label for="field-1" class="control-label">Grade Section</label> 
                      <input type="text" class="form-control" id="field-1" readonly required=""> 
                </div> 
            </div>
        </div>
    </div>

     <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Offense</h3>
        </div>

        <div class="panel-body">
                <div class="row">
                    <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <label>Search <input type="text" class="form-control" ></label> <button class="btn btn-primary">Search</button>
                        <table id="datatable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Select</th>
                                    <th>Category</th>
                                    <th>Violation</th>
                                    <th>1st Sanction</th>
                                    <th>2nd Sanction</th>
                                    <th>3rd Sanction</th>
                                    <th>4th Sanction</th>
                                    <th>5th Sanction</th>
                                    <th>6th Sanction</th>
                                    <th>7th Sanction</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Wearing earings inside of the school</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                   
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Not wearing proper slocks</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Wearing earings inside of the school</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                   
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Not wearing proper slocks</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Wearing earings inside of the school</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                  
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Not wearing proper slocks</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                   
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td>Advising to transfer to other school</td>
                                   
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td>Advising to transfer to other school</td>
                                  
                                </tr>
                                <tr>
                                      <td><input type="checkbox" name=""></td>
                                    <td>Minor Offense</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td>Advising to transfer to other school</td>
                                   
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
           
             
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 style="visibility: hidden;" class="panel-title">Student Information</h3>
        </div>
        <div class="panel-body">
            <div class="col-md-4"> 
                <div class="form-group"> 
                     <label for="field-1" class="control-label">Date Commit</label> 
                     <input type="date" class="form-control" id="field-1"> 
                     <label for="field-1" class="control-label">Category</label> 
                     <input type="text" class="form-control" id="field-1"> 
                     <label for="field-1" class="control-label">Student Offense</label> 
                     <input type="text" class="form-control" id="field-1">
                     <label for="field-1" class="control-label">Description</label> 
                     <textarea class="form-control" rows="3" cols="44"></textarea> 
                </div> 
            </div>
             <div class="col-md-4"> 
                <div class="form-group"> 
                     <label for="field-1" class="control-label">Persons Involved</label> 
                     <input type="text" class="form-control" id="field-1"> 
                     <label for="field-1" class="control-label">Offense Number of Attempt</label> 
                     <input type="text" class="form-control" id="field-1"> 
                     <label for="field-1" class="control-label">Sanction</label> 
                     <textarea class="form-control" rows="3" cols="44"></textarea><br>
                     <button type="submit" style="margin-left: 255px;" class="btn btn-info"><i class="md md-check"></i> Save</button>
                </div> 
            </div>
        </div>
    </div>






        <div style="visibility: hidden;" class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Responsive Table</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Age</th>
                                            <th>City</th>
                                        </tr>
                                    </thead>
                                 
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('footer')
    @include('junior.student.includes.footer')
@show
@endsection


