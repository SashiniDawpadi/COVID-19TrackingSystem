<!DOCTYPE html>
<html>
<head>
<title> View User details </title>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product user CSS Template
	https://templatemo.com/tm-524-product-user
	-->
</head>
<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="">
                    <h1 class="tm-site-title mb-0">User</h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars tm-nav-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto h-100">
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/webproject/User/Signup&login/home.php">
                                <i class="fas fa-home"></i>
                                Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
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
								<a class="nav-link" href="http://localhost/webproject/User/review/input.php">
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


        <div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
            <form name="frmUser" method="post" action="">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">FULL NAME</th>
                    <th scope="col">AGE</th>
                    <th scope="col">GENDER</th>
                    <th scope="col">NIC</th>
                    <th scope="col">Contact no</th>
                    <th scope="col">Address</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                
                <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="SELECT id,name,age,gender,nic,contactno,address FROM user";

$result=$conn->query($sql);
$i=0;

if($result-> num_rows > 0){
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["age"]; ?></td>
<td><?php echo $row["gender"]; ?></td>
<td><?php echo $row["nic"]; ?></td>
<td><?php echo $row["contactno"]; ?></td>
<td><?php echo $row["address"]; ?></td>
</tr>
<?php
$i++;
}
}
else{    
}
$conn->close();
?>
</tbody>
</table>
</form>
</div>
            <!-- table container -->
            <a
              href="http://localhost/webproject/user/Add%20user/input.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new user</a>
            
          </div>
        </div>
        </div>
        </div>
        <script language="javascript" src="users.js" type="text/javascript"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</body>
</html>