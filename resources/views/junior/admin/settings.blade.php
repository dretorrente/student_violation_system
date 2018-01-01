@extends('junior.admin.layouts.dashboard')
@section('title', 'Settings | Prefect of Discipline Students Violation Monitoring System')
@section('content')
<div class="content">
<div class="wraper container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="bg-picture text-center" style="background-image:url('assets/images/big/bg.jpg')">
                <div class="bg-picture-overlay"></div>
                <div class="profile-info-name">
                    <img src="assets/images/users/default.png" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                    <h3 class="text-white">Rocky</h3>
                </div>
            </div>
            <!--/ meta -->
        </div>
    </div>
    <form role="form" method="POST" action="{{ route('elem.updateSettings')}}" enctype="multipart/form-data">
        {{csrf_field()}}
    <div class="row user-tabs">
        <div class="col-sm-9 col-lg-6">
            <ul class="nav nav-tabs tabs">
            <li class="active tab"> 
                <a href="#settings-2" data-toggle="tab" aria-expanded="false" class="active"> 
                    <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                    <span class="hidden-xs">Settings</span> 
                </a> 
            </li> 
            <li class="tab">
                <a href="#home-2" data-toggle="tab" aria-expanded="false"> 
                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                    <span class="hidden-xs">About Me</span> 
                </a> 
            </li> 
        <div class="indicator"></div></ul> 
        </div>
        <div class="hidden-xs col-sm-3 col-lg-6">
            <div class="pull-right">
                <button type="button" class="fileupload btn btn-info waves-effect waves-light">
                    <span><i class="ion-android-camera"></i> Upload a Photo</span>
                    <input type="file" name="upload" id="upload" class="upload">
                </button>         
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12"> 
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <div class="tab-content profile-tab-content"> 
            <div class="tab-pane active" id="settings-2">
                <div class="panel panel-default panel-fill">
                    <div class="panel-heading"> 
                        <h3 class="panel-title">Account Settings</h3> 
                    </div> 
                    <div class="panel-body"> 

                            <div class="form-group">
                                <label for="FullName">Full Name</label>
                                <input type="text" id="FullName" name="username" class="form-control" value="{{ $user->username }}">
                            </div>
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" id="Email" name="email" class="form-control" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" id="Password" class="form-control" placeholder="6 - 15 Characters">
                            </div>
                            <div class="form-group">
                                <label for="RePassword">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="RePassword" class="form-control" placeholder="6 - 15 Characters">
                            </div>
                            <button class="btn btn-success waves-effect waves-light" type="submit"><i class="md md-check"></i> Save Changes</button>


                    </div> 
                </div>
            </div> 

            <div class="tab-pane" id="home-2"> 
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default panel-fill">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">Personal Information</h3> 
                            </div> 
                            <div class="panel-body"> 
                                <div class="about-info-p">
                                    <strong>Full Name</strong>
                                    <br>
                                    <p class="text-muted">Rocky Ashton</p>
                                </div>
                                <div class="about-info-p">
                                    <strong>Mobile</strong>
                                    <br>
                                    <p class="text-muted">(123) 123 1234</p>
                                </div>
                                <div class="about-info-p">
                                    <strong>Email</strong>
                                    <br>
                                    <p class="text-muted">pod@gmail.com</p>
                                </div>
                                <div class="about-info-p m-b-0">
                                    <strong>Location</strong>
                                    <br>
                                    <p class="text-muted">Philippines</p>
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="panel panel-default panel-fill">
                            <div class="panel-heading"> 
                                <h3 class="panel-title">Biography</h3> 
                            </div> 
                            <div class="panel-body"> 
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p><strong>But also the leap into electronic typesetting, remaining essentially unchanged.</strong></p>
                                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div> 

        </div>

    </div>
    </div>
    </form>
</div>
</div>
@section('footer')
    @include('junior.student.includes.footer')
@show
@endsection