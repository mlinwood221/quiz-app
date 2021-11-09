@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
<link rel="stylesheet" href="{{ asset('admin-assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
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
                    <li class="breadcrumb-item active" aria-current="page">All</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Dynamic Table Full -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">List <small>html section</small></h3>
            <a href="{{ url('admin/html-section/add') }}" class="btn btn-primary">+ New Html Section</a>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 80px;">#</th>
                        <th>Name</th>
                        <th>Html</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($html_sections as $index=>$html_section)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td class="font-w600">{{ $html_section->name }}</td>
                        <td>{{ strlen($html_section->html) > 100 ? substr($html_section->html, 0, 100) . '...' : $html_section->html }}</td>
                        <td>
                            <em class="text-muted">{{ date_format(date_create($html_section->created_at), 'M d, Y') }}</em>
                        </td>
                        <td>
                            <a href="{{ url('admin/html-section/view/' . $html_section->id) }}" ><i class="si si-eye"></i></a>
                            <a href="{{ url('admin/html-section/edit/' . $html_section->id) }}" ><i class="si si-pencil"></i></a>
                            <a href="javascript:void(0);" onclick="onRemoveHtmlSection({{ $html_section->id }})"><i class="si si-trash"></i></a>
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

<div class="modal" id="modal-delete-html_section" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Delete Html Section</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <p>Are you sure to remove this html section?</p>
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

function onRemoveHtmlSection(html_section_id) {
    $("#modal-delete-html_section .btn-primary").attr('href', "{{ url('admin/html-section/delete') }}" + '/' + html_section_id);
    $("#modal-delete-html_section").modal('show');
}
</script>
@endsection
