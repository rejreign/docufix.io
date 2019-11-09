<?php
include('connect.php');

$message = '';
    
if(isset($_POST['submit'])){
        $userFirstName = mysqli_escape_string($conn, $_POST ['firstname']);
        $userLastName = mysqli_escape_string($conn, $_POST ['lastname']);
        $userEmail = mysqli_escape_string($conn, $_POST['email']);
        $userNewPassword = mysqli_escape_string($conn, $_POST['password']);
        $userVerifyPassword = mysqli_escape_string($conn, $_POST['verify_password']);
       
        if(empty($userFirstName) || empty($userLastName) || empty($userEmail) || empty($userNewPassword) || empty($userVerifyPassword)){
            die ("All fields are Required");
            }
            if ( strlen ( $userFirstName ) < 2 || strlen ( $userFirstName ) > 50) {
                $message = '<div class="alert alert-danger" role="alert">First name must be between 1 and 55 characters</div>';
                echo $message;
                }
                if ( strlen ( $userLastName ) < 2 || strlen ( $userLastName ) > 50) {
                $message = '<div class="alert alert-danger" role="alert">Last name must be between 1 and 55 characters</div>';
                echo $message;
                }
                if ( strlen ( $userEmail ) < 2 || strlen( $userEmail ) > 250) {
                $message = '<div class="alert alert-danger" role="alert">Email must be between 1 and 254 characters</div>';
                echo $message;
                }
                if ( strlen ( $userNewPassword ) < 8) {
                $message = '<div class="alert alert-danger" role="alert">Password should be at least 8 characters long</div>';
                echo $message;
                }
                if($userNewPassword === $userVerifyPassword){
                    $userNewPassword = password_hash($userNewPassword, PASSWORD_DEFAULT);
                }
                else{
                    die ("Error: Password does not match". "<br>");
                }




                $sql = "SELECT email FROM users WHERE email = '$userEmail' ";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    $message = '<p class="text-warning">Email address exists</p>';
                                         echo $message;
                 // echo 'Email address exists';
                   }

                else { 

                    $sql = "INSERT INTO users(firstname, lastname, email, password)
                    VALUES('$userFirstName', 
                            '$userLastName',
                            '$userEmail',
                            '$userNewPassword'       )";
                           
                           $result = mysqli_query($conn , $sql);
                    if($result){
                                    $message .= '<div class="alert alert-success" role="alert">
                                    Sign up successful <button class="btn"><a href = "index.php">Home</a></button></div>';
                                            echo ($message);

                                            $_SESSION['login_user'] = $userEmail;
                                            $_SESSION['loggedin'] = true;
                                            $_SESSION['firstname'] = $result['firstname'];
                                            $_SESSION['lastname'] = $result['lastname'];
                                            $_SESSION['login_id'] = $result['id'];
                                            $_SESSION['registered_date'] = $result['created_at'];

                                            header("location: login.php");

                    }
                    else{
                        $message .= '<div class="alert alert-danger" role="alert">
                        Sign up unsuccesful. ' . mysqli_error($conn) . '<button class="btn"><a href = "index.php">Home</a></button>
                        </div>';
                    
                    }

                }


    }
 ?>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <meta name="theme-color" content="#333" />
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/sign.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <title>DOCUFIX</title>
</head>
<body>
    <header>
        <div class="header-wrapper">
            <div class="header-logo">
                <a class="navbar-brand  " href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
            </div>
            
            <a href="login.php" class="link">Sign in</a>
        </div>
    </header>

    <section class="sign-in-container animated finite pulse">
        <h3>Welcome, create your account</h3>
        <div class="sm-txt">
            <p>Enter your full name, email, and password to  create an account</p>
        </div>
        <form method="POST" action="">

            <div class="">
                <input type="text" id="name" name="firstname" placeholder="First Name" pattern="[a-zA-Z]{1,}" data-toggle="tooltip" data-placement="bottom" title="Enter Your First Name" required><span class="error"></span>
            </div>

            <div class="">
                <input type="text" id="name" name="lastname" placeholder="Last Name"  pattern="[a-zA-Z]{1,}" data-toggle="tooltip" data-placement="bottom" title="Enter Your Last Name" required><span class="error"></span>
            </div>

            <div class="">
                <input type="email" aria-describedby="emailHelp" placeholder="Your email address" id="emailAddress" name="email"  data-toggle="tooltip" data-placement="bottom" title="Please enter a valid Email Address" required><span class="error"></span>
            </div>

            <div class="">
                <input type="password" name="password" id="password" class="form-control" placeholder="Your password" data-toggle="tooltip" data-placement="bottom"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>

            <div class="">
                <input type="password" name="verify_password" id="confirmPassword" placeholder="Confirm password" data-toggle="tooltip" data-placement="bottom" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><span class="error"></span>
            </div>
            <button id="submitData" name="submit" type="submit"  >
                    Sign Up
                </button>
            <!-- <h3 class="col-lg-8 text-center">OR</h3> 
            <div class=" btn-grp col-lg-7  justify-content-between">

                <DIV class="col-lg-4">
                    <button id="submitData" name="submit" type="submit" class="btn facebook " >
                        <i class="fab fa-facebook-f pr-2"></i>
                        Register with facebook
                    </button>
                </DIV>
                <DIV class="col-lg-4">
                    <button id="submitData" name="submit" type="submit" class="btn google " >
                        <i class="fab fa-google-plus-g pr-2"></i>
                        Register with google
                    </button>
                </DIV>
            </div>-->

        </form>
        <span class="error"></span>
    </section>
    <footer id="footer">
          <div class="container mt-3"><hr>
            <div class="row">
                <div class="col-sm-6" id="docufix">
                    <a class="navbar-brand  text-justify" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
                    <p class="text-justify">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
                </div>
              <div class="col-sm-6 text-center">           
                  <ul class="list-inline text-center mt-3 pl-3">  
                      <li class="list-inline-item">
                        <a class="text-center" href="contact.php">Contact us</a>
                      </li>
                      <li class="list-inline-item">
                          <a class="text-center" href="faq.php">FAQs</a>
                        </li>
                       <li class="list-inline-item">
                          <a class="text-center" href="privacy.php">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.php">Terms of Service</a>
                          </li>
                      
                    </ul>
              </div>
            </div>
          </div>
      </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/account.js" ></script>
        <script src="app.js"></script>
</body>
</html>