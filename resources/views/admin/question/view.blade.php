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
            <h3 class="block-title">View Question Info</h3>
        </div>
        <div class="block-content">
            <form id="form-question-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-12">
                        <div class="form-group question">
                            <label for="example-text-input">Question</label>
                            <textarea type="text" class="form-control" placeholder="" maxlength="255" rows="3" disabled>{{ $question->question }}</textarea>
                        </div>
                    </div>
                    @if ($quiz->type == 'quiz')
                    <div class="col-md-12">
                        <div class="form-group fact">
                            <label for="example-text-input">Fact</label>
                            <textarea type="text" class="form-control" placeholder="" maxlength="255" rows="2" disabled>{{ $question->fact }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group choices">
                            <label for="example-text-input">Choices (Mark on answer among choices)</label>
                            <div class="btn-group">
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
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $question->answer }}" disabled>
                        </div>
                    </div>
                    @endif
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
var asset_url = "{{ asset('') }}";
var admin_url = "{{ url('') }}" + '/admin';

@if ($quiz->type == 'quiz')
    var main_image = "{{ $question->image_s3 }}";
    var answer = "{{ $question->answer }}";
    var choices = [];
    @foreach ($question->choices as $choice)
        choices.push("{{ $choice }}");
    @endforeach

    onInitialize();

    function onInitialize() {
        // Initialize main image
        $("#form-question-info .main-image .plus-button").hide();
        $('#form-question-info .main-image .uploaded-images').append(`
            <div class="uploaded-image">
                <img src="${main_image}" width="100%" height="100%" />
            </div>`);

        for (var i = choices.length - 1; i >= 0; i --) {
            if (choices[i] == answer)
                $("#form-question-info .form-group.choices .btn-group").prepend(`<button type="button" class="btn-choice active">${choices[i]}</button>`);
            else
                $("#form-question-info .form-group.choices .btn-group").prepend(`<button type="button" class="btn-choice">${choices[i]}</button>`);
        }
    }
@endif
</script>
@endsection
