<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Reviews System</title>
		<link href="review.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product User CSS Template
	https://templatemo.com/tm-524-product-User
	-->
 
	</head>
    <body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="">
                    <h1 class="tm-site-title mb-0" >User</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

	
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mx-auto h-100">
							<li class="nav-item">
								<a class="nav-link " href="http://localhost/webproject/user/Signup&login/home.php">
									<i class="fas fa-home"></i>
									Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item dropdown">
	
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false">
									<i class="far fa-file-alt"></i>
									<span>
										User <i class="fas fa-angle-down"></i>
									</span>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="http://localhost/webproject/User/Add%20user/input.php">Add user</a>
									<a class="dropdown-item" href="http://localhost/webproject/User/Add%20user/test.php">View user</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link active" href="http://localhost/webproject/User/review/input.php">
									<i class="far fa-star"></i>
									Review
								</a>
								</li>
	
							<li class="nav-item">
								<a class="nav-link" href="accounts.html">
									<i class="far fa-user"></i>
									Profile
								</a>
								</li>
							<li class="nav-item dropdown">
							<a class="nav-link" href="http://localhost/webproject/User/Signup&login/logout-user.php">
									<i class="fas fa-cog"></i>
									Sign Out
								</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>

			<div class="container tm-mt-big tm-mb-big">
				<div class="row">
				  <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
					<div class="tm-bg-primary-dark tm-block tm-block-h-auto">
					  <div class="row">
						<div class="col-12">
						  <h2 class="tm-block-title d-inline-block">Add review</h2>
						</div>
					  </div>

		<div class="content home">
			<h2>Reviews</h2>
			<p>Check out the below reviews for our tracking System.</p>
            <div class="reviews"></div>
<script>
const reviews_page_id = 1;
fetch("reviews.php?page_id=" + reviews_page_id).then(response => response.text()).then(data => {
	document.querySelector(".reviews").innerHTML = data;
	document.querySelector(".reviews .write_review_btn").onclick = event => {
		event.preventDefault();
		document.querySelector(".reviews .write_review").style.display = 'block';
		document.querySelector(".reviews .write_review input[name='name']").focus();
	};
	document.querySelector(".reviews .write_review form").onsubmit = event => {
		event.preventDefault();
		fetch("reviews.php?page_id=" + reviews_page_id, {
			method: 'POST',
			body: new FormData(document.querySelector(".reviews .write_review form"))
		}).then(response => response.text()).then(data => {
			document.querySelector(".reviews .write_review").innerHTML = data;
		});
	};
});
</script>
		</div>
	</body>
</html>

