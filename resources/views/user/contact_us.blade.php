@extends('layouts.app')

@section('css')
<style>
    .contact-us-page {
        max-width: 1000px;
        margin: 0 auto;
        padding: 80px 0px;
    }
    .contact-us-page a {
        text-decoration: underline;
    }
    .contact-us-page .page-title {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 40px;
    }
    .contact-us-page .row > div:nth-child(2) {
        margin-top: 30px;
        padding-left: 30px;
    }
    .contact-us-page form.form-contact-us {
        max-width: 600px;
        margin: 0 auto;
    }
    .contact-us-page form.form-contact-us .form-group {
        margin-bottom: 20px;
    }
    .contact-us-page form.form-contact-us button {
        width: 100%;
    }
    @media screen and (max-width: 767px) {
        .contact-us-page .row > div:nth-child(2) {
            padding-left: 12px;
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="contact-us-page">
        <div class="page-title">Contact Us</div>
        @if (\Session::has('submit_result'))
            @if (\Session::get('submit_result') == 'success')
            <div class="alert alert-success">Form submitted successfully.</div>
            @else
            <div class="alert alert-danger">Failed to submit form.</div>
            @endif
        @endif
        <div class="row">
            <div class="col-md-6">
                <form class="form-contact-us" action="/submit-contact" method="post" onsubmit="onFormSubmit()">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">What can we do for you?</label>
                        <textarea class="form-control" rows="8" name="content" required>{{ old('content') }}</textarea>
                    </div>
                    <button type="submit" class="btn-main">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <p>Do you have an awesome new quiz idea that you would like to see added to QuizzlyBears? Found a bug on our website that you would like to report, or an issue with your account? Maybe even a complaint or something you aren't happy about?</p>
                <p>Please feel free to send an email to <b>contact@quizzlybears.com</b></p>
                <p>For any business related questions, contact <b>business@quizzlybears.com</b></p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function onFormSubmit()
    {
        $(".form-contact-us button[type=submit]").html(`<div class="spinner-border" role="status" style="color: white;width:20px;height:20px;"><span class="sr-only">Loading...</span></div>`);
    }
</script>
@endsection