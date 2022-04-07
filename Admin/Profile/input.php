<?php
require_once "db.php";

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["id"]);
for($i=0;$i<$usersCount;$i++) {
mysqli_query($con, "UPDATE signup set name='" . $_POST['name'][$i] . "', email='" . $_POST['email'][$i] . "',password='" . $_POST["password"][$i] . "',contactno='" . $_POST["contactno"][$i] . "', address='" . $_POST["address"][$i] . "' WHERE id='" . $_POST["id"][$i] . "'");
}
header("Location:test1.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin profile</title>

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
                            <a class="nav-link" href="products.html">
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
                <h2 class="tm-block-title d-inline-block">Profile settings</h2>
              </div>
            </div>
            <?php
$rowcount = count($_POST["signup"]);
for($i=0;$i<$rowcount;$i++) {
$result = mysqli_query($con, "SELECT * FROM signup WHERE id='" . $_POST["signup"][$i] . "'");
$row[$i]= mysqli_fetch_array($result);
?>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form name=" frmuser" action="" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                  <input type="hidden" name="id[]" class="txtField" value="<?php echo $row[$i]['id']; ?>">
                    <label for="name">Full Name</label>
                    <input
                      id="name"
                      name="name[]"
                      type="text"
                      value = "<?php echo $row[$i]['name']; ?>"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="email"
                      >email</label
                    >
                    <input
                      id="email"
                      name="email[]"
                      type="email"
                      value = "<?php echo $row[$i]['email']; ?>"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="password"
                      >password</label
                    > 
                     <input
                      id="password"
                      name="password[]"
                      type="password"
                      value = "<?php echo $row[$i]['password']; ?>"
                      class="form-control validate"
                      required
                    />
                  
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="contactno"
                            >Contact no
                          </label>
                          <input
                            id="contactno"
                            name="contactno[]"
                            type="text"
                            class="form-control validate"
                            data-large-mode="true"
                          />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                            for="address"
                            >address
                          </label>
                          <input
                            id="address"
                            name="address[]"
                            type="text"
                            value = "<?php echo $row[$i]['address']; ?>"
                            class="form-control validate"
                            required
                          />
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
                    value="UPLOAD PATIENT IMemail"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit" value="submit">Update Patient</button>
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
          <script languemail="javascript" src="users.js" type="text/javascript"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
   
</body>
</html>
