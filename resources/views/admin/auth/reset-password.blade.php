@extends('admin.Layouts.login')
@section('content')


	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-5 border-end">
								<div class="card-body">
									<x-auth-session-status :status="session('status')" />
									<form method="POST" action="{{ route('admin.password.update') }}">
										@csrf
										<div class="p-5">
											<div class="text-center">
												<img src="{{ asset('assets/images/logo-img.png') }}" width="80" alt="">
											</div>
											<h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
											<p class="">We received your reset password request. Please enter your new password!</p>
											<!-- Password Reset Token -->
											<input type="hidden" name="token" value="{{ $request->route('token') }}">
											<div class="mb-3 mt-5">
												<label for="email" class="form-label">Email Address</label>
												<input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Address">
												@error('email')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror
											</div>
											<div class="mb-3">
												<label for="password" class="form-label">New Password</label>
												<input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter new password" />
												@error('password')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror
											</div>
											<div class="mb-3">
												<label for="password_confirmation" class="form-label">Confirm Password</label>
												<input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm password" />
												@error('password_confirmation')
												<div class="invalid-feedback">{{ $message }}</div>
												@enderror
											</div>
											<div class="d-grid gap-2">
												<button type="submit" class="btn btn-light">Change Password</button> <a href="authentication-login.html" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Login</a>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="{{ asset('assets/images/login-images/forgot-password-frent-img.jpg') }}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
	@endsection