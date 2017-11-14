

@extends('senior.admin.layouts.dashboard')
@section('title', 'Student Offense | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
    @if (Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ Session::get('message') }}
        </div>
    @endif
   <div class="container">
        <form action="{{ route('senior.offenseadd')}}" method="post">
            {{csrf_field()}}
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
                    <h3 class="panel-title">Student Information</h3>
                </div>
                <div class="panel-body">
                    @section('modal')
                @include('senior.stud_offense.includes.modal')
                @show
                    <div class="col-md-6"> 
                        <div class="form-group"> 
                            <button data-toggle="modal" data-target="#select-student" class="btn btn-info">Select Student Profile</button>
                            <br>
                            <label for="field-1" class="control-label">Search Student ID</label> 
                             <input type="text" class="form-control" id="field-1">
                             <label for="field-1" class="control-label">First Name</label> 
                             <input type="text" class="form-control" id="field-1"> 
                             <label for="field-1" class="control-label">Last Name</label> 
                             <input type="text" class="form-control" id="field-1"> 
                             <label for="field-1" class="control-label">Middle Name</label> 
                              <input type="text" class="form-control" id="field-1"> 
                        </div> 
                    </div>
                     <div class="col-md-6"> 
                        <div class="form-group"> 
                             <label for="field-1" class="control-label">Gender</label> 
                             <input type="text" class="form-control" id="field-1"> 
                             <label for="field-1" class="control-label">Adviser</label> 
                             <input type="text" class="form-control" id="field-1"> 
                             <label for="field-1" class="control-label">Grade Section</label> 
                              <input type="text" class="form-control" id="field-1"> 
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
                                    @foreach($violations as $violation)
                                    <tr>
                                        <td><input type="radio" name="violation" id="{{ $violation->id }}"></td>
                                        <td>{{Config::get('constants.violation_name.'.$violation->category)}}</td>
                                        <td>{{ $violation->violation }}</td>
                                        <td>{{ $violation->first_sanction }}</td>
                                        <td>{{ $violation->second_sanction }}</td>
                                        <td>{{ $violation->third_sanction }}</td>
                                        <td>{{ $violation->fourth_sanction }}</td>
                                        <td>{{ $violation->fifth_sanction }}</td>
                                        <td>{{ $violation->sixth_sanction }}</td>
                                        <td>{{ $violation->seventh_sanction }}</td>
                                    </tr>
                                    @endforeach
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
                             <button type="button" style="margin-left: 255px;" class="btn btn-info"><i class="md md-check"></i> Save</button>
                        </div> 
                    </div>
                </div>
            </div>
        </form>
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
        $("#stud_offense").on("click",function(e){
            e.preventDefault();
            var parent = $('input[name=student]:checked').parent().parent();
            var studentID = $(':nth-child(2)', parent).text();
            var first_name =  $(':nth-child(4)', parent).text();
            var middle_name =  $(':nth-child(5)', parent).text();
            var last_name =  $(':nth-child(6)', parent).text();
            var gender =  $(':nth-child(8)', parent).text();
            var adviser =  $(':nth-child(9)', parent).text();
            var section =  $(':nth-child(10)', parent).text();
            document.getElementById('stud_id').value = studentID;
            document.getElementById('first_name').value = first_name;
            document.getElementById('middle_name').value = middle_name;
            document.getElementById('last_name').value = last_name;
            document.getElementById('gender').value = gender;
            document.getElementById('adviser').value = adviser;
            document.getElementById('grade_section').value = section;
            $('#modal-offense').modal('toggle');
            $(':nth-child(1)', parent).prop('checked', false);
        });

        $('input:radio[name="violation"]').change(
        function(){
            if ($(this).is(':checked')){
                var parent = $(this).parent().parent();
                var category = $(':nth-child(2)', parent).text();
                var violation = $(':nth-child(3)', parent).text();
                document.getElementById('category').value = category;
                document.getElementById('violation_name').value = violation;
                document.getElementById('violation_id').value = $(this).attr('id');
            }
        });
    });
</script>
@section('footer')
    @include('senior.student.includes.footer')
@show
@endsection


