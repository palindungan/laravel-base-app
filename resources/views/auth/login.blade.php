@extends('components.layouts.master1.auth')

@section('content')
    <form action="{{ url('login') }}" method="POST" onsubmit="disableSubmitButton(this)">
        @csrf
        <input type="hidden" name="_form_token" value="{{ Str::uuid() }}">

        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn" style="display: block">
                <h3 class="text-center">Sign In</h3>
                <div class="login-form">

                    <div class="form-sub pt-0 pb-0">
                        @include('components.layouts.master1.alert.dismissible')
                    </div>

                    <div class="form-sub">
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="email" name="email" type="email" class="form-control"
                                placeholder="email"value="{{ old('email', '') }}" />
                            <label for="email">email</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="password" name="password" type="password" class="form-control"placeholder="password"
                                value="{{ old('password', '') }}" />
                            <label for="password">Password</label>
                            <div class="show-password">
                                <i class="icon-eye"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-action mb-3">
                        <button type="submit" class="btn btn-primary w-100 btn-login">Sign In</button>
                    </div>

                    <div class="login-account">
                        <span class="msg">Don't have an account yet ?</span>
                        <a href="" class="link">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
