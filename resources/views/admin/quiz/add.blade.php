@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/multiselect/bootstrap-multiselect.min.css') }}">
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
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Quizzes</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Quiz</li>
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
            <h3 class="block-title">{{ $action == 'add' ? 'Add' : 'Edit' }} Quiz Info</h3>
        </div>
        <div class="block-content">
            <form id="form-quiz-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();onSubmitForm();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-6">
                        <div class="form-group author">
                            <label for="example-text-input">Author</label>
                            <select class="form-control">
                                @foreach ($authors as $author)
                                    @if ($action == 'add')
                                    <option value="{{ $author->id }}">
                                        <!-- <img src="{{ $author->image_s3 }}" width="50px" /> -->
                                        {{ ucfirst($author->firstname) . ' ' . ucfirst($author->lastname) }}
                                    </option>
                                    @else
                                    <option value="{{ $author->id }}" {{ $quiz->author_id == $author->id ? 'selected' : '' }}>
                                        <!-- <img src="{{ $author->image_s3 }}" width="50px" /> -->
                                        {{ ucfirst($author->firstname) . ' ' . ucfirst($author->lastname) }}
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group category">
                            <label for="example-text-input">Category</label>
                            @php 
                            $arr_quiz_cat_ids = array();
                            if ($action == 'edit') {
                                $arr_quiz_cat_ids = explode(',', $quiz->category_ids);
                            }
                            @endphp
                            <select class="form-control" multiple>
                                @foreach ($categories as $category)
                                    @if ($action == 'add')
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @else
                                    <option value="{{ $category->id }}" {{ in_array($category->id, $arr_quiz_cat_ids) ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group type">
                            <label for="example-text-input">Type</label>
                            <select class="form-control" onchange="onChangeQuizType()">
                                @if ($action == 'add')
                                <option value="quiz">Quiz</option>
                                <option value="wordsearch">Wordsearch</option>
                                @else
                                <option value="quiz" {{ $quiz->type == 'quiz' ? 'selected' : '' }}>Quiz</option>
                                <option value="wordsearch" {{ $quiz->type == 'wordsearch' ? 'selected' : '' }}>Wordsearch</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group title">
                            <label for="example-text-input">Title</label>
                            @if ($action == 'add')
                            <input type="text" class="form-control" placeholder="" maxlength="255">
                            @else
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $quiz->title }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group min-score">
                            <label for="example-text-input">Min score</label>
                            @if ($action == 'add')
                            <input type="number" class="form-control" min="0" max="100" value="0">
                            @else
                            <input type="number" class="form-control" min="0" max="100" value="{{ $quiz->min_score }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group headline">
                            <label for="example-text-input">Headline</label>
                            @if ($action == 'add')
                            <input type="text" class="form-control" placeholder="" maxlength="255">
                            @else
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $quiz->headline }}">
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group description" style="display: {{ ($action == 'add' || $quiz->type == 'quiz') ? 'block' : 'none' }}">
                            <label for="example-text-input">Description</label>
                            <!-- SimpleMDE Container -->
                            @if ($action == 'add')
                            <textarea class="form-control" name="description" rows="6"></textarea>
                            @else
                            <textarea class="form-control" name="description" rows="6">{{ $quiz->description }}</textarea>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group users-taking">
                            <label for="example-text-input">Users taking</label>
                            @if ($action == 'add')
                            <input type="number" class="form-control" min="0" value="0">
                            @else
                            <input type="number" class="form-control" min="0" value="{{ $quiz->users_taking }}">
                            @endif
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
<script src="{{ asset('admin-assets/js/plugins/multiselect/bootstrap-multiselect.min.js') }}"></script>
<script>
$('#form-quiz-info .form-group.category select').multiselect({
    buttonWidth: '100%',
    numberDisplayed: 4
});

var aws_link_prefix = "{{ env('AWS_LINK_PREFIX') }}";
var asset_url = "{{ asset('') }}";
var admin_url = "{{ url('') }}" + '/admin';

@if ($action == 'add')
    var main_image = '';
@else
    var main_image = "{{ $quiz->image }}";
@endif

@if ($action == 'edit')
    onInitialize();
@endif

function onInitialize() {
    // Initialize main image
    $("#form-quiz-info .main-image .plus-button").hide();
    $('#form-quiz-info .main-image .uploaded-images').append(`
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
            $("#form-quiz-info .main-image .uploaded-images").append(new_image_wrapper);
        } else {
            $("#form-quiz-info .gallery-images .uploaded-images").append(new_image_wrapper);
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
                    $("#form-quiz-info .main-image .plus-button").hide();
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

function onChangeQuizType() {
    var form = $('#form-quiz-info');
    var type = form.find('.form-group.type select').val();
    if (type == 'quiz') {
        form.find('.form-group.description').show();
    } else {
        form.find('.form-group.description').hide();
    }
}

function onSubmitForm() {
    var form = $('#form-quiz-info');

    var isError = false;
    var author_id = form.find('.form-group.author select').val();
    var category_ids = form.find('.form-group.category select').val();
    var title = form.find('.form-group.title input').val();
    var type = form.find('.form-group.type select').val();
    var min_score = form.find('.form-group.min-score input').val();
    var headline = form.find('.form-group.headline input').val();
    var description = form.find('.form-group.description textarea').val();
    var users_taking = form.find('.form-group.users-taking input').val();

    form.find('.invalid-feedback').remove();
    if (!author_id) {
        form.find('.form-group.author').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!category_ids.length) {
        form.find('.form-group.category').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!title) {
        form.find('.form-group.title').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!type) {
        form.find('.form-group.type').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (min_score < 0 || min_score > 100) {
        form.find('.form-group.min-score').append('<div class="invalid-feedback" style="display: block;">This field must be in range 0 to 100.</div>');
        isError = true;
    }
    if (!headline) {
        form.find('.form-group.headline').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (type == 'quiz' && !description) {
        form.find('.form-group.description').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!users_taking) {
        form.find('.form-group.users-taking').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
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
        fd.append('quiz_id', "{{ $quiz->id }}");
    @endif
    fd.append('author_id', author_id);
    fd.append('category_ids', JSON.stringify(category_ids));
    fd.append('title', title);
    fd.append('type', type);
    fd.append('min_score', min_score);
    fd.append('headline', headline);
    if (type == 'quiz')
        fd.append('description', description);
    fd.append('users_taking', users_taking);
    fd.append('main_image', main_image);

    $.ajax({
        url: '/admin/quiz/create_or_edit_action',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var response = JSON.parse(response);
            if (response['result'] == 'success') {
                window.location.href = admin_url + '/quiz/all';
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
