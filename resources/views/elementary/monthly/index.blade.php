
@extends('elementary.admin.layouts.dashboard')
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
                      <option>6 - Falcata</option>
                      <option>4 - Salome</option>
                      <option>3 - Compassion</option>
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
                                    <th>Name Of Students</th>
                                    <th>Total</th>  
                                </tr>
                            </thead>

                            <tbody>
                                 <tr>
                                    <td>John Wako</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Henry Omaga Diaz</td>
                                    <td>15</td>
                                </tr>
                                 <tr>
                                    <td>Ted Failon</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td>Korina Sanchez</td>
                                    <td>15</td>
                                </tr>
                                 <tr>
                                    <td>Karen Davila</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Jose Rizal</td>
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
    @include('elementary.monthly.includes.footer')
@show
@endsection