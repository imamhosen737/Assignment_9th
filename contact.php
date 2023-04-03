<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
	<?php
	$conn = new mysqli('localhost', 'root', '', 'ost_9th_assignment');
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];

		if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
			$conn->query("INSERT INTO `contact` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')");
			$_SESSION['success_status'] = "Contact message inserted successfully";
		} else {
			$_SESSION['error_status'] = "All fields are required!!";
		}
	}



	?>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- Container wrapper -->
		<div class="container-fluid">
			<!-- Toggle button -->
			<button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars"></i>
			</button>


			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Navbar brand -->
				<a class="navbar-brand mt-2 mt-lg-0" href="#">
					<img src="./assets/2022-11-27T06-52-05.802Z-logo ostad.png" height="15" alt="MDB Logo" loading="lazy" />
				</a>
			</div>


			<!-- Right elements -->
			<div class="d-flex align-items-center">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="home_page.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="blogs.php">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
			<!-- Right elements -->
		</div>
		<!-- Container wrapper -->
	</nav>
	<!-- Navbar -->
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-6">
				<form class="text-center border border-light p-5" action="" method="post">

					<p class="h4 mb-4">Contact us</p>
					<?php if (isset($_SESSION['success_status'])) { ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Holy user! <?php echo $_SESSION['success_status'] ?></strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
														
						<?php unset($_SESSION['error_status']); } ?>
						<?php if (isset($_SESSION['error_status'])) { ?>
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>Holy user! <?php echo $_SESSION['error_status'] ?></strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							</div>
														
						<?php unset($_SESSION['error_status']); } ?>

					<div class="form-row">
						<label for="name">Name</label>
						<input type="text" id="name" name="name" class="form-control mb-3" placeholder="Name">
					</div>

					<div class="form-row">
						<label for="email">Email</label>
						<input type="email" id="email" name="email" class="form-control mb-3" placeholder="E-mail">
					</div>

					<div class="form-row">
						<label for="subject">Subject</label>
						<input type="text" id="subject" name="subject" class="form-control mb-3" placeholder="Subject">
					</div>


					<div class="form-group">
						<textarea class="form-control rounded-0" name="message" id="message" rows="3" placeholder="Message"></textarea>
					</div>
					<button class="btn btn-success btn-block" name="submit" type="submit">Send</button>

				</form>
			</div>
		</div>
	</div>
</body>

</html>