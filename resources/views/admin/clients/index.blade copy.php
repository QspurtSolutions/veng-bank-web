@extends('admin.Layouts.main')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Clients</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Clients</button>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered yajra-datatable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Logo</th>
                    <th>Action</th>
                </tr>

 @foreach($clients as $value) 
  <tr>
      <td>{{$value->id}}</td>
      <td> {{$value->bannerhead}} </td>
      <td>

        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
            title="" data-original-title="Edit" onClick="edit({{ $value->id }})"><i
                class="fas fa-pencil-alt"></i></a>

        <a class="btn btn-danger btn-action trigger--fire-modal-1" data-toggle="tooltip" title="" 
        onClick="delete({{ $value->id }})"><i class="fas fa-trash"></i></a>

      </td>
  </tr>
@endforeach 






            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


<div class="modal fade"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card">

            <form class="row g-3" method="POST" enctype="multipart/form-data" action="{{route('admin.industries.update')}}">
    {{ csrf_field() }}

    <div class="col-md-8">
        <label for="formFile" class="form-label">Client Logo</label>
        <input type="file" class="form-control" name="logo" id="logo">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" onclick="clientsubmit($event)" value="save"
            id="clientsubmit">Save Changes</button>
    </div>
</form>
            </div>
        </div>
    </div>
</div>



@endsection

@push('script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


<script>

// Open Store Modal
$(document).on('click', '#openStoreModal', function() {
    $('#exampleModal').modal('show');
});

// Store Form Submit
$(document).on('submit', '#storeForm', function(e) {
    e.preventDefault();
    
    var form = $(this);
    var url = form.attr('action');
    var formData = new FormData(form[0]);

    $.ajax({
        type: 'POST',
        url:clients.store,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            if (response.status == 'success') {
                // Refresh page or perform other actions
                window.location.reload();
            }
        },
        error: function(xhr) {
            // Handle error
        }
    });
});




</script>



@endpush