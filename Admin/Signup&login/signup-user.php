<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700"/>
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
</head>

<script>  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }
}  
</script> 

<body>
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Welcome to Tracking System<br> Signup</h2>
              </div>
            </div>
            
                    
            <div class="row mt-2">
              <div class="col-12">
                <form name="myform" action="signup-user.php" method="POST" autocomplete="" onsubmit="return validateform()" class="tm-login-form">
                <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                <div class="form-group">
                    <label for="email">Full name</label>
                    <input
                      name="name"
                      type="text"
                      class="form-control validate"
                      id="email"
                      required value="<?php echo $name ?>"
                  
                    />
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input
                      name="email"
                      type="email"
                      class="form-control validate"
                      id="email"
                      required value="<?php echo $email ?>"
                    
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input
                      name="password"
                      type="password"
                      class="form-control validate"
                      id="password"
                
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="cpassword">Confirm Password</label>
                    <input
                      name="cpassword"
                      type="password"
                      class="form-control validate"
                      id="cpassword"
                     
                      required
                    />
                  </div>
                  <div class="form-group mt-4">
                    <button type="submit" name="signup" value="Signup" class="btn btn-primary btn-block text-uppercase">
                      Sign up
                    </button>
                  </div>
                  <button class="mt-5 btn btn-primary btn-block text-uppercase">
                  <a href="login-user.php"> Already a member? Log in</a>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
</body>
</html>