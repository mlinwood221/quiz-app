@extends('admin.layouts.app')

@section('css')
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Categories</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Category</li>
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
            <h3 class="block-title">{{ $action == 'add' ? 'Add' : 'Edit' }} Category</h3>
        </div>
        <div class="block-content">
            <form id="form-category-info" action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault();onSubmitForm();">
                <!-- Basic Elements -->
                <div class="row push">
                    <div class="col-md-6">
                        <div class="form-group name">
                            <label for="example-text-input">Name</label>
                            @if ($action == 'add')
                            <input type="text" class="form-control" placeholder="" maxlength="255">
                            @else
                            <input type="text" class="form-control" placeholder="" maxlength="255" value="{{ $category->name }}">
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
var asset_url = "{{ asset('') }}";
var admin_url = "{{ url('') }}" + '/admin';

function onSubmitForm() {
    var form = $('#form-category-info');
    var name = form.find('.form-group.name input').val();

    form.find('.invalid-feedback').remove();
    if (!name) {
        form.find('.form-group.name').append('<div class="invalid-feedback" style="display: block;">This field is required.</div>');
    }

    var fd = new FormData();
    fd.append('action', "{{ $action }}");
    @if ($action == 'edit')
        fd.append('category_id', "{{ $category->id }}");
    @endif
    fd.append('name', name);

    $.ajax({
        url: '/admin/category/create_or_edit_action',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response) {
            var response = JSON.parse(response);
            if (response['result'] == 'success') {
                window.location.href = admin_url + '/category/all';
            }  else {
                if (response['reason'] == 'slug') {
                    form.find('.form-group.name').append('<div class="invalid-feedback" style="display: block;">The name has already been used.</div>');
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
