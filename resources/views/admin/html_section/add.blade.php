@extends('admin.layouts.app')

@section('css')
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">HTML Sections</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Html Section</li>
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
            <h3 class="block-title">{{ $action == 'add' ? 'Add' : 'Edit' }} Html Section Info</h3>
        </div>
        <div class="block-content">
            <form id="form-html-section-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();onSubmitForm();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-6">
                        <div class="form-group name">
                            <label for="example-text-input">Author</label>
                            @php
                            $arr_section_names = [
                                'QUIZ_START_HEADLINE',
                                'QUIZ_START_IMAGE',
                                'QUIZ_START_BUTTON',
                                'QUIZ_QUESTION_PROGRESS',
                                'QUIZ_QUESTION_IMAGE',
                                'WORDSEARCH_ABOVE',
                                'WORDSEARCH_BELOW',
                                'GDPR_CONSENT',
                                'GOOGLE_VERIFICATION',
                                'GOOGLE_ADSENSE',
                                'GOOGLE_ANALYTICS',
                                'TRAFFIC_COP',
                                'ANTI_ADBLOCK'
                            ];
                            @endphp
                            <select class="form-control">
                                @foreach ($arr_section_names as $name)
                                    @if ($action == 'add')
                                    <option value="{{ $name }}">{{ $name }}</option>
                                    @else
                                    <option value="{{ $name }}" {{ $html_section->name == $name ? 'selected' : '' }}>{{ $name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-12">
                        <div class="form-group html">
                            <label for="example-text-input">HTML</label>
                            <!-- SimpleMDE Container -->
                            @if ($action == 'add')
                            <textarea class="form-control" name="description" rows="10"></textarea>
                            @else
                            <textarea class="form-control" name="description" rows="10">{{ $html_section->html }}</textarea>
                            @endif
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
<script>
var admin_url = "{{ url('') }}" + '/admin';

function onSubmitForm() {
    var form = $('#form-html-section-info');

    var isError = false;
    var name = form.find('.form-group.name select').val();
    var html = form.find('.form-group.html textarea').val();

    form.find('.invalid-feedback').remove();
    if (!name) {
        form.find('.form-group.name').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }
    if (!html) {
        form.find('.form-group.html').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
        isError = true;
    }

    if (isError)
        return false;

    var fd = new FormData();
    fd.append('action', "{{ $action }}");
    @if ($action == 'edit')
        fd.append('html_section_id', "{{ $html_section->id }}");
    @endif
    fd.append('name', name);
    fd.append('html', html);

    $.ajax({
        url: '/admin/html-section/create_or_edit_action',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var response = JSON.parse(response);
            if (response['result'] == 'success') {
                window.location.href = admin_url + '/html-section/all';
            }  else {
                console.log(response);
            }
        },
        error: function(err) {
            console.log(err);
        }
    });
}
</script>
@endsection
