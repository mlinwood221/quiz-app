@extends('layouts.app')

@section('css')
<style>
    .no-bottom {
        padding: 0px !important;
    }
    header {
        background: none;
        box-shadow: none;
    }
    #mainmenu li > a {
        color: white;
    }
    .reset-password-page .forgot-password {
        float: right;
        margin-top: -15px;
        margin-bottom: 20px;
    }
</style>
@endsection

@section('content')
<div class="no-bottom no-top reset-password-page" id="content">
    <div id="top"></div>
    
    <section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url({{ asset('user-assets/images/background/subheader.jpg') }}) top" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-4 wow fadeIn" data-wow-delay=".5s">
                            <div class="box-rounded padding40" data-bgcolor="#ffffff">
                                <h3 class="mb10">{{ __('Reset Password') }}</h3>
                                <p>Enter details below.</p>
                                <form class="form-border" method="post" action="{{ route('password.request') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="field-set mb-3">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="field-set">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="field-set">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password confirmation" required>
                                    </div>

                                    <div class="field-set">
                                        <input type='submit' value="{{ __('Reset Password') }}" class="btn btn-main btn-fullwidth color-2">
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <!-- <div class="spacer-single"></div> -->

                                <!-- social icons -->
                                <!-- <ul class="list s3">
                                    <li>Login with:</li>
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Google</a></li>
                                </ul> -->
                                <!-- social icons close -->
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>		
    
</div>
<!-- content close -->
@endsection