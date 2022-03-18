
@include ('layouts.header')

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <br><br><br><br><br><br>
                    <div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
							<form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="mb-3">
									<label class="mb-2 text-muted" :value="__('Name')"  for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" :value="old('name')" required autofocus>
									<div class="invalid-feedback">
										Name is required	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" :value="__('Email')" for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" :value="old('email')" required="">
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" :value="__('Password')"  for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required-autocomplete="new-password">
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
                                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                                </div>

								<p class="form-text text-muted mb-3">
									By registering you agree with our terms and condition.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-primary ms-auto">
										Register	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Already have an account? <a href="/login" class="text-light">Login</a>
							</div>
						</div>
					</div>
					<div class="text-center mt-5 text-muted">
						Copyright &copy; 2022 — X2 Gorillas
					</div>
				</div>
			</div>
		</div>
	</section>
	@if ($errors->any())
		@foreach ($errors->all() as $error)
			<script>
				toastr.error('<?php echo $error ?>')
			</script>
		@endforeach
	@endif
    
	<script src="js/login.js"></script>
    @include ('layouts.footer')
