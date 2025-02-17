<?php
	session_start();
	include('dashboard/includes/header.php');

	if(isset($_SESSION['auth'])) {
		$_SESSION['status'] = "You are already logged in!";
		header('Location: dashboard/index.php');
		exit(0);
	}
?>
</head>

<body style="background-color:#f3f4f6;">

<div class="section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 my-5">
				<div class="card my-5">
					<div class="card-header bg-white py-4">
						<!-- <h4 class="text-center">Login Form</h4> -->
						<span class="card-title text-center h4">Login Form</span>
						<a href="index.php" style="background-color: rgb(4,4,95);color:#fff;" class="btn btn-sm float-right">Back</a>
					</div>
					<div class="card-body px-4 py-4">
						<?php
						if(isset($_SESSION['auth_status'])) {
							?>
							<div class="alert alert-warning alert-dismissible fade show" role="alert">
							  	<strong> <?php echo $_SESSION['auth_status']; ?></strong>
							  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    	<span aria-hidden="true">&times;</span>
							  	</button>
							</div>
							<?php
							unset($_SESSION['auth_status']);
						}
						?>
						<?php
							include('dashboard/modules/message.php');
						?>
						<form action="logincode.php" method="POST">
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Enter Email" required>
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Enter Password" required>
							</div>
							<div class="form-group">
								<button type="submit" name="login_btn" class="btn btn-block" style="background-color: rgb(4,4,95);color:#fff;">Login</button>
							</div>
						</form>
						<br>
						<p class="text-center">Don't have an account yet? <a style="text-decoration: none;" href="registration.php">Register</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include('dashboard/includes/footer.php'); ?>