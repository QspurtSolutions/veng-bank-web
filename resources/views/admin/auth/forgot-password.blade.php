@extends('admin.Layouts.login')
@section('content')
    <div class="wrapper">
        <div class="authentication-forgot d-flex align-items-center justify-content-center">
            <div class="card forgot-box">
                <div class="card-body">
                    <x-auth-session-status :status="session('status')" />
                    <form method="POST" action="{{ route('admin.password.email') }}" class="row g-3">
                        @csrf
                        <div class="p-4 rounded  border">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/icons/forgot-2.png') }}" width="120" alt="" />
                            </div>

                            <h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
                            <p class="">Enter your registered email ID to reset the password</p>

                            <div class="my-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light btn-lg">{{ __('Email Password Reset Link') }}</button>
                                <a href="{{ route('admin.login') }}" class="btn btn-light btn-lg">
                                    <i class='bx bx-arrow-back me-1'></i>Back to Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
    @endsection