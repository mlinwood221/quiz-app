@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/simplemde/simplemde.min.css') }}">
<style>
.input-images-wrapper {
    display: flex;
    margin-top: 20px;
    margin-bottom: 20px;
}
.input-images-wrapper .uploaded-images {
    display: flex;
    flex-wrap: wrap;
}
.input-images-wrapper .uploaded-images .uploaded-image {
    position: relative;
    height: 100px;
    width: 100px;
    border-radius: 5px;
    margin-right: 20px;
    margin-bottom: 20px;
}
.input-images-wrapper .uploaded-images .uploaded-image.uploading::after {
    content: "";
    top: 37px;
    left: 37px;
    position: absolute;
    animation: rotate 1s linear infinite;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    border: 4px solid rgba(29, 161, 242, 0.2);
    border-left-color: rgb(29, 161, 242);
    background: transparent;
}
.input-images-wrapper .uploaded-images .uploaded-image .remove-image {
    position: absolute;
    right: 5px;
    top: 5px;
}
.input-images-wrapper .plus-button {
    background: none;
    height: 100px;
    width: 100px;
    font-size: 30px;
    border-radius: 5px;
    border-style: dashed;
    border-width: 1px;
}
.input-images-wrapper .plus-button:hover {
    color: #0665d0;
    border-color: #0665d0;
}
.input-images-wrapper .plus-button:focus {
    outline: none;
}

@keyframes rotate { 
    0% { transform: rotate(0deg); }
    100% { transform:rotate(360deg); } 
}
</style>
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
                    <li class="breadcrumb-item active" aria-current="page">{{ $action == 'add' ? 'Add' : 'Edit' }}</li>
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
            <h3 class="block-title">{{ $action == 'add' ? 'Add' : 'Edit' }} Blog Info</h3>
        </div>
        <div class="block-content">
            <form id="form-blog-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();onSubmitForm();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-6">
                        <div class="form-group title">
                            <label for="example-text-input">Title</label>
                            @if ($action == 'add')
                            <input type="text" class="form-control" placeholder="" maxlength="255">
                            @else
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $blog->title }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group headline">
                            <label for="example-text-input">Headline</label>
                            @if ($action == 'add')
                            <input type="text" class="form-control" placeholder="" maxlength="255">
                            @else
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $blog->headline }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group description">
                            <label for="example-text-input">Description</label>
                            <!-- SimpleMDE Container -->
                            <textarea id="simplemde"></textarea>
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
                    <div class="col-md-12">
                        <button class="btn btn-primary mt-3" type="submit">Save Information</button>
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
<script src="{{ asset('admin-assets/js/plugins/simplemde/simplemde.min.js') }}"></script>
<script>
var simplemde = new SimpleMDE({ element: $("#simplemde")[0] });

var aws_link_prefix = "{{ env('AWS_LINK_PREFIX') }}";
var asset_url = "{{ asset('') }}";
var admin_url = "{{ url('') }}" + '/admin';

@if ($action == 'add')
    var main_image = '';
@else
    var main_image = "{{ $blog->image }}";
    simplemde.value(`<?php echo $blog->description; ?>`);
@endif

@if ($action == 'edit')
    onInitialize();
@endif

function onInitialize() {
    // Initialize main image
    $("#form-blog-info .main-image .plus-button").hide();
    $('#form-blog-info .main-image .uploaded-images').append(`
        <div class="uploaded-image">
            <img src="${aws_link_prefix}${main_image}" width="100%" height="100%" />
            <a href="javascript:void(0);" class="remove-image" onclick="onRemoveImage(this)"><i class="si si-trash"></i></a>
        </div>`);
}

function onOpenFileDialog(field) {
    $("#file-upload").attr('onchange', `onUploadImage("${field}")`);
    $("#file-upload").click();
}

function onUploadImage(field) {
    var files = $("#file-upload")[0].files;
    if (files.length) {
        var new_image_wrapper = $(`<div class="uploaded-image"></div>`);
        if (field == 'main') {
            $("#form-blog-info .main-image .uploaded-images").append(new_image_wrapper);
        } else {
            $("#form-blog-info .gallery-images .uploaded-images").append(new_image_wrapper);
        }
        new_image_wrapper.addClass('uploading');

        var fd = new FormData();
        fd.append('image', files[0]);

        $.ajax({
            url: '/admin/upload_image',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response) {
                if (field == 'main') {
                    main_image = response;
                    $("#form-blog-info .main-image .plus-button").hide();
                } else {
                    gallery_images.push(response);
                    new_image_wrapper.attr('data-file', response);
                }
                new_image_wrapper.removeClass('uploading');
                new_image_wrapper.append('<img src="' + aws_link_prefix + response + '" width="100%" height="100%" />');
                new_image_wrapper.append('<a href="javascript:void(0);" class="remove-image" onclick="onRemoveImage(this)"><i class="si si-trash"></i></a>');
            },
            error: function(err) {
                new_image_wrapper.remove();
            }
        });
    }
}

function onRemoveImage(e) {
    var wrapper = $(e).closest('.form-group');
    var file_url = '';

    if (wrapper.hasClass('main-image')) {
        file_url = main_image;
        main_image = '';
        $(e).closest('.uploaded-image').remove();
        wrapper.find('.plus-button').show();
    } else {
        var removed_file = $(e).closest('.uploaded-image').attr('data-file');
        file_url = removed_file;
        $(e).closest('.uploaded-image').remove();
        gallery_images.splice(gallery_images.indexOf(removed_file), 1);
    }
    
    $.ajax({
        url: '/admin/remove_image',
        type: 'post',
        data: { url: file_url },
        success: function(response) { },
        error: function(err) { console.log(err); }
    });
}

function onSubmitForm() {
    var form = $('#form-blog-info');

    var isError = false;
    var title = form.find('.form-group.title input').val();
    var headline = form.find('.form-group.headline input').val();
    var description = simplemde.value();

    form.find('.invalid-feedback').remove();
    if (!title) {
        form.find('.form-group.title').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!headline) {
        form.find('.form-group.headline').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!description) {
        form.find('.form-group.description').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!main_image) {
        form.find('.form-group.main-image').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }

    if (isError)
        return false;

    var fd = new FormData();
    fd.append('action', "{{ $action }}");
    @if ($action == 'edit')
        fd.append('blog_id', "{{ $blog->id }}");
    @endif
    fd.append('title', title);
    fd.append('headline', headline);
    fd.append('description', description);
    fd.append('main_image', main_image);

    $.ajax({
        url: '/admin/blog/create_or_edit_action',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var response = JSON.parse(response);
            if (response['result'] == 'success') {
                window.location.href = admin_url + '/blog/all';
            }  else {
                if (response['reason'] == 'slug') {
                    form.find('.form-group.title').append('<div class="invalid-feedback" style="display: block;">This title has already been used.</div>');
                } else {
                    console.log(response);
                }
            }
        },
        error: function(err) {
            console.log(err);
        }
    });
}
</script>
@endsection
