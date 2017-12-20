
@extends('senior.admin.layouts.dashboard')
@section('title', 'Monthly Reports | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
   <div class="container">
            <div class="row">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Monthly Reports</h3>
            </div>
        <div class="col-lg-6 pull-right">
            <div style="padding: 10px 5px;" class="pull-right btn-group dropdown-btn-group" >
               <!--  <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#student-add"><i class="md md-person-add"></i> Add Student</button> -->
            </div>
        </div>
       
        <div class="col-lg-9" style="margin-top: 10px;">
            <div style="padding: 10px 3px;" class="btn-group">
                <select class="form-control" id="exampleFormControlSelect1"> 
                      <option>12 - Falcata</option>
                      <option>11 - Salome</option>
                      <option>12 - Compassion</option>
                </select>
            </div>
            <div style="padding: 10px 5px;" class="btn-group">
                <input type="month"></input>
            </div>
           
             <div style="padding: 10px 5px;" class="btn-group">
                 <button type="button" class="btn btn-info waves-effect waves-light"><i class="fa fa-download"></i> Export</button>
            </div>
           
        </div>
            <div class="panel-body">
                <div class="row">
                    <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Grade &amp; Section</th>
                                    <th>Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                 <tr>
                                    <td>Grade 12 - Palkata</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Grade 11 - Diamond</td>
                                    <td>15</td>
                                </tr>
                                 <tr>
                                    <td>Grade 12 - Pearl</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Grade 11 - Rose</td>
                                    <td>15</td>
                                </tr>
                                 <tr>
                                    <td>Grade 12 - Lemon</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Grade 11 - Daisy</td>
                                    <td>15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      
@section('footer')
    @include('senior.monthly.includes.footer')
@show
@endsection