@extends('elementary.admin.layouts.dashboard')
@section('title', 'Grade & Section | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
   <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Grade &amp; Section</a></li>
                    </ol>
                </div>
            </div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List of Section</h3>
            </div>

        <div class="col-lg-6 pull-right">
            <div style="padding: 10px 5px;" class="pull-right btn-group dropdown-btn-group" >
                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#section-add"><i class="md md-playlist-add"></i> Add Section</button>
            </div>
        </div>
        @section('modal')
            @include('elementary.section.includes.modal')
        @show
            <div class="panel-body">
                <div class="row">
                    <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Grade &amp; Section</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12 - Salome</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#section-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#section-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>11 - Salome</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#section-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#section-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>12 - Falcata</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#section-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#section-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>11 - ICT</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#section-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#section-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
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