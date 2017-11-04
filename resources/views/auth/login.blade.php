@extends('layouts.app')

@section('content')

        <main>
            <!-- Page Title -->
            <div class="page-title">
                <div class="container">
                    <div class="breadcrumbs">
                        <a href="index.html">Home</a>
                        <span class="delimiter"><i class="material-icons keyboard_arrow_right"></i></span>
                        <a href="#">Shop</a>
                        <span class="delimiter"><i class="material-icons keyboard_arrow_right"></i></span>
                        <span>Account</span>
                    </div>

                    <div class="title pull-right">Login</div>
                </div>
            </div><!-- Page Title END -->

            <!-- Content -->
            <div class="container text-center">
                <h5 class="text-default margin-bottom-2x">Login With Your Account</h5>


                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>

                <hr class="margin-top-2x margin-bottom-2x">

                <div class="row">
                    <div class="col-md-6">
                        <img src="img/login_01.png" style="width: auto" alt="">
                        <h5>Login With Your Email</h5>
                        <p>Being able to foresee an unfortunate fact of life like death, disasters, illnesses, etc. through a dream is very common. </p>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" class="form-control text-center" placeholder="Enter your email">
                                <input type="text" class="form-control text-center" placeholder="Enter your password">
                                <a href="#" class="btn btn-default btn-block margin-right-none">Login</a>
                                <div>
                                    <label class="checkbox pull-left">
                                        <input type="checkbox"> Save Password
                                    </label>

                                    <a href="#" class="underline-link pull-right">Lost your password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 margin-bottom-2x">
                        <img src="img/login_02.png" style="width: auto" alt="">
                        <h5>Register New Account</h5>
                        <p>Being able to foresee an unfortunate fact of life like death, disasters, illnesses, etc. through a dream is very common. </p>

                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <input type="text" class="form-control text-center" placeholder="Enter your name">
                                <input type="text" class="form-control text-center" placeholder="Enter your email">
                                <input type="text" class="form-control text-center" placeholder="Enter your password">
                                <input type="text" class="form-control text-center" placeholder="Enter your password again">
                                <a href="#" class="btn btn-default btn-block margin-right-none">Register</a>
                                <div>
                                    <label class="checkbox pull-left">
                                        <input type="checkbox"> Subscribe for our news
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Content END -->
        </main>

@endsection
