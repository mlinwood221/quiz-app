@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
<style>
    .auto-assign-wrapper {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }
    .auto-assign-wrapper button {
        margin-right: 30px;
    }
</style>
@endsection

@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Authors</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Author</li>
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="auto-assign-wrapper">
        <button class="btn btn-primary" onclick="onClickAutoAssign(this)">Auto Assign</button>
        <span>Assign authors to quizzes randomly.</span>
    </div>
    <!-- Dynamic Table Full -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">List <small>author</small></h3>
            <a href="{{ url('admin/author/add') }}" class="btn btn-primary">+ New Author</a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Image</th>
                        <th>Username</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $index=>$author)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>
                            <img src="{{ $author->image_s3 }}" width="60px" />
                        </td>
                        <td class="font-w600">
                            {{ $author->username }}
                        </td>
                        <td>{{ $author->firstname }}</td>
                        <td>{{ $author->lastname }}</td>
                        <td>
                            <em class="text-muted">{{ date_format(date_create($author->created_at), 'M d, Y') }}</em>
                        </td>
                        <td>
                            <a href="{{ url('admin/author/view/' . $author->id) }}" ><i class="si si-eye"></i></a>
                            <a href="{{ url('admin/author/edit/' . $author->id) }}" ><i class="si si-pencil"></i></a>
                            <a href="javascript:void(0);" onclick="onRemoveAuthor({{ $author->id }})"><i class="si si-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Dynamic Table Full -->
</div>
<!-- END Page Content -->

<div class="modal" id="modal-delete-author" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Delete Author</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>Are you sure to remove this author?</p>
                </div>
                <div class="block-content block-content-full text-right bg-light">
                    <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary">Done</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('admin-assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugins/datatables/buttons/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugins/datatables/buttons/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugins/datatables/buttons/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugins/datatables/buttons/buttons.flash.min.js') }}"></script>
<script src="{{ asset('admin-assets/js/plugins/datatables/buttons/buttons.colVis.min.js') }}"></script>

<script>    
$('.js-dataTable-full').dataTable({
    pageLength: 10,
    lengthMenu: [[5, 10, 20], [5, 10, 20]],
    autoWidth: false
});

function onRemoveAuthor(author_id) {
    $("#modal-delete-author .btn-primary").attr('href', "{{ url('admin/author/delete') }}" + '/' + author_id);
    $("#modal-delete-author").modal('show');
}

function onClickAutoAssign(e) {
    $(e).html('<div class="spinner-border"></div>');
    $.ajax({
        type: 'post',
        url: "/admin/author/auto-assign",
        success: function(res) {
            var alert_element = null;
            if (res == 'success') {
                alert_element = $(`<div class="alert alert-success">Action completed</div>`);
            } else {
                alert_element = $(`<div class="alert alert-danger">Failed to assign</div>`);
            }
            alert_element.insertBefore($('.auto-assign-wrapper'));
            setTimeout(() => { alert_element.remove(); }, 3000);
            $(e).html('Auto Assign');
        },
        error: function(err) {
            var alert_element = $(`<div class="alert alert-danger">Failed to assign</div>`);
            alert_element.insertBefore($('.auto-assign-wrapper'));
            setTimeout(() => { alert_element.remove(); }, 3000);
            $(e).html('Auto Assign');
        }
    })
}
</script>
@endsection
