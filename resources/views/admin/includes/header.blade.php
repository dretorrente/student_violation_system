<div class="topbar">
    <div class="topbar-left">
        <div class="text-center">
            <a href="{{url('/home')}}" class="logo"><i class="md md-assignment-ind"></i> <span>P.O.D. </span></a>
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
                            <i class="md md-notifications" style="color:#fff;"></i> <span class="badge badge-xs badge-danger">3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg">
                            <li class="text-center notifi-title">Notification</li>
                            <li class="list-group">
                               <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="media-left">
                                        <em class="fa fa-user-plus fa-2x text-info"></em>
                                     </div>
                                     <div class="media-body clearfix">
                                        <div class="media-heading">New user registered</div>
                                        <p class="m-0">
                                           <small>You have 10 unread messages</small>
                                        </p>
                                     </div>
                                  </div>
                               </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="media-left">
                                        <em class="fa fa-diamond fa-2x text-primary"></em>
                                     </div>
                                     <div class="media-body clearfix">
                                        <div class="media-heading">New settings</div>
                                        <p class="m-0">
                                           <small>There are new settings available</small>
                                        </p>
                                     </div>
                                  </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                  <div class="media">
                                     <div class="media-left">
                                        <em class="fa fa-bell-o fa-2x text-danger"></em>
                                     </div>
                                     <div class="media-body clearfix">
                                        <div class="media-heading">Updates</div>
                                        <p class="m-0">
                                           <small>There are
                                              <span class="text-primary">2</span> new updates available</small>
                                        </p>
                                     </div>
                                  </div>
                                </a>
                                <a href="javascript:void(0);" class="list-group-item">
                                  <small>See all notifications</small>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs">
                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="assets/images/users/cus8.png" alt="user-img" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/settings')}}"><i class="md md-textsms"></i> Send SMS</a></li>
                            <li><a href="{{url('/settings')}}"><i class="md md-settings"></i> Settings</a></li>
                            <li><a style="margin-left: 3px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="ion-log-out"></i> Sign Out</a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
