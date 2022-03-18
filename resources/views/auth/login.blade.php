
<!-- Bootstrap CSS (as per normal) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Add the Bootstrap-Nightfall Variant CSS (the media attribute is for dark auto-switching) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-dark-5@1.1.3/dist/css/bootstrap-nightfall.min.css" rel="stylesheet" media="(prefers-color-scheme: dark)">

<section class="h-100 mt-5">
		<br><br><br><br><br><br><br><br><br>
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg- col-md-7 col-sm-9">
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            
                            <form method="POST" autocomplete="off">
								@csrf
                                <!-- Email Address -->
                                <div class="mb-3">
									<label for="inputEmail" class="mb-2 text-muted">E-Mail</label>
									<input type="email" id="inputEmail" name="email" class="form-control" required="" autofocus="">
								</div>
                                <!-- Password -->
								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="inputWachtwoord">Password</label>
										{{-- <a href="forgot-password" class="float-end">
											Forgot Password?
										</a> --}}
									</div>
									<input type="password" id="inputWachtwoord" name="wachtwoord" class="form-control" required="">
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>
                                <!-- Remember Me -->
								{{-- <div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Remember Me</label>
									</div> --}}
									<button type="submit" class="btn btn-primary ms-auto">
										Inloggen
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Don't have an account? <a href="/register" class="text-light">Create One</a>
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
	<script src="js/login.js"></script>
@include ('layouts.footer')

