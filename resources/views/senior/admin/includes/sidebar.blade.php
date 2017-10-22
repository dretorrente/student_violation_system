<div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="user-details">
                <div class="pull-left">
                    <img src="assets/images/users/cus8.png" alt="" class="thumb-md img-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Rocky <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                            <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                            <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                            <li><a href="{{ url('/') }}"><i class="md md-settings-power"></i> Logout</a></li>
                        </ul>
                    </div>
                    
                    <p style="color:#fff;" class="text-muted m-0">Administrator</p>
                </div>
            </div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ url('/srhome') }}" class="waves-effect"><i class="md md-dashboard"></i><span>Dashboard </span></a>
                    </li>
                    <li>
                        <a href="{{ url('/student') }}" class="waves-effect"><i style="font-size: 20px;" class="ion-ios7-people"></i><span>Student Management</span></a>
                    </li>
                    <li>
                        <a href="{{url('/offense_records')}}" class="waves-effect"><i class="md md-assignment-late"></i><span>Student Offense</span></a>
                    </li>
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="md md-perm-data-setting"></i><span>File Maintenance </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/violation')}}"><i class="md md-my-library-books"></i> Violations</a></li>
                            <li><a href="{{url('/section')}}"><i class="md md-format-list-numbered"></i> Sections</a></li>
                            <li><a href="{{url('/schoolyear')}}"><i class="md md-event-available"></i> School Year</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/users') }}" class="waves-effect"><i class="ion-person-stalker"></i><span>User Management</span></a>
                    </li>

                     <li>
                        <a href="{{ url('/stud_offense') }}" class="waves-effect"><i class="ion-person-stalker"></i><span>Stud Offense</span></a>
                    </li>

                    <li>
                        <a href="javascript:;" class="waves-effect"><i class="md md-textsms"></i><span>Send SMS </span></a>
                    </li>

                     <li>
                        <a href="{{url('/settings')}}" class="waves-effect"><i class="md md-settings"></i><span>Settings </span></a>
                    </li>

                     <li>
                        <a style="margin-left:2px;" href="{{url('/')}}" class="waves-effect"><i style="font-size: 18.5px;" class="ion-log-out"></i><span>Sign Out </span></a>
                    </li>

                <div class="clearfix"></div>
            </div>
        <div class="clearfix"></div>
    </div>
</div>