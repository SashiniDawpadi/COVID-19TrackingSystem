<!DOCTYPE html>
<html>
<head>
    <title>Add patient details</title>

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
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
 
</head>
<body>
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
 	    $quarantine   = stripslashes($_REQUEST['quarantine']);
        $quarantine    = mysqli_real_escape_string($con, $quarantine);
 	    $center    = stripslashes($_REQUEST['center']);
        $center    = mysqli_real_escape_string($con, $center);
        $identifieddate    = stripslashes($_REQUEST['identifieddate']);
        $identifieddate    = mysqli_real_escape_string($con, $identifieddate);




        $gender=$_POST["gender"];
        $quarantine=$_POST["quarantine"];

            $query    = "INSERT into `patient` (name,age,gender,quarantine,identifieddate,center)
            VALUES ('$name','$age','$gender','$quarantine','$identifieddate','$center')";
           $result   = mysqli_query($con, $query);
  
        if ($result) {
             echo" <div class='container tm-mt-big tm-mb-big'>
             <div class='row'>
               <div class='col-12 mx-auto tm-login-col'>
                 <div class='tm-bg-primary-dark tm-block tm-block-h-auto'>
                   <div class='row'>
                     <div class='col-12 text-center'>
                       <h2 class='tm-block-title mb-4'>You are registered successfully<br>
                       Click here to <a href='http://localhost/webproject/Admin/Signup&login/home.php'>Home</a></h2>
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
                    <div class='col-12 text-center'>
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

                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
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
                            <a class="nav-link" href="http://localhost/webproject/Admin/Message/input.php">
                                <i class="fas fa-envelope"></i>
                                Mail
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="accounts.html">
                                <i class="far fa-user"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link" href="http://localhost/webproject/Admin/Signup&login/logout-user.php">
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
                <h2 class="tm-block-title d-inline-block">Add Patient details</h2>
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
                            for="identifieddate"
                            >Identified Date
                          </label>
                          <input
                            id="identifieddate"
                            name="identifieddate"
                            type="date"
                            class="form-control validate"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="center"
                            >Tested center
                          </label>
                          <input
                            id="center"
                            name="center"
                            type="text"
                            class="form-control validate"
                            required
                          />
                        </div>

                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                    <label
                      for="quarantine"
                      >Quarantine report</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="quarantine"
                      name="quarantine"
                    >
                      <option selected>Select category</option>
                      <option value="Positive" name="Positive">Positive</option>
                      <option value="Negative" name="Negative">Negative</option>
                      <option value="Under quarantine" name="Under quarantine">Under quarantine</option>
                    </select>
                  </div>
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
                    value="UPLOAD PATIENT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit">Add Patient</button>
              </div>
            </form>
            </div>
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
    
</body>
</html>
