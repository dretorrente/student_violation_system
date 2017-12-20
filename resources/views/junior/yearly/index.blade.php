
@extends('junior.admin.layouts.dashboard')
@section('title', 'Yearly Reports | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
   <div class="container">
            <div class="row">
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Yearly Reports</h3>
            </div>
        <div class="col-lg-6 pull-right">
            <div style="padding: 10px 5px;" class="pull-right btn-group dropdown-btn-group" >
               <!--  <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target="#student-add"><i class="md md-person-add"></i> Add Student</button> -->
            </div>
        </div>
       
        <div class="col-lg-9" style="margin-top: 10px;">
            <div style="padding: 10px 3px;" class="btn-group">
                <select class="form-control" id="exampleFormControlSelect1">
                      <option>9 - Section</option>
                      <option>10 - Falcata</option>
                      <option>8 - Daisy</option>
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
                                    <th>Tardiness And Offenses</th>
                                    <th>Recommendation</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Edward Ocampo</td>
                                    <td>5</td>
                                    <td>*required to submit a written personal<br/>
                                      &nbsp commitment with parent signature ( to be submitted together<br/>&nbsp with the disciplinary provation / commitment form)</td>
                                </tr>
                                <tr>
                                    <td>John Wako</td>
                                    <td>15</td>
                                    <td>*required to submit a written personal<br/>
                                      &nbsp commitment with parent signature ( to be submitted together<br/>&nbsp with the disciplinary provation / commitment form)</td>
                                </tr>
                                 <tr>
                                    
                                    <td>Mark Gonzaga</td>
                                    <td>15</td>
                                    <td>*required to submit a written personal<br/>
                                      &nbsp commitment with parent signature ( to be submitted together<br/>&nbsp with the disciplinary provation / commitment form)</td>
                                </tr>
                                <tr>
                                    
                                    <td>Kevin Labad</td>
                                    <td>15</td>
                                    <td>*required to submit a written personal<br/>
                                      &nbsp commitment with parent signature ( to be submitted together<br/>&nbsp with the disciplinary provation / commitment form)</td>
                                </tr>
                                 <tr>
                                    
                                    <td>Dave Pogi</td>
                                    <td>15</td>
                                    <td>*required to submit a written personal<br/>
                                      &nbsp commitment with parent signature ( to be submitted together<br/>&nbsp with the disciplinary provation / commitment form)</td>
                                </tr>
                                <tr>
                                    
                                    <td>Jazel Law</td>
                                    <td>15</td>
                                    <td>*required to submit a written personal<br/>
                                      &nbsp commitment with parent signature ( to be submitted together<br/>&nbsp with the disciplinary provation / commitment form)</td>
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
    @include('junior.yearly.includes.footer')
@show
@endsection