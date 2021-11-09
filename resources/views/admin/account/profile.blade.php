@extends('admin.layouts.app')

@section('css')
@endsection

@section('content')
<!-- Hero -->
<div class="bg-image" style="background-image: url('<?php echo asset('admin-assets/media/various/bg_dashboard.jpg'); ?>');">
    <div class="bg-white-90">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Profile</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Account</li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Elements -->
    <div class="block block-rounded block-bordered">
        <div class="block-content">
            <form action="profile/save-settings" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Basic Elements -->
                <h2 class="content-heading pt-0">Profile</h2>
                <div class="row push">
                    <div class="col-md-8 offset-md-2">
                        <div class="form-group">
                            @if (\Session::has('message'))
                            <div class="alert alert-success" role="alert">
                                <p class="mb-0">{{ \Session::get('message') }}</p>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" name="name" placeholder="Your name" value="{{ old('name') ? old('name') : Auth::guard('admin')->user()->name }}">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email" placeholder="Your email" value="{{ old('email') ? old('email') : Auth::guard('admin')->user()->email }}">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Save settings</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Elements -->
</div>
<!-- END Page Content -->
@endsection

@section('js')
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('.alert-success').hide();
    }, 3000);
});
</script>
@endsection