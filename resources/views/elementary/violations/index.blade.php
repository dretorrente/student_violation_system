
@extends('elementary.admin.layouts.dashboard')
@section('title', 'Violations & Sanctions | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
   <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{url('/home')}}">Dashboard</a></li>
                        <li><a href="#">Violations &amp; Sanctions</a></li>
                    </ol>
                </div>
            </div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List of Violations</h3>
            </div>

        <div class="col-lg-6 pull-right">
            <div style="padding: 10px 5px;" class="pull-right btn-group dropdown-btn-group" >
                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#violation-add"><i class="md md-person-add"></i> Add Violation</button>
            </div>
        </div>
        @section('modal')
            @include('elementary.violations.includes.modal')
        @show
            <div class="panel-body">
                <div class="row">
                    <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Violation</th>
                                    <th>1st Sanction</th>
                                    <th>2nd Sanction</th>
                                    <th>3rd Sanction</th>
                                    <th>4th Sanction</th>
                                    <th>5th Sanction</th>
                                    <th>6th Sanction</th>
                                    <th>7th Sanction</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name=""></td>
                                    <td>Wearing earings inside of the school</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Not wearing proper slocks</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Wearing earings inside of the school</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Not wearing proper slocks</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Staff</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Wearing earings inside of the school</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Not wearing proper slocks</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Staff</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td>Administrator</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td>Administrator</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Minor Offense</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>Promisory Note, noted by the student</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student cannot enter the school</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>The student will refer to Guidance Counselor</td>
                                    <td>Advising to transfer to other school</td>
                                    <td>Administrator</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update" data-toggle="modal" data-target="#violation-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                    <button data-tooltip="tooltip" data-placement="top" data-original-title="Delete" data-toggle="modal" data-target="#violation-delete" type="button" class="btn-xs btn btn-danger waves-effect waves-light m-b-5"><i class="md md-delete"></i></button></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Row -->

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