@extends('admin.layouts.app')

@section('css')
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
            <h3 class="block-title">View Quiz Info</h3>
        </div>
        <div class="block-content">
            <form id="form-quiz-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-6">
                        <div class="form-group category">
                            <label for="example-text-input">Category</label>
                            <select class="form-control" disabled>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == $quiz->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group type">
                            <label for="example-text-input">Type</label>
                            <select class="form-control" disabled>
                                <option value="quiz" {{ $quiz->type == 'quiz' ? 'selected' : '' }}>Quiz</option>
                                <option value="wordsearch" {{ $quiz->type == 'wordsearch' ? 'selected' : '' }}>Wordsearch</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group title">
                            <label for="example-text-input">Title</label>
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $quiz->title }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group min-score">
                            <label for="example-text-input">Min score</label>
                            <input type="number" class="form-control" min="0" max="100" value="{{ $quiz->min_score }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group headline">
                            <label for="example-text-input">Headline</label>
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $quiz->headline }}" disabled>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @if ($quiz->type == 'quiz')
                        <div class="form-group description">
                            <label for="example-text-input">Description</label>
                            <!-- SimpleMDE Container -->
                            <p style="font-size: 14px;"><?php echo $quiz->description; ?></p>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="form-group users-taking">
                            <label for="example-text-input">Users taking</label>
                            <input type="number" class="form-control" min="0" value="{{ $quiz->users_taking }}" disabled>
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
<script src="{{ asset('admin-assets/js/plugins/ckeditor/ckeditor.js') }}"></script>

<script>
var asset_url = "{{ asset('') }}";
var admin_url = "{{ url('') }}" + '/admin';

var main_image = "{{ $quiz->image_s3 }}";

onInitialize();

function onInitialize() {
    // Initialize main image
    $("#form-quiz-info .main-image .plus-button").hide();
    $('#form-quiz-info .main-image .uploaded-images').append(`
        <div class="uploaded-image">
            <img src="${main_image}" width="100%" height="100%" />
        </div>`);
}
</script>
@endsection
