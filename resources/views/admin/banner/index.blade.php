@extends('admin.Layouts.main')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <a class="btn btn-light" href="{{ route('admin.banner.create')}}">Add Gallery</a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Heading</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="workModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Confirm to delete</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div id="msgAlert">

				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" onclick="closeModal(`workModal`);" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-danger" onclick="submitForm(`work-form`);">delete</button>
			</div>
		</div>
	</div>
</div>
@endsection

@push('css')
<link href="{{ asset('admin/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endpush


@push('script')
<script src="{{ asset('admin/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>

<script type="text/javascript">
    $(function() {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.banner.list') }}",
            columns: [{
                    data: null,
                    name: 'No',
                    render: function(data, type, row, meta) {
                        return meta.row + 1;
                    }
                },
                {
                    data: 'heading',
                    name: 'Heading'
                },
                {
                    data: 'image',
                    name: 'Image',
                    render: function(data, type, row) {
                        return '<img src="' + data + '" alt="Image" class="img-thumbnail" style="height: 100px;">';
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
    var formId;
    function deleteItem(data, id) {
        formId = id;
		$('#msgAlert').html('Are you sure you want to delete '+data+' ?');
		$('#workModal').modal('show');
	}

	function closeModal(modalId) {
		$('#'+modalId).modal('hide');
	}

	function submitForm(formIdName)
	{
		$('#'+formIdName+formId).submit();
	}
</script>
@endpush