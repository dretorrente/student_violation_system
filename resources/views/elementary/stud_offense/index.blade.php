

@extends('elementary.admin.layouts.dashboard')
@section('title', 'Student Offense Records | Prefect of Discipline Students Violation Monitoring System')
@section('content')
    <div class="content">
        @if (Session::has('message'))
            <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissable fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="container">
        <form action="{{ route('elem.offenseadd')}}" method="post">
            {{csrf_field()}}
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Dashboard</a></li>
                        <li>Student Offense Records</li>
                    </ol>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Offense</h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                    <h3 class="panel-title">Information</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Date Commit</label>
                            <input type="datetime-local" name="date_commit" class="form-control" id="date_commit" required="required">
                            <label for="field-1" class="control-label">Category</label>
                            <input type="text" class="form-control" id="category" required="required" readonly>
                            <label for="field-1" class="control-label">Student Offense</label>
                            <input type="text" name="student_offense" class="form-control" id="violation_name" required="required" readonly>
                            <label for="field-1"  class="control-label">Description</label>
                            <textarea rows="3" cols="44" name="description" class="form-control" required="required"></textarea>
                            <input type="hidden" name="violation_id" id="violation_id">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-1"  class="control-label" required="required">Persons Involved</label>
                            <select size="10" class="select2 form-control" name="persons_involve[]" multiple="multiple" data-placeholder="With Max Selection Limit 20" required>
                                <option selected disabled>Please select receiver</option>
                                @foreach($students as $student)
                                    <option value="{{$student->student_id}}"> {!! Helper::fullname($student->first_name,$student->middle_name,$student->last_name) !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="field-1" class="control-label">Sanction</label>
                            <textarea rows="3" name="sanction" cols="44" class="form-control" required="required"></textarea><br>

                        </div>
                    </div>
                </div>
                <button type="submit"  id="save_offense" class="btn btn-info"><i class="md md-check"></i> Save</button>
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
<style>
    .form-control.select2-container {
        height: 249px !important;
    }
    #save_offense {
        margin-left: 50%;
        margin-bottom: 20px;
        font-size: 20px;
    }
</style>
@section('footer')
    @include('elementary.stud_offense.includes.footer')
@show
@endsection
