@extends('admin.Layouts.main')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                Branch</li>
                <li class="breadcrumb-item active" aria-current="page">Add Branch</li>
            </ol>
        </nav>
    </div>
</div>



<!--form Start Here --->
<div class="card radius-10 w-100">
    <div class="card-body">
        <form class="row g-3"  method="POST" enctype="multipart/form-data">   
            @csrf
            @if($branch->id)
            @method('PATCH')
            @endif


             	 	

            <div class="col-md-12">
        <label for="heading">Name<span class="text-danger"> *</span></label>
        <input type="text"  name="branch" id="branch" class="form-control @error('branch') is-invalid @enderror"  value="{{ isset($branch) ? $branch->branch : '' }}" placeholder="branch">
        @error('tittle')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-md-12">
        <label for="heading">Address<span class="text-danger"> *</span></label>
        <input type="text"  name="address" id="address" class="form-control @error('address') is-invalid @enderror"  value="{{ isset($branch) ? $branch->address : '' }}" placeholder="address">
        @error('meta')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


  	 	


		 	

    <div class="col-md-12">
        <label for="name">Phone<span class="text-danger"> *</span></label>
        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $branch->phone ?? '') }}" placeholder="Enter Name">
        @error('heading')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-12">
        <label for="name">email<span class="text-danger"> *</span></label>
        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $branch->email ?? '') }}" placeholder="Enter Name">
        @error('heading')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-md-12">
        <label for="name">Estd<span class="text-danger"> *</span></label>
        <input type="text" name="estd" id="estd" class="form-control @error('estd') is-invalid @enderror" value="{{ old('estd', $branch->estd ?? '') }}" placeholder="Enter Name">
        @error('heading')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>





    <div class="col-12">
        <button type="submit" class="btn btn-light px-5">{{ isset($branch) ? 'Update' : 'Submit' }}</button>
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