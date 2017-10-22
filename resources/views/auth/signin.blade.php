<!DOCTYPE html>
<html>
@section('header')
    @include('auth.partials.header')
@show
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a class="col-md-12">Prefect of Discipline <b>SHS Department</b></a>
            <small>Student's Violation Monitoring System</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="{{ route('login') }}" method="POST" novalidate>
                    {{ csrf_field() }}
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="ion-person-stalker"></i>
                        </span>
                        <div class="form-line{{ $errors->has('username') ? ' error' : '' }}">
                            <input type="text" class="form-control" name="username" id="username"  value="{{ old('username') }}" placeholder="Username" required autofocus>
                            @if ($errors->has('username'))
                                    <label id="username-error" class="error" for="username">
                                        {{ $errors->first('username') }}
                                    </label>
                            @endif
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="ion-locked"></i>
                        </span>
                        <div class="form-line{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            @if ($errors->has('password'))
                                    <label id="password-error" class="error" for="password">
                                        {{ $errors->first('password') }}
                                    </label>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-block bg-blue waves-effect">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a style="visibility:hidden;" href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{ url('/forgot') }}">Forgot Password ?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @section('scripts')
        @include('auth.partials.scripts')
    @show
</body>
</html>