@extends('layouts.login')

@section('content')


    <div class="col-sm-6">
        <br/>
        <span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
        <br/><br/>

        <form class="form-horizontal" role="form" method="POST" action="{{ url( Lang::locale().'/login') }}">
            {{ csrf_field() }}

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <label for="username">E-Mail Address</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" required>
                <label for="password">Password</label>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
                <p class="help-block">
                    <a href="{{ url('/password/reset') }}">
                        Forgotten?
                    </a>
                </p>
            </div>
            <br/>

            <div class="row">
                <div class="col-xs-6 text-left">
                    <div class="checkbox checkbox-inline checkbox-styled">
                        <label>
                            <input type="checkbox" name="remember"> <span>Remember me</span>
                        </label>
                    </div>
                </div><!--end .col -->
                <div class="col-xs-6 text-right">
                    <button class="btn btn-primary btn-raised" type="submit">Login</button>
                </div><!--end .col -->
            </div><!--end .row -->

        </form>
    </div><!--end .col -->
    <div class="col-sm-5 col-sm-offset-1 text-center">
        <br><br>
        <h3 class="text-light">
            No account yet?
        </h3>
        <a class="btn btn-block btn-raised btn-primary" href="#">Sign up here</a>
        <br><br>
        <h3 class="text-light">
            or
        </h3>
        <p>
            <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-facebook pull-left"></i>Login with Facebook</a>
        </p>
        <p>
            <a href="#" class="btn btn-block btn-raised btn-info"><i class="fa fa-twitter pull-left"></i>Login with Twitter</a>
        </p>
    </div><!--end .col -->
@endsection
