@extends('admin.layouts.app')

@section('css')
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Ads</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Ads</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<div class="content">
    <!-- Elements -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Ad Info</h3>
        </div>
        <div class="block-content">
            @if (\Session::has('message'))
            <div class="alert alert-primary">{{ \Session::get('message') }}</div>
            @endif
            <form class="form-update-ads" action="/admin/ads/edit_action" method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="content" rows="15">{{ $ad ? $ad->content : '' }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection
