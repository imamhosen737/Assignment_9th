<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
	<!-- Fontawsome cdn -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>
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

	<div class="container-fluid mt-2">
		<div class="row">

			<?php
			$conn = new mysqli('localhost', 'root', '', 'ost_9th_assignment');
			$id = $_GET['id'];
			$details = $conn->query("SELECT * FROM `post` WHERE `id`= $id");

			while ($data = $details->fetch_assoc()) { ?>

				<div class="col-md-12 col-sm-12">
					<div class="card mb-3">
						<img src="./assets//uploads/<?php echo $data['photo']; ?>" class="card-img-top" alt="..." height="500" width="300">
						<div class="card-body">
							<h5 class="card-title"><?php echo $data['title']; ?></h5>
							<p class="card-text"><?php echo $data['details']; ?></p>
							<p class="card-text"><small class="text-muted">Last updated <?php echo $data['date']; ?></small></p>
						</div>
					</div>
					<div class="mb-3 mt-3">
						<a href="" class="btn btn-sm btn-primary">Share on Facebook</a>
						<a href="" class="btn btn-sm btn-success">Share on Instagram</a>
						<a href="" class="btn btn-sm btn-info">Share on Twitter</a>
					</div>
				</div>

			<?php } ?>

		</div>

	</div>
	</div>

</body>

</html>