@extends('admin.Layouts.main')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    Works</li>
                <li class="breadcrumb-item active" aria-current="page">Add Works</li>
            </ol>
        </nav>
    </div>
</div>

<!--form Start Here --->
<div class="card radius-10 w-100">
    <div class="card-body">
        <form class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            @if($works->id)
            @method('PATCH')
            @endif




            <div class="col-md-12">
        <label for="heading">Page tittle<span class="text-danger"> *</span></label>
        <input type="text"  name="tittle" id="tittle" class="form-control @error('tittle') is-invalid @enderror"  value="{{ isset($blog) ? $blog->tittle : '' }}" placeholder="Enter Page Tittle">
        @error('tittle')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <div class="col-md-12">
        <label for="heading">Meta Description<span class="text-danger"> *</span></label>
        <input type="text"  name="meta" id="meta" class="form-control @error('meta') is-invalid @enderror"  value="{{ isset($blog) ? $blog->meta : '' }}" placeholder="Enter Page Meta Description">
        @error('meta')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    

            <div class="col-md-12">
                <label for="heading">Heading<span class="text-danger"> *</span></label>
                <input type="text" name="heading" id="heading" class="form-control @error('heading') is-invalid @enderror" value="{{ old('heading', $works->heading) }}" placeholder="Enter heading">
                @error('heading')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-md-12">
                <label for="description">Full Description :<span class="text-danger"> *</span></label>
                <textarea class="ckeditor form-control @error('description') is-invalid @enderror" name="description" id="description">{!! old('description', $works->description) !!}</textarea>
                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


<div class="col-md-12">
    <label for="description">Categories:<span class="text-danger"> *</span></label>
    <input type="text" name="categories" id="categories" class="form-control @error('categories') is-invalid @enderror" value="{{ old('categories', $works->categories) }}" placeholder="Enter categorie">
    @error('categories')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="col-md-12">
    <label for="description">Facebook:</label>
    <input type="text" name="fb" id="fb" class="form-control @error('fb') is-invalid @enderror" value="{{ old('fb', $works->fb) }}" placeholder="Enter categorie">
    @error('fb')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>


<div class="col-md-12">
    <label for="description">Instagram:</label>
    <input type="text" name="insta" id="insta" class="form-control @error('insta') is-invalid @enderror" value="{{ old('insta', $works->insta) }}" placeholder="Enter categorie">
    @error('insta')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



<div class="col-md-12">
    <label for="description">Twitter:</label>
    <input type="text" name="twi" id="twi" class="form-control @error('twi') is-invalid @enderror" value="{{ old('twi', $works->twi) }}" placeholder="Enter categorie">
    @error('twi')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



<div class="col-md-12">
    <label for="description">Website:</label>
    <input type="text" name="web" id="web" class="form-control @error('web') is-invalid @enderror" value="{{ old('web', $works->web) }}" placeholder="Enter Website Link">
    @error('web')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>






            <div class="col-md-12">
                <label for="image" class="form-label">Works Icon<span class="text-danger"> *</span></label>
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-light px-5">{{ $works->id ? 'Update' : 'Submit' }}</button>
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