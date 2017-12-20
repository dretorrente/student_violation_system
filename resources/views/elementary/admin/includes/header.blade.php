<div class="topbar">
    <div class="topbar-left">
        <div class="text-center">
            <a href="{{url('/elementary/students/')}}" class="logo"><i class="md md-assignment-ind"></i> <span>P.O.D. </span></a>
        </div>
    </div>
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button type="button" class="button-menu-mobile open-left">
                        <i class="fa fa-bars"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>
                <form class="navbar-form pull-left" role="search">
                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                </form>
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown hidden-xs">
                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                            <i class="md md-notifications" style="color:#fff;"></i> <span class="badge badge-xs badge-danger">
                                @if(Helper::elem_students_offense()['count'] > 0)
                                    {!! Helper::elem_students_offense()['count'] !!}
                                @endif
                            </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            @if(Helper::elem_students_offense()['count'] > 0)
                                <li class="text-center notifi-title">Notification for Student
                                    with 3 offenses</li>
                                <li class="list-group">
                                   @foreach(Helper::elem_students_offense()['student_offense'] as $student)
                                        <a href="javascript:void(0);" class="list-group-item" style="cursor:default;">
                                            <div class="media">
                                                <div class="media-left">
                                                    <em class="fa fa-user-plus fa-2x text-info"></em>
                                                </div>
                                                <div class="media-body clearfix">
                                                    <div class="media-heading">{{$student->first_name.' '.$student->last_name}}</div>
                                                </div>
                                            </div>
                                        </a>
                                   @endforeach
                                </li>
                            @else
                                <li class="text-center notifi-title">No student got 3 offenses yet</li>
                            @endif
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('assets/images/users/cus8.png')}}" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/settings')}}"><i class="md md-textsms"></i> Send SMS</a></li>
                            <li><a href="{{url('/elemsettings')}}"><i class="md md-settings"></i> Settings</a></li>
                            <li><a style="margin-left: 3px;" href="{{ route('logout') }}"><i class="ion-log-out"></i> Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
