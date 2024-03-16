@extends('admin.Layouts.main')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
	<div class="breadcrumb-title pe-3">Forms</div>
	<div class="ps-3">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb mb-0 p-0">
				<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Management</li>
			</ol>
		</nav>
	</div>
	<div class="ms-auto">
		<div class="btn-group">
			<button type="button" class="btn btn-light"><a href="{{ route('admin.management.create')}}">Add Management</a></button>

		</div>
	</div>
</div>


<div class="card">
	<div class="card-body">
		<table class="table table-bordered yajra-datatable">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>

		</table>

	</div>
</div>








@endsection




@push('script')
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
	$(function() {

		var table = $('.yajra-datatable').DataTable({
			processing: true,
			serverSide: true,
			ajax: "{{ route('admin.management.list') }}",
			columns: [{
				data: null,
				name: 'No',
				render: function (data, type, row, meta) {
				return meta.row + 1;
				}
				},   	 	 	 		
				{
					data: 'name',
					name: 'Name'
				},
				{
					data: 'designation',
					name: 'Designation'
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
</script>
@endpush