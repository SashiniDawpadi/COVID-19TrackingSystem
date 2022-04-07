<!DOCTYPE html>
<html>
<head>
    <title>Add user details</title>

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
<address>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['submit'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
	    $age   = stripslashes($_REQUEST['age']);
        $age    = mysqli_real_escape_string($con, $age);
        $gender    = stripslashes($_REQUEST['gender']);
        $gender    = mysqli_real_escape_string($con, $gender);
 	    $nic   = stripslashes($_REQUEST['nic']);
        $nic    = mysqli_real_escape_string($con, $nic);
 	    $contactno    = stripslashes($_REQUEST['contactno']);
        $contactno    = mysqli_real_escape_string($con, $contactno);
        $address    = stripslashes($_REQUEST['address']);
        $address    = mysqli_real_escape_string($con, $address);

        $gender=$_POST["gender"];

            $query    = "INSERT into `user` (name,age,gender,nic,address,contactno)
            VALUES ('$name','$age','$gender','$nic','$address','$contactno')";
           $result   = mysqli_query($con, $query);
  
        if ($result) {
             echo" <div class='container tm-mt-big tm-mb-big'>
             <div class='row'>
               <div class='col-12 mx-auto tm-login-col'>
                 <div class='tm-bg-primary-dark tm-block tm-block-h-auto'>
                   <div class='row'>
                     <div class='col-12 text-contactno'>
                       <h2 class='tm-block-title mb-4'>You are registered successfully<br>
                       Click here to <a href='http://localhost/webproject/User/Signup&login/home.php'>Home</a></h2>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>";
        } else {
            echo " <div class='container tm-mt-big tm-mb-big'>
            <div class='row'>
              <div class='col-12 mx-auto tm-login-col'>
                <div class='tm-bg-primary-dark tm-block tm-block-h-auto'>
                  <div class='row'>
                    <div class='col-12 text-contactno'>
                      <h2 class='tm-block-title mb-4'>Required fields are missing<br>
                      Click here to <a href='input.php'>resubmit</a>again</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>";
        }
    } else {
?>
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

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add User details</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label for="name">Full Name</label>
                    <input
                      id="name"
                      name="name"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="age"
                      >Age</label
                    >
                    <input
                      id="age"
                      name="age"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="gender"
                      >Gender</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="gender"
                      name="gender"
                    >
                      <option selected>Select category</option>
                      <option value="Male" name="Male">Male</option>
                      <option value="Female" name="Female">Female</option>
                      <option value="Other" name="Other">Other</option>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="nic"
                            >NIC
                          </label>
                          <input
                            id="nic"
                            name="nic"
                            type="text"
                            class="form-control validate"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="contactno"
                            >Contact No
                          </label>
                          <input
                            id="contactno"
                            name="contactno"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>
                  </div>

                  <div class="form-group mb-3">
                    <label
                      for="address"
                      >Address</label
                    >
                    <textarea                    
                      class="form-control validate tm-small"
                      rows="5"
                      name="address"
                      required
                    ></textarea>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" type="file" name="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD User IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit">Add User</button>
              </div>
            </form>
      
          </div>
        </div>
      </div>
    </div>
<?php
    }
?>
   <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    
</address>
</html>
