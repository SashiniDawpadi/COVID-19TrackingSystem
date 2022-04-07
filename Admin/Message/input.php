<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>

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
                    //first we leave this input field blank
                    $recipient = "";
                    $subject ="";
                    $body = "";
                    //if user click the send button
                    if(isset($_POST['submit'])){
                        //access user entered data
                       $recipient = $_POST['email'];
                       $subject = $_POST['subject'];
                       $body = $_POST['body'];
                       $sender = "";
                       //if user leave empty field among one of them
                         $conn = mysqli_connect("localhost", "root", "", "web") or die("Connection Error: " . mysqli_error($conn));
mysqli_query($conn, "INSERT INTO message (subject,body,email) VALUES ('" . $subject. "', '" . $body. "','" . $recipient. "')");
$insert_id = mysqli_insert_id($conn);
if(!empty($insert_id)) {
$message = "Your contact information is saved successfully";
}
                       if(empty($recipient) || empty($subject) || empty($body))
                       {
                           ?>
                           <!-- display an alert body if one of them field is empty -->
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!"?>
                            </div>
<?php
                        }else{
                            // PHP function to send mail
                           if(mail($recipient, $subject, $sender,$body)){
                            ?>
                            <!-- display a success body if once mail sent sucessfully -->
                            <div class="alert alert-success text-center">
                                <?php echo "Your mail successfully sent to $recipient"?>
                            </div>
<?php
                           $recipient = "";
                           }else{
                            ?>
                            <!-- display an alert body if somehow mail can't be sent -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
<?php
                           }
                       }
                    }
                ?> <!-- end of php code -->

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
                            </a>
                        </li>
                        <li class="nav-item dropdown">

                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
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
                            <a class="nav-link active" href="http://localhost/webproject/Admin/Message/input.php">
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
                <h2 class="tm-block-title d-inline-block">Send message to users</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form action="input.php" method="post" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="email"
                      >To
                    </label>
                    <input
                      id="email"
                      name="email"
                      type="email"
                      value=""
                      class="form-control validate"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Subject
                    </label>
                    <input
                      id="subject"
                      name="subject"
                      type="text"
                      value=""
                      class="form-control validate"
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="body"
                      >Body</label
                    >
                    <textarea                    
                      class="form-control validate tm-small"
                      rows="5"
                      name="body"
                      required
                    ></textarea>
                  </div>
          
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="submit">Send</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
   <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    
</body>
</html>
