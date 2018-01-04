

@extends('junior.admin.layouts.dashboard')
@section('title', 'Student Management | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
    @if (Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}
        </div>
    @endif
   <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Dashboard</a></li>
                        <li>Student Offense</li>
                    </ol>
                </div>
            </div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Student Offense Records</h3>
            </div>

            <div class="col-lg-6">
                <form action="{{ route('junior.offenseSearch')}}" method="get">
                    {{csrf_field()}}
                    <div style="padding: 10px 3px;" class="btn-group">
                        <select class="form-control" id="section" name="section">
                            <option value="">Please select</option>
                            @foreach($sections as $section)
                                <option <?php if(isset($_GET['section'])):
                                    echo $_GET['section']== $section->id ? "selected" : "";
                                endif; ?> value="{{$section->id}}">{{$section->grade}} - {{$section->section}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div style="padding: 10px 5px;" class="btn-group">
                        <select class="form-control" name="sy" id="sy">
                            <option value="">Please select</option>
                            @foreach($school_years as $school_year)
                                <option <?php if(isset($_GET['sy'])):
                                    echo $_GET['sy']== $school_year->id ? "selected" : "";
                                endif; ?> value="{{$school_year->id}}">{{$school_year->school_year}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-info waves-effect waves-light" ><i class="fa fa-search"></i> Search</button>
                </form>
            </div>
            @section('modal')
                @include('junior.offense_records.includes.modal')
            @show
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
                            @foreach($offenses as $offense)
                                <tr>
                                    <td>{{$offense->id}}</td>
                                    <td>{{$offense->student_id}}</td>
                                    <td>{{$offense->school_year}}</td>
                                    <td>{{$offense->section_id}}</td>
                                    <td>{{$offense->date_commit}}</td>
                                    <td>{{date("H:i:s",strtotime($offense->created_at))}}</td>
                                    <td>{{Config::get('constants.violation_name.'.$offense->category)}}</td>
                                    <td>{{$offense->student_offense}}</td>
                                    <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#offense-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5"><i class="md md-border-color"></i></button>
                                        <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                </tr>
                            @endforeach
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
    @include('junior.student.includes.footer')
@show
@endsection