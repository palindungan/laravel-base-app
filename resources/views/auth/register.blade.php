@extends('components.layouts.master1.auth')

@section('content')
    <div class="wrapper wrapper-login">
        <div class="container container-login animated fadeIn" style="display: block">
            <h3 class="text-center">Sign Up</h3>
            <div class="login-form">
                <div class="form-sub">
                    <div class="form-floating form-floating-custom mb-3">
                        <input id="fullname" name="fullname" type="text" class="form-control" placeholder="fullname"
                            required="" />
                        <label for="fullname">Fullname</label>
                    </div>
                    <div class="form-floating form-floating-custom mb-3">
                        <input id="email" name="email" type="email" class="form-control" placeholder="email"
                            required="" />
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating form-floating-custom mb-3">
                        <input id="passwordsignin" name="passwordsignin" type="password" class="form-control"
                            placeholder="passwordsignin" required="" />
                        <label for="passwordsignin">Password</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                    <div class="form-floating form-floating-custom mb-3">
                        <input id="confirmpassword" name="confirmpassword" type="password" class="form-control"
                            placeholder="confirmpassword" required="" />
                        <label for="confirmpassword">Confirm Password</label>
                        <div class="show-password">
                            <i class="icon-eye"></i>
                        </div>
                    </div>
                </div>
                <div class="form-action">
                    <a href="{{ url('login') }}" class="btn btn-danger btn-link btn-login me-3">Cancel</a>
                    <button type="submit" class="btn btn-primary btn-login">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
@endsection
