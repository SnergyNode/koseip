<?php
$styleInject = ".transparent-header #header {background-color: #303030 !important;}";
?>
@extends('layouts.main')

@section('content')

    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>

    <div class="container mb-5" style="min-height: 380px">
        <div class="row">
            <div class="col-xl-5 offset-xl-3">


                <div class="login-register-page">
                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>Admin Login</h3>
                    </div>

                    <!-- Form -->
                    <form method="post" id="login-form" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="input-with-icon-left {{ $errors->has('access') ? ' has-error' : '' }}">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="text" class="input-text with-border" name="access" id="emailaddress" placeholder="Email Address" required autocomplete="off" value="{{ old('access') }}" >

                            @if ($errors->has('access'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('access') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="secret" id="password" placeholder="Password" required />
                        </div>
                        <a href="#" class="forgot-password">Forgot Password?</a>
                    </form>

                    <!-- Button -->
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>


                </div>

            </div>
        </div>
    </div>

@endsection