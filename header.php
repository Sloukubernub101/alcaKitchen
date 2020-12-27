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
					<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="signup" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="signup">Login</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<div class="col-12">
										<label for="validationCustom01" class="form-label">First name</label>
										<input type="text" class="form-control" id="validationCustom01" value="Firstname" required>
										<label for="validationCustom02" class="form-label">Last name</label>
										<input type="text" class="form-control" id="validationCustom02" value="Lastname" required>
										<label for="exampleFormControlInput1" class="form-label">Email address</label>
										<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
										<label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
										<div>
											<input type="password" class="form-control" id="inputPassword">
										</div>
										<p>Already have an account? <a href="#" class="signIn">Sign in</a></p>
									</div>
								</div>
								<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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