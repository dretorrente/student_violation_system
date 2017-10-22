

@extends('elementary.admin.layouts.dashboard')
@section('title', 'Student Management | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
   <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Students</a></li>
                    </ol>
                </div>
            </div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Student Offense Records</h3>
            </div>
        @section('modal')
            @include('elementary.student.includes.modal')
        @show
        <div class="col-lg-6">
            <div style="padding: 10px 3px;" class="btn-group">
                <select class="form-control" id="exampleFormControlSelect1">
                      <option>Category</option>
                      <option>Falcata</option>
                      <option>Salome</option>
                      <option>Compassion</option>
                </select>
            </div>
            <div style="padding: 10px 5px;" class="btn-group">
                <select class="form-control" id="exampleFormControlSelect1">
                      <option>2017-2018</option>
                      <option>2016-2017</option>
                      <option>2015-2016</option>
                      <option>2014-2015</option>
                      <option>2013-2014</option>
                </select>
            </div>
              <button class="btn btn-info">Print</button>
        </div>
      

            <div class="panel-body">
                <div class="row">
                    <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student ID</th>
                                    <th>School-Year</th>
                                    <th>Grade Section</th>
                                    <th>Date Commit</th>
                                    <th>Time Commit</th>
                                    <th>Category</th>
                                    <th>Student Offense</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1000801721</td>
                                    <td>2017-2018</td>
                                    <td>Tiger Nixon</td>
                                    <td>61</td>
                                    <td>Male</td>
                                    <td>Rocky</td>
                                    <td>12 - System Architect</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>1000806991</td>
                                    <td>2017-2018</td>
                                    <td>Garrett Winters</td>
                                    <td>63</td>
                                    <td>Male</td>
                                    <td>Rocky</td>
                                    <td>11 - Accountant</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>1000801021</td>
                                    <td>2017-2018</td>
                                    <td>Ashton Cox</td>
                                    <td>66</td>
                                    <td>Male</td>
                                    <td>Rocky</td>
                                    <td>12 - Junior Technical Author</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>1000801081</td>
                                    <td>2017-2018</td>
                                    <td>Cedric Kelly</td>
                                    <td>22</td>
                                    <td>Male</td>
                                    <td>Rocky</td>
                                    <td>12 - Senior Javascript Developer</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>1000801555</td>
                                    <td>2017-2018</td>
                                    <td>Airi Satou</td>
                                    <td>33</td>
                                    <td>Female</td>
                                    <td>Rocky</td>
                                    <td>12 - Accountant</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>1000801091</td>
                                    <td>2017-2018</td>
                                    <td>Brielle William</td>
                                    <td>61</td>
                                    <td>Female</td>
                                    <td>Rocky</td>
                                    <td>11 - Integration Specialist</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>1000801121</td>
                                    <td>2017-2018</td>
                                    <td>Herrod Chandler</td>
                                    <td>59</td>
                                    <td>Female</td>
                                    <td>Rocky</td>
                                    <td>11 - Sales Assistant</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>1000801221</td>
                                    <td>2017-2018</td>
                                    <td>Rhona Davidson</td>
                                    <td>55</td>
                                    <td>Male</td>
                                    <td>Rocky</td>
                                    <td>11 - Integration Specialist</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>1000801841</td>
                                    <td>2017-2018</td>
                                    <td>Colleen Hurst</td>
                                    <td>39</td>
                                    <td>Female</td>
                                    <td>Rocky</td>
                                    <td>12 - Javascript Developer</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>1000801761</td>
                                    <td>2017-2018</td>
                                    <td>Sonya Frost</td>
                                    <td>23</td>
                                    <td>Female</td>
                                    <td>Rocky</td>
                                    <td>12 - Software Engineer</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>1000801021</td>
                                    <td>2017-2018</td>
                                    <td>Jena Gaines</td>
                                    <td>30</td>
                                    <td>Male</td>
                                    <td>Rocky</td>
                                    <td>12 - Office Manager</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
    @include('elementary.student.includes.footer')
@show
@endsection