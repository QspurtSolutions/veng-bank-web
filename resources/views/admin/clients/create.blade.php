@extends('admin.Layouts.main')
@section('content')

<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Dashboard</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    Clients</li>
            </ol>
        </nav>
    </div>
</div>

<!--form Start Here --->
<div class="card radius-10 w-100">
    <div class="card-body">
        <form class="row g-3" method="POST" enctype="multipart/form-data">
            @csrf
            @if($clients->id)
            @method('PATCH')
            @endif

            <div class="col-md-12">
                <label for="logo" class="form-label">Client Icon</label>
                <input class="form-control @error('logo') is-invalid @enderror" type="file" id="logo" name="logo">
                @error('logo')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="col-12">
                <button type="submit" class="btn btn-light px-5">{{ $clients->id ? 'Update' : 'Submit' }}</button>
            </div>

        </form>
    </div>
</div>
@endsection