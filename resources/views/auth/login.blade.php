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
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    @error('email')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="form-group">
                                        <input
                                            name="email"
                                            type="text"
                                            class="ge-input-text bg-transparent form-control"
                                            placeholder="Email Address"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input
                                            name="password"
                                            type="password"
                                            class="ge-input-text bg-transparent form-control pass-input"
                                            placeholder="Password"
                                        >
                                    </div>
                                    <div class="text-right">
                                        <a
                                            class="ge-text-color font-weight-bold forgot-link"
                                            href="forgot-password"
                                        >
                                            Forgot Password ?
                                        </a>
                                    </div>
                                    <button class="btn ge-button-primary w-100" type="submit">Login</button>
                                    <div class="text-white dont-have">Don’t have an account?
                                        <a
                                            class="ge-text-color font-weight-bold"
                                            href="{{ route('register') }}"
                                        >
                                            Register
                                            </a>
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