@extends('components.layouts.master1.auth')

@section('content')
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn" style="display: block">
            <h3 class="text-center">Sign In</h3>
            <div class="login-form">
                <div class="form-sub">
                    <div class="form-floating form-floating-custom mb-3">
                        <input id="username" name="username" type="text" class="form-control" placeholder="username"
                            required="" />
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating form-floating-custom mb-3">
                        <input id="password" name="password" type="password" class="form-control" placeholder="password"
                            required="" />
                        <label for="password">Password</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="form-action mb-3">
                    <a href="" class="btn btn-primary w-100 btn-login">Sign In</a>
                </div>
                <div class="login-account">
                    <span class="msg">Don't have an account yet ?</span>
                    <a href="" class="link">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
@endsection
