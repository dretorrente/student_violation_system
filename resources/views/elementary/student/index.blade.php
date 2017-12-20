
@extends('elementary.admin.layouts.dashboard')
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
                        <li><a href="#">Students</a></li>
                    </ol>
                </div>
            </div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">List of Students</h3>
            </div>
        <div class="col-lg-6 pull-right">
            <div style="padding: 10px 5px;" class="pull-right btn-group dropdown-btn-group" >
                <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#student-add"><i class="md md-person-add"></i> Add Student</button>
            </div>
        </div>
        @section('modal')
            @include('elementary.student.includes.modal')
        @show
        <div class="col-lg-6">
            <div style="padding: 10px 3px;" class="btn-group">
                <select class="form-control" id="exampleFormControlSelect1">
                      <option>Section</option>
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
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Adviser</th>
                                    <th>Grade &amp; Section</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->student_id}}</td>
                                        <td>{{$student->school_year}}</td>
                                        <td>{{$student->first_name}}</td>
                                        <td>{{$student->middle_name}}</td>
                                        <td>{{$student->last_name}}</td>
                                        <td>{{$student->adviser}}</td>
                                        <td>{{$student->section_id}}</td>
                                        <td><button data-tooltip="tooltip" data-placement="top" data-original-title="Update Student" data-toggle="modal" data-target="#student-update" type="button" class="btn-xs btn btn-purple waves-effect waves-light m-b-5 update" id="{{ $student->id }}"><i class="md md-border-color"></i></button>
                                        <button data-tooltip="tooltip" data-placement="top" data-original-title="Violations" type="button" class="btn-xs btn btn-pink waves-effect waves-light m-b-5"><i class="md md-my-library-books"></i></button></td>
                                        <input type="hidden" value="{{$student->sy_id}}">
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

<script type="text/javascript">
    $(document).ready(function(){
        $('.delete').on('click', function(){
            var id = $(this).attr('id');
            $('.confirmation').data('id',id);
        });

        $('.confirmation').on('click', function(){
            window.location.href = "/elementary/delete/"+$(this).data('id');
        });
        $('.update').on('click', function(){
            var parent = $(this).parent().parent();
            var id = $(':nth-child(1)', parent).text();
            var studentID = $(':nth-child(2)', parent).html();
            var first_name =  $(':nth-child(4)', parent).text();
            var middle_name =  $(':nth-child(5)', parent).text();
            var last_name =  $(':nth-child(6)', parent).text();
            var age =  $(':nth-child(7)', parent).text();
            var gender =  $(':nth-child(14)', parent).val();
            var adviser =  $(':nth-child(9)', parent).text();
            var section =  $(':nth-child(10)', parent).text();
            var address =  $(':nth-child(11)', parent).text();
            var school_year = $(':nth-child(13)', parent).val();
            $('#student-update #student_id').val(studentID);
            $('#student-update #first_name').val(first_name);
            $('#student-update #middle_name').val(middle_name);
            $('#student-update #last_name').val(last_name);
            $('#student-update #age').val(age);
            $('#student-update #gender').val(gender);
            $('#student-update #adviser').val(adviser);
            $('#student-update #address').val(address);
            $('#student-update #sy_id').val(school_year);
            $('#student-update #section_id').val(section);
            $('#student-update #gender').val(gender);
            $('#student-update #hiddenStudent').val(id);
        });
    });
</script>


@section('footer')
    @include('elementary.student.includes.footer')
@show
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#datatable_length select', function(){
            var num_entries  = $(this).val();
            $.ajax({
                type: 'post',
                url: "/",
                data: {entries:num_entries},
                success: function(response) {
                  console.log(response);
                }
            });
        });
    });
</script>
@endsection
