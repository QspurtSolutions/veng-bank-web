@extends('User.Layouts.main')
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


<form class="row g-3" enctype="multipart/form-data"  method="POST" action="{{ isset($blog) ? route('admin.blog.update', ['id' => $blog->id]) : route('admin.blog.store') }}">
    @csrf
    @if(isset($blog))
        @method('PATCH')
    @endif

    <input type="hidden" name="id" value="{{ isset($blog) ? $blog->id : '' }}">

    <div class="col-md-12">
        <label for="inputFirstName" class="form-label">Blog Heading</label>
        <input type="name" class="form-control" name="heading" value="{{ isset($blog) ? $blog->heading : '' }}">
    </div>

    <!-- <div class="col-md-4">
        <label for="inputLastName" class="form-label">Tag</label>
        <input type="name" class="form-control" name="tag" value="{{ isset($blog) ? $blog->tag : '' }}">
    </div> -->


<div class="col-md-12">
    <label for="inputLastName" class="form-label">Tag</label>
    <input type="text" class="form-control" data-role="tagsinput"  name="tag" value="{{ isset($blog) ? $blog->tag : '' }}">
</div>



<!-- <div class="mb-3">
    <label class="form-label">Basic</label>
    <input type="text" class="form-control" data-role="tagsinput" value="jQuery,Script,Net">
</div> -->



    







    <input type="hidden" name="created" value="Blog User">


    <div class="col-md-12">
            <label><strong>Description :</strong></label>
            <textarea class="ckeditor form-control" name="description" id="description"></textarea>
            @error('description')
                <strong>{{ $message }}</strong>
            @enderror
        </div>


        <div class="col-md-6">
        <label for="inputLastName" class="form-label">Date</label>
        <input type="date" class="form-control" name="date" id="date" value="{{ isset($blog) ? $blog->tag : '' }}">
    </div>




        <div class="col-md-6">
        <label for="formFile" class="form-label">industries Icon</label>
        <input class="form-control" type="file" id="image" name="image">
        @error('icon')
        <strong>{{ $message }}</strong>
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


@endpush