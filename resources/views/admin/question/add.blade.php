@extends('admin.layouts.app')

@section('css')
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

#form-question-info .form-group.choices .btn-group {
    display: flex;
    flex-wrap: wrap;
    margin-top: 10px;
}
#form-question-info .form-group.choices .btn-group button {
    margin-right: 15px;
    margin-bottom: 10px;
}
#form-question-info .form-group.choices .btn-group button:focus {
    outline: none;
}
#form-question-info .form-group.choices .btn-group .btn-choice {
    border: none;
    border-radius: 5px;
    box-shadow: 1px 2px 5px rgb(0 0 0 / 50%);
    padding: 10px 20px;
}
#form-question-info .form-group.choices .btn-group .btn-choice:hover {
    box-shadow: 3px 3px 5px rgb(0 0 0 / 50%);
}
#form-question-info .form-group.choices .btn-group .btn-choice.active {
    background: #0665d0;
    color: white;
}
#form-question-info .form-group.choices .btn-group .btn-plus {
    background: transparent;
    border: none;
    font-size: 25px;
    border-style: dashed;
    border-width: 1px;
    border-radius: 5px;
    width: 100px;
    height: 100px;
}
#form-question-info .form-group.choices .btn-group .btn-plus:hover {
    color: #0665d0;
}
</style>
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Questions - <a href="{{ url('admin/quiz/' . $quiz->id . '/all') }}">{{ $quiz->title }}</a></h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Question</li>
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
            <h3 class="block-title">{{ $action == 'add' ? 'Add' : 'Edit' }} Question Info</h3>
        </div>
        <div class="block-content">
            <form id="form-question-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();onSubmitForm();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-12">
                        <div class="form-group question">
                            <label for="example-text-input">Question</label>
                            @if ($action == 'add')
                            <textarea type="text" class="form-control" placeholder="" maxlength="255" rows="3"></textarea>
                            @else
                            <textarea type="text" class="form-control" placeholder="" maxlength="255" rows="3">{{ $question->question }}</textarea>
                            @endif
                        </div>
                    </div>
                    @if ($quiz->type == 'quiz')
                    <div class="col-md-12">
                        <div class="form-group fact">
                            <label for="example-text-input">Fact</label>
                            @if ($action == 'add')
                            <textarea type="text" class="form-control" placeholder="" maxlength="255" rows="2"></textarea>
                            @else
                            <textarea type="text" class="form-control" placeholder="" maxlength="255" rows="2">{{ $question->fact }}</textarea>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group choices">
                            <label for="example-text-input">Choices (Mark on answer among choices)</label>
                            <div class="btn-group">
                                <button type="button" class="btn-plus" onclick="onAddChoice()">+</button>
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
                    @else                    
                    <div class="col-md-6">
                        <div class="form-group answer">
                            <label for="example-text-input">Answer</label>
                            @if ($action == 'add')
                            <input type="text" class="form-control" placeholder="" maxlength="255">
                            @else
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $question->answer }}">
                            @endif
                        </div>
                    </div>
                    @endif
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

<div class="modal" id="modal-add-choice" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add Choice</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content modal-body">
                    <input class="form-control" name="choice" />
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" onclick="onAddChoiceAction()">Done</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
var aws_link_prefix = "{{ env('AWS_LINK_PREFIX') }}";
var asset_url = "{{ asset('') }}";
var admin_url = "{{ url('') }}" + '/admin';

@if ($action == 'add')
    var main_image = '';
    var answer = '';
    var choices = [];
@else
    var main_image = "{{ $question->image }}";
    var answer = "{{ $question->answer }}";
    var choices = [];
    @foreach ($question->choices as $choice)
        choices.push("{{ $choice }}");
    @endforeach
@endif

@if ($action == 'edit')
    onInitialize();
@endif

function onInitialize() {
    // Initialize main image
    $("#form-question-info .main-image .plus-button").hide();
    $('#form-question-info .main-image .uploaded-images').append(`
        <div class="uploaded-image">
            <img src="${aws_link_prefix}${main_image}" width="100%" height="100%" />
            <a href="javascript:void(0);" class="remove-image" onclick="onRemoveImage(this)"><i class="si si-trash"></i></a>
        </div>`);

    for (var i = choices.length - 1; i >= 0; i --) {
        if (choices[i] == answer)
            $("#form-question-info .form-group.choices .btn-group").prepend(`<button type="button" class="btn-choice active" onclick="onSelectAnswer(this)">${choices[i]}</button>`);
        else
            $("#form-question-info .form-group.choices .btn-group").prepend(`<button type="button" class="btn-choice" onclick="onSelectAnswer(this)">${choices[i]}</button>`);
    }
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
            $("#form-question-info .main-image .uploaded-images").append(new_image_wrapper);
        } else {
            $("#form-question-info .gallery-images .uploaded-images").append(new_image_wrapper);
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
                    $("#form-question-info .main-image .plus-button").hide();
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
    var form = $('#form-question-info');

    var isError = false;
    var question = form.find('.form-group.question textarea').val();
    var fact = form.find('.form-group.fact textarea').val();
    var quiz_type = "{{ $quiz->type }}";
    
    form.find('.invalid-feedback').remove();
    if (!question) {
        form.find('.form-group.question').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (quiz_type == 'quiz') {
        if (!main_image) {
            form.find('.form-group.main-image').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
            isError = true;
        }
        if (choices.length == 0 || answer == '') {
            form.find('.form-group.choices').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
            isError = true;
        }
    } else {
        answer = form.find('.form-group.answer input').val();
        if (!answer) {
            form.find('.form-group.answer').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
            isError = true;
        }
    }

    if (isError)
        return false;

    var fd = new FormData();
    fd.append('action', "{{ $action }}");
    @if ($action == 'edit')
        fd.append('question_id', "{{ $question->id }}");
    @endif
    fd.append('question', question);
    if (quiz_type == 'quiz') {
        fd.append('fact', fact);
        fd.append('main_image', main_image);
        fd.append('choices', JSON.stringify(choices));
        fd.append('answer', answer);
    } else {
        fd.append('answer', answer);
    }

    $.ajax({
        url: '/admin/quiz/' + "{{ $quiz->id }}" + '/create_or_edit_action',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var response = JSON.parse(response);
            if (response['result'] == 'success') {
                window.location.href = admin_url + '/quiz/' + "{{ $quiz->id }}" + '/all';
            }  else {
                console.log(response);
            }
        },
        error: function(err) {
            console.log(err);
        }
    });
}

function onSelectAnswer(e) {
    $("#form-question-info .form-group.choices .btn-group .btn-choice.active").removeClass('active');
    $(e).addClass('active');
    answer = $(e).html();
}

function onAddChoice() {
    $('#modal-add-choice').modal('show');
}

function onAddChoiceAction() {
    var choice = $('#modal-add-choice input[name=choice]').val();
    if (!choice) {
        form.find('#modal-add-choice .modal-body').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        return;
    } else {
        $(`<button type="button" class="btn-choice" onclick="onSelectAnswer(this)">${choice}</button>`).insertBefore($("#form-question-info .form-group.choices .btn-group .btn-plus"));
        $('#modal-add-choice input[name=choice]').val('');
        choices.push(choice);
        $('#modal-add-choice').modal('hide');
    }
}
</script>
@endsection
