@extends('admin.Layouts.main')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    Works</li>
                <li class="breadcrumb-item active" aria-current="page">Add Gallery</li>
            </ol>
        </nav>
    </div>
</div>

<!--form Start Here --->
<div class="card radius-10 w-100">
    <div class="card-body">
        <form class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            @if($gallery->id)
            @method('PATCH')
            @endif




    


    



            <div class="col-md-12">
                <label for="image" class="form-label">Works Icon<span class="text-danger"> *</span></label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            

            <div class="col-12">
                <button type="submit" class="btn btn-light px-5">{{ $gallery->id ? 'Update' : 'Submit' }}</button>
            </div>
        </form>
    </div>
</div>




@if(session()->has('success'))
<div class="alert border-0 alert-dismissible fade show">
    <div class="text-white"> {{ session('success') }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

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