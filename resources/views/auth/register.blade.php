@extends('layouts.app')

@section('content')
<div class="bg-pattern-style bg-pattern-style-register">
    <div class="content">
        <div class="account-content">
            <div class="account-box">
                <div class="login-right">
                    <div class="login-header">
                        <h3><span>Mentoring</span> Register</h3>
                        <p class="text-muted">Access to our dashboard</p>
                    </div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">First Name</label>
                                    <input
                                        autofocus=""
                                        class="form-control"
                                        id="first-name"
                                        name="first_name"
                                        type="text"
                                        required
                                        value="{{ old('first_name') }}"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label">Last Name</label>
                                    <input
                                        class="form-control"
                                        id="last-name"
                                        name="last_name"
                                        type="text"
                                        required
                                        value="{{ old('last_name') }}"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email Address</label>
                            <input id="email" type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-control-xs custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="read_and_agreed_terms_and_conditions"
                                    id="agree_checkbox_user">
                                <label class="custom-control-label" for="agree_checkbox_user">I agree to the</label> <a
                                    tabindex="-1" href="javascript:void(0);">Privacy Policy</a> &amp; <a tabindex="-1"
                                    href="javascript:void(0);"> Terms.</a>
                            </div>
                        </div>
                        <button class="btn btn-primary login-btn" type="submit">Create Account</button>
                        <div class="account-footer text-center mt-3">
                            Already have an account? <a class="forgot-link mb-0" href="login">Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
