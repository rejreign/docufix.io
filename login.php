<?php
      include('connect.php');
      include 'controller.php';

     

?>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151906986-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-151906986-1');
</script>
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
    <title>DOCUFIX | Signin</title>
</head>
<body>
    <header>
        <div class="header-wrapper">
            <div class="header-logo">
                <a class="navbar-brand  " href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
            </div>
            
            <a href="signup.php" class="link">Sign up</a>
        </div>
    </header>

    <section class="sign-in-container animated finite pulse">
        <h3>Sign in to DOCUFIX</h3>
           <?php
                   

                               
                  

                   
                    $message = ''; 
                    if(isset($_POST['submit'])){
                        // userEmail and userPassword sent from form 
                        
                        $userEmail = mysqli_real_escape_string($conn,$_POST['email']);
                        $userPassword = mysqli_real_escape_string($conn,$_POST['password']);    


                        $sql1 = "Select * from users where email = '$userEmail'";
                        $query = mysqli_query($conn, $sql1) or die(mysql_error());
                        $result = mysqli_fetch_assoc($query);
                        $count = mysqli_num_rows($query);
                        if ($count === 1 ) {

                                if (password_verify($userPassword, $result["password"])) {

                                    $_SESSION['login_user'] = $userEmail;
                                    $_SESSION['loggedin'] = true;
                                    $_SESSION['firstname'] = $result['firstname'];
                                    $_SESSION['lastname'] = $result['lastname'];

                                    $_SESSION['login_id'] = $result['id'];
                                    $_SESSION['registered_date'] = $result['created_at'];
                                    // $_SESSION['plan'] = $result['plan']
                                    if(isset($_GET['redirect'])){
                                        $redirect= $_GET['redirect'];

                                        header('location: '.$redirect.'');
       
                                      }
                                      else{
                                         header("location: profile.php");
                                      }
                                   
                                }
                                else { 
                                         $message = '<p class="text-warning">Invalid login credentials</p>';
                                         echo $message;
                                }
                            } 
                            else {
                            $message = '<p class="text-warning">Invalid login credentials</p>';
                           echo $message;
                        }
                    }

                    ?>
                    
        <div class="sm-txt">
            <p>Enter your email and password</p>
        </div>
        <form method="POST" action="">

            <div class="">
                <input type="email" class="" aria-describedby="emailHelp" placeholder="Email address" id="emailAddress" name="email"  data-toggle="tooltip" data-placement="bottom" title="Please enter a your Email Address" required><span class="error"></span>
            </div>

            <div class="">
                <input type="password" class="" name="password" id="password" placeholder="Password" data-toggle="tooltip" data-placement="bottom" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><span class="error"></span>
            </div>
            <button id="submitData" name="submit" type="submit" class=""  >
                        Continue
                    </button>
                    <a href="sendrecoveryemail.php" class="forgot__pass__link">Forgot password?</a>
                    <p class="Already-acc">Don't have an account?&nbsp;&nbsp; <a href="signup.php"><span>Sign up</span></a></p>
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