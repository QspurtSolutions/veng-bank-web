@extends('admin.Layouts.main')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                Deposit</li>
                <li class="breadcrumb-item active" aria-current="page">Add Deposit</li>
            </ol>
        </nav>
    </div>
</div>



<!--form Start Here --->
<div class="card radius-10 w-100">
    <div class="card-body">
        <form class="row g-3"  method="POST" enctype="multipart/form-data">   
            @csrf
            @if($deposit->id)
            @method('PATCH')
            @endif

            <div class="col-md-12">
        <label for="heading">Heading<span class="text-danger"> *</span></label>
        <input type="text"  name="heading" id="heading" class="form-control @error('heading') is-invalid @enderror"  value="{{ isset($deposit) ? $deposit->heading : '' }}" placeholder="Heading">
        @error('tittle')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
		 	
    <div class="col-md-12">
        <label for="description">Full Description <span class="text-danger">*<span></label>
        <textarea type="text" name="description" id="description" class="ckeditor form-control @error('description') is-invalid @enderror" value=" {{ old('description', $service->description ?? '') }}"></textarea>
        @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>



    <div class="col-12">
        <button type="submit" class="btn btn-light px-5">{{ isset($deposit) ? 'Update' : 'Submit' }}</button>
    </div>



    
</form>




    </div>
    </div>
    </div>
    </div>

@if(session()->has('success'))
<div class="alert border-0 alert-dismissible fade show">
    <div class="text-white"> {{ session('success') }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

</div>
</div>




@endsection

@push('script')
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        var ckEditor = document.getElementById('description');
        if (ckEditor.length > 0) {
            $('#description').ckeditor();
        }
    });
</script>
@endpush