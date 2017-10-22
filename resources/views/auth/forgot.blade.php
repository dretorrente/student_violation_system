<!DOCTYPE html>
<html lang="en">
<title>
    @section('title')
        Forgot Password | Prefect of Discipline Students Violation Monitoring System
</title>
    @section('header')
        @include('auth.partials.header')
    @show
<body class="fp-page">
    <div class="fp-box">
        <div class="logo">
            <a class="col-md-12">Prefect of Discipline <b>SHS Department</b></a>
            <small>Student's Violation Monitoring System</small>
        </div>
        <div class="card">
            <div class="body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form id="forgot_password" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="msg">
                        Enter your email address that you used to register. We'll send you an email with your username and a
                        link to reset your password.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="md md-email"></i>
                        </span>
                        <div class="form-line{{ $errors->has('email') ? ' error' : '' }}">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-blue waves-effect" type="submit">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ route('login') }}">Sign In!</a>
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