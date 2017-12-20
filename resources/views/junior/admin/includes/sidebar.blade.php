<div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <div class="user-details">
                <div class="pull-left">
                    <img src="{{asset('assets/images/users/cus8.png')}}" alt="" class="thumb-md img-circle">
                </div>
                <div class="user-info">
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{Auth::User()->username}}</a>
                    </div>
                    
                    <p style="color:#fff;" class="text-muted m-0">{{ucfirst(Auth::User()->role)}}</p>
                </div>
            </div>
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li>
                        <a href="{{ url('/junior/home') }}" class="waves-effect"><i class="md md-dashboard"></i><span>Dashboard </span></a>
                    </li>
                    <li>
                        <a href="{{ url('/junior/students') }}" class="waves-effect"><i style="font-size: 20px;" class="ion-ios7-people"></i><span>Student Management</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/junior/offense') }}" class="waves-effect"><i class="md md-assignment-late"></i><span>Student Offense</span></a>
                    </li>
                    <li>
                        <a href="{{url('/junior/offense_records')}}" class="waves-effect"><i class="ion-android-book"></i><span>Stud. Offense Records</span></a>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="md md-perm-data-setting"></i><span>File Maintenance </span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/junior/violation')}}"><i class="ion-ios7-paper"></i> Violations</a></li>
                            <li><a href="{{url('/junior/section')}}"><i class="md md-format-list-numbered"></i> Sections</a></li>
                            <li><a href="{{url('/junior/schoolyear')}}"><i class="md md-event-available"></i> School Year</a></li>
                        </ul>
                    </li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="fa fa-file"></i><span>Reports</span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/jryearly')}}"><i class="fa fa-calendar"></i> Yearly Reports</a></li>

                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="md md-textsms"></i><span>SMS</span><span class="pull-right"><i class="md md-add"></i></span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{url('/junior/compose')}}"><i class="fa fa-pencil"></i> Compose Message</a></li>
                            <li><a href="{{url('/junior/contacts')}}"><i class="md-contacts"></i> Contacts</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/junior/users') }}" class="waves-effect"><i class="ion-person-stalker"></i><span>User Management</span></a>
                    </li>

                     <li>
                        <a href="{{url('/junior/settings')}}" class="waves-effect"><i class="md md-settings"></i><span>Settings </span></a>
                    </li>

                     <li>
                        <a style="margin-left:2px;" href="{{url('/')}}" class="waves-effect"><i style="font-size: 18.5px;" class="ion-log-out"></i><span>Sign Out </span></a>
                    </li>

                <div class="clearfix"></div>
            </div>
        <div class="clearfix"></div>
    </div>
</div>