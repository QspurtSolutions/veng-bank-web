@extends('admin.Layouts.main')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Blog</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
            </ol>
        </nav>
    </div>
</div>



<!--form Start Here --->
<div class="card radius-10 w-100">
    <div class="card-body">

<form class="row g-3" method="POST" enctype="multipart/form-data">
    
    @csrf
    @if(isset($blog))
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
        <label for="heading">Blog Heading <span class="text-danger"> *</span></label>
        <input type="text"  name="heading" id="heading" class="form-control @error('heading') is-invalid @enderror"  value="{{ isset($blog) ? $blog->heading : '' }}" placeholder="Enter Blog Heading">
        @error('heading')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>





<div class="col-md-12">
    <label for="text">Tag <span class="text-danger"> *</span></label>
    <input type="text"  name="tag" class="form-control @error('tag') is-invalid @enderror"   value="{{ isset($blog) ? $blog->tag : '' }}">
    @error('tag')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
</div>



    <div class="col-md-4">
        <label for="text">Date<span class="text-danger">*<span></label>
        <input type="date"  name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ isset($blog) ? $blog->date : '' }}">
        @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
    </div>



    <div class="col-md-4">
    <label for="text">Created By<span class="text-danger"> *</span></label>
    <select id="created" name="created" class="form-select @error('created') is-invalid @enderror">
        <option value="" selected disabled>Select Creator</option>
        <option value="Admin" {{ isset($blog) && $blog->created === 'Admin' ? 'selected' : '' }}>Admin</option>
        <option value="Blog User" {{ isset($blog) && $blog->created === 'Blog User' ? 'selected' : '' }}>Blog User</option>
    </select>
    @error('created')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>



    <div class="col-md-12">
            <label for="description">Description <span class="text-danger">*<span></label>
            <textarea type="text"  name="description" id="description" class="ckeditor form-control  @error('description') is-invalid @enderror" value=" {{ old('description', $blog->description ?? '') }}"></textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


    <div class="col-md-12">
        <label for="formFile">Blog Image <span class="text-danger">*<span></label>
        <input type="file" id="image" name="image" class="form-control @error('image') is-invalid @enderror" >
        @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>




    <div class="col-12">
        <button type="submit" class="btn btn-light px-5">{{ isset($blog) ? 'Update' : 'Submit' }}</button>
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




@endsection


@push('script')

<script>
  export default {
    data() {
      return {
        value: ['one', 'two']
      }
    }
  }
</script>



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