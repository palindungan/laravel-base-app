@extends('components.layouts.master1.auth')

@section('content')
    <form action="{{ url('register') }}" method="POST" onsubmit="disableSubmitButton(this)">
        @csrf
        <input type="hidden" name="_form_token" value="{{ Str::uuid() }}">

        <div class="wrapper wrapper-login">
            <div class="container container-login animated fadeIn" style="display: block">
                <h3 class="text-center">Sign Up</h3>
                <div class="login-form">

                    <div class="form-sub pt-0 pb-0">
                        @include('components.layouts.master1.alert.dismissible')
                    </div>

                    <div class="form-sub">
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="name" name="name" type="text" class="form-control" placeholder="name"
                                value="{{ old('name', '') }}" />
                            <label for="name">Fullname</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="email" name="email" type="email" class="form-control" placeholder="email"
                                value="{{ old('email', '') }}" />
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="password" name="password" type="password" class="form-control"
                                placeholder="password" />
                            <label for="password">Password</label>
                            <div class="show-password">
                                <i class="icon-eye"></i>
                            </div>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                            <input id="password_confirmation" name="password_confirmation" type="password"
                                class="form-control" placeholder="password_confirmation" />
                            <label for="password_confirmation">Confirm Password</label>
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
    </form>
@endsection
