@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/simplemde/simplemde.min.css') }}">
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Blogs</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Blog</li>
                    <li class="breadcrumb-item active" aria-current="page">View</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<input id="file-upload" type="file" style="display: none" onchange="onUploadImage()" accept="image/jpeg,image/gif,image/png">

<!-- Page Content -->
<div class="content">
    <!-- Elements -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">View Blog Info</h3>
        </div>
        <div class="block-content">
            <form id="form-blog-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-6">
                        <div class="form-group title">
                            <label for="example-text-input">Title</label>
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $blog->title }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group headline">
                            <label for="example-text-input">Headline</label>
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $blog->headline }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <div class="form-group description">
                            <label for="example-text-input">Description</label>
                            <!-- SimpleMDE Container -->
                            <div style="display:none;">
                                <textarea id="simplemde"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group main-image">
                            <label for="example-text-input">Main Image</label>
                            <div class="input-images-wrapper">
                                <div class="uploaded-images"></div>
                                <button type="button" class="plus-button" onclick="onOpenFileDialog('main')">+</button>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-12">
                        <button class="btn btn-primary mt-3" type="submit">Save Information</button>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
    <!-- END Elements -->
</div>
<!-- END Page Content -->
@endsection

@section('js')
<script src="{{ asset('admin-assets/js/plugins/simplemde/simplemde.min.js') }}"></script>
<script>
var simplemde = new SimpleMDE({ element: $('#simplemde')[0] });
$('#form-blog-info .description').append(simplemde.markdown(`<?php echo $blog->description; ?>`));

var asset_url = "{{ asset('') }}";
var admin_url = "{{ url('') }}" + '/admin';

var main_image = "{{ $blog->image_s3 }}";

onInitialize();

function onInitialize() {
    // Initialize main image
    $("#form-blog-info .main-image .plus-button").hide();
    $('#form-blog-info .main-image .uploaded-images').append(`
        <div class="uploaded-image">
            <img src="${main_image}" width="100%" height="100%" />
        </div>`);
}
</script>
@endsection
