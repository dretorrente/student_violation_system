@extends('elementary.admin.layouts.dashboard')
@section('title', 'Compose Message | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
   <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb pull-right">
                    <li><a href="#">Dashboard</a></li>
                    <li>Compose</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Compose your message</h3>
                    </div>
                <div class="panel-body">
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Send to:</label>
                            <div class="col-sm-11">
                                <select class="select2 form-control" multiple="multiple" data-placeholder="With Max Selection Limit 20">
                                    <option value="#">&nbsp;</option>
                                    <option value="Tiger Nixon">Tiger Nixon</option>
                                    <option value="Garrett Winters">Garrett Winters</option>
                                    <option value="Ashton Cox">Ashton Cox</option>
                                    <option value="Cedric Kelly">Cedric Kelly</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-1 control-label">Message:</label>
                            <div class="col-sm-11">
                            <textarea rows="5" class="col-sm-11 form-control" placeholder="Write your message..."></textarea>
                            </div>
                        </div>
                    </form>
                        <button class="pull-right btn btn-info waves-effect waves-light"><span class="fa fa-send"></span> Send Now</button>
                    </div> <!-- panel-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@section('footer')
    @include('elementary.sms.includes.footer')
@show

@endsection
