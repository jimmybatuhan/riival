@extends('layouts.app')
@section('content')
<!-- Page Content -->
<div class="bg-pattern-style">
    <div class="content">
        <!-- Login Tab Content -->
        <div class="account-content">
            <div class="account-box">
                <div class="login-right">
                    <div class="login-header">
                        <h3>Login <span>Mentoring</span></h3>
                        <p class="text-muted">Access to our dashboard</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @error('email')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-group">
                            <label class="form-control-label">Email Address</label>
                            <input name="email" type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Password</label>
                            <div class="pass-group">
                                <input name="password" type="password" class="form-control pass-input">
                                <span class="fas fa-eye toggle-password"></span>
                            </div>
                        </div>
                        <div class="text-right">
                            <a class="forgot-link" href="forgot-password">Forgot Password ?</a>
                        </div>
                        <button class="btn btn-primary login-btn" type="submit">Login</button>
                        <div class="text-center dont-have">Don’t have an account? <a href="{{ route('register') }}">Register</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection