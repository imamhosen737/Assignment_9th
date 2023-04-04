<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
	<header>
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
						<li class="nav-item">
							<a class="nav-link" href="add_post.php">Add Post</a>
						</li>
					</ul>
				</div>
				<!-- Right elements -->
			</div>
			<!-- Container wrapper -->
		</nav>
		<!-- Navbar -->


		<!-- Background image -->
		<div class="p-5 text-center bg-image" style="
      background-image: url('./assets/./banner-1082646_1920.jpg');
      height: 400px;
    ">
			<div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
				<div class="d-flex justify-content-center align-items-center h-100">
					<div class="text-white">
						<h1 class="mb-3">Welcome to my blog website..</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- Background image -->
	</header>



	<div class="container-fluid mt-2">
	<h2>Featured Posts</h2>
		<div class="row">
			<?php
			$conn = new mysqli('localhost', 'root', '', 'ost_9th_assignment');
			$data = $conn->query("SELECT * FROM `post`");

			while ($d = $data->fetch_assoc()) { ?>
				<div class="col-md-4 col-sm-6">
					<div class="card mb-3">
						<img src="./assets/uploads/<?php echo $d['photo']; ?>" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><?php echo $d['title']; ?></h5>
							<p class="card-text"><?php echo $d['details']; ?></p>
							<!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
							<p class="card-text"><small style="color:yellow ;" class="text-muted">Last updated at <?php echo $d['date']; ?></small></p>

							<a href="single_post.php?id=<?php echo $d['id']; ?>" class="btn btn-info btn-sm">Read More..</a>
						</div>
					</div>
				</div>

			<?php } ?>
		</div>
	</div>
	</div>

</body>

</html>