<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$email = mysqli_real_escape_string($conn, $_POST['email']);

$result = mysqli_query($conn, "SELECT * FROM signup WHERE email=' $email'");
$row= mysqli_fetch_array($result);

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
 $query="UPDATE signup set name= '$name', email=' $email',password= '$password' ,contactno= '$contactno', address='$address' WHERE  email=' $email'";
 if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
}

  $conn->close();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>

<body id="reportsPemail">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="">
                    <h1 class="tm-site-title mb-0">Admin</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/webproject/Admin/Signup&login/home.php">
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
                                    Patients <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://localhost/webproject/Admin/Add%20patient/input.php">Add patient</a>
                                <a class="dropdown-item" href="http://localhost/webproject/Admin/Add%20patient/test3.php">View patient</a>
                                <a class="dropdown-item" href="http://localhost/webproject/Admin/add%20patient/test2.php">Update patient</a>
                                <a class="dropdown-item" href="http://localhost/webproject/Admin/add%20patient/test1.php">Delete patient</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/webproject/Admin/Messemail/input.php">
                                <i class="fas fa-envelope"></i>
                                Mail
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="accounts.html">
                                <i class="far fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link" href="file:///D:/xampp/htdocs/Webproject/Admin&User/Front%20pemail.html">
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
                <h2 class="tm-block-title d-inline-block">Profile settings</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input
                      id="name"
                      name="name[]"
                      type="text"
                      class="form-control validate"
                      value = "<?php echo $fetch_info['name']; ?>"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="email"
                      >Email</label
                    >
                    <input
                      id="email"
                      name="email[]"
                      type="text"
                      class="form-control validate"
                      value = "<?php echo $fetch_info['email']; ?>"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="password"
                      >Password</label
                    >
                    <input
                      id="password"
                      name="password[]"
                      type="password"
                      class="form-control validate"
                      value = "<?php echo $fetch_info['password']; ?>"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="address"
                      >Address</label
                    >
                    <textarea
                      class="form-control validate"
                      rows="3"
                      name="address[]"
                      value = "<?php echo $fetch_info['address']; ?>"
                      required
                    ></textarea>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="contactno"
                            >Phone
                          </label>
                          <input
                            id="contactno"
                            name="contactno[]"
                            type="text"
                            value = "<?php echo $fetch_info['contactno']; ?>"
                            class="form-control validate"
                          />
                        </div>
                  </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit" value="submit">Update profile</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
</div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/moment.min.js"></script>
    <!-- https://momentjs.com/ -->
    <script src="js/Chart.min.js"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="js/tooplate-scripts.js"></script>  
</body>
</html>