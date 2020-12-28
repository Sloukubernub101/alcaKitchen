<nav class="navbar navbar-expand-lg">
	<div class="container-fluid">
		<img src="images/logo.jpg" style="height:70px;" alt="" class="navbar-brand">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<i class="fa fa-bars"></i>
		</button>
		<div class="collapse navbar-collapse d-lg-flex justify-content-lg-end" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Menu</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Location</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Register</a>
				</li>
				<li class="nav-item">
					<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#signup">
						<i class="fa fa-user-circle text-dark fa-2x"></i>
					</button>

					<!-- Signup/Login Popup -->
					<div class="modal fade w-100" id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
						<div class="modal-dialog d-flex justify-content-center" style="width:95vw">
							<div class="modal-content col-10">
								<div class="modal-header col-12">
									<h5 class="modal-title" id="signup">Sign up</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body col-12">
									<form>
										<label for="firstName" class="form-label">First name</label>
										<input type="text" class="form-control" id="firstName" value="Firstname" required>
										<label for="lastName" class="form-label">Last name</label>
										<input type="text" class="form-control" id="lastName" value="Lastname" required>
										<label for="email" class="form-label">Email address</label>
										<input type="email" class="form-control" id="email" placeholder="name@example.com">
										<label for="password" class="col-sm-2 col-form-label">Password</label>
										<div>
											<input type="password" class="form-control" id="password">
										</div>
										<p>Already have an account? <a href="#" class="signIn">Sign in</a></p>
									</form>
								</div>
								<div class="modal-footer col-12">
								<button type="button" class="btn btn-success" data-bs-dismiss="modal">Login</button>
								<button type="button" class="btn btn-primary">Sign up</button>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>