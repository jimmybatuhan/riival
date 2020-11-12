@extends('layouts.app')
@section('content')
<div class="ge-main-background">
    <div class="container p-3">
        <div class="row">
            <div class="col-2">
                <img src="/img/logo.png" class="img-responsive w-100" />
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <div class="account-content">
                        <div class="account-box border-0 bg-transparent">
                            <div class="d-block w-100">
                                <div class="row">
                                    <div class="col-6 pr-1">
                                        <button class="btn btn-sm btn-default btn-block ge-button-secondary">
                                            Facebook
                                        </button>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <button class="btn btn-sm btn-default btn-block ge-button-secondary">
                                            Google
                                        </button>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-6 pr-1">
                                        <button class="btn btn-sm btn-default btn-block ge-button-secondary">
                                            Twitch
                                        </button>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <button class="btn btn-sm btn-default btn-block ge-button-secondary">
                                            Discord
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-block w-100 p-0 my-4">
                                <div class="center-separator">OR</div>
                            </div>
                            <div class="login-right">
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
                                                <input
                                                    autofocus=""
                                                    placeholder="First Name"
                                                    class="ge-input-text bg-transparent form-control"
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
                                                <input
                                                    placeholder="Last Name"
                                                    class="ge-input-text bg-transparent form-control"
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
                                        <input
                                            id="email"
                                            type="email"
                                            class="ge-input-text bg-transparent form-control"
                                            name="email"
                                            required
                                            placeholder="Email Address"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                            id="password"
                                            type="password"
                                            class="ge-input-text bg-transparent form-control"
                                            name="password"
                                            required
                                            placeholder="Password"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="read_and_agreed_terms_and_conditions"
                                                id="agree_checkbox_user">
                                            <label class="text-white custom-control-label" for="agree_checkbox_user">I agree to the</label>
                                                <a
                                                    class="font-weight-bold ge-text-color"
                                                    tabindex="-1"
                                                    href="javascript:void(0);"
                                                >
                                                    Privacy Policy
                                                </a> <span class="text-white">&amp;</span>
                                                <a tabindex="-1" class="font-weight-bold ge-text-color" href="javascript:void(0);"> Terms.</a>
                                        </div>
                                    </div>
                                    <button class="btn ge-button-primary btn-block" type="submit">Sign Up</button>
                                    <div class="text-white account-footer text-center mt-3">
                                        Already have an account?
                                        <a class="ge-text-color font-weight-bold forgot-link mb-0" href="login">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection