<?php
  include 'controller.php';
?>
<!DOCTYPE html>
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Docufix | Disclaimer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#3B1F9E" />
    <link rel="manifest" href="manifest.json" />
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/header&footer.css">
    <link rel="stylesheet" href="css/disclaimer.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <!--Header-->
     <header>
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar" id="nav">
            <a class="navbar-brand" href="index.php" id="logo">
              <img src="https://res.cloudinary.com/kuic/image/upload/v1573054016/docufix/Group_1_5_olg2uj.svg" alt="DOCUFIX" class="image">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" id="btn">
              <span><i class="fa fa-bars" aria-hidden="true" id="toggle"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav text-center ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="about_us.php">About Us</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="fileupload.php">Compare files</a>
                    <a class="dropdown-item" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item" href="filedelimiter.php">Check for duplicates</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="teampage.php">Our Team</a>
                </li>
                  <?php
                  if(!isset($_SESSION['login_user'])){
                  echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="signup.php">Get Started</a>
                </li>
                  ';


                }
                else
                {
                    echo '
                  <li class="nav-item">
                    <a class="nav-link text-center" href="profile.php">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="logout.php">logout</a>
                </li>
                  ';
                }
                ?>
              </ul>
            </div>
          </nav>
        </header>
    <!-- Disclaimer area -->
    <main>
        <section id="Introduction" class="text-center mb-3">
            <div class="text-center">
                  <h3>DISCLAIMER</h3>
                  <!-- <button class="btn btn-primary mt-2 text-center">Updated November 2019</button>          -->
            </div> 
          </section>
          <div class="container" id="container">
            <div class="row mt-3">
                <div class="col">
                    <p class="text-justify">
                        The materials in this site are provided "as is" and without warranties of any kind either expressed or implied. 
                        To the fullest extent permissible under applicable law, Docufix disclaims all warranties, expressed or implied, 
                        including, but not limited to, implied warranties of merchantability and fitness for a particular purpose. Docufix 
                        does not warrant that the functions contained in the materials will be uninterrupted or error-free, that defects will 
                        be corrected, or that this site or the server that makes it available are free of viruses or other harmful components.
                        <br>
                        Docufix does not warrant or make any representations regarding the use or the results of the use of the materials in this 
                        site regarding their correctness, accuracy, reliability, or otherwise. You (and not Docufix) assume the entire cost of all 
                        necessary servicing, repair, or correction. Applicable law may not allow the exclusion of implied warranties, so the above 
                        exclusion may not apply to you.
                        <br>                 
                    </p>
                    <h5 class="pt-4"> <strong> Trademarks </strong> </h5>
                    <p class="text-justify">
                        Docufix (including product names, company name, and relevant logos) are trademarks of Docufix. 2019.
                    </p>
                    <h5 class="pt-4"> <strong>Copyright</strong></h5>
                    <p>
                        Docufix software products are copyright of Docufix. 2019.
                    </p>
                    <h5 class="pt-4"><strong>Limitation of Liability </strong></h5>
                    <p class="text-justify">
                        Under no circumstances, including, but not limited to, negligence, shall Docufix be liable for any special or consequential 
                        damages that result from the use of, or the inability to use, the materials on this site, even if Docufix or a Docufix authorized 
                        representative has been advised of the possibility of such damages. Applicable law may not allow the limitation or exclusion of 
                        liability or incidental or consequential damages, so the above limitation or exclusion may not apply to you.
                    </p>
                    <p class="text-justify mb-5">
                        In no event shall Docufix total liability to you for all damages, losses, and causes of action whether in contract, tort 
                        (including, but not limited to, negligence), or otherwise exceed the amount paid by you, if any, for accessing this site.
                    </p>
                    <div class="text-left"> 
                      <a href="index.php" class="btn  px-5  btn-outline-dark text-center" style="font-weight: bold;margin-bottom:20px;">Get Started</a>
                    </div>
                </div>
            </div>
          </div>

      <!-- <section class="text-center main-background">
        <div class="disclaimer-text">
            <h2 class="text-white">DISCLAIMER</h2>
            <button class="btn btn-light updated-button">Updated November 2019</button>
        </div>
      </section>
      <section class="container mt-3 mb-5">
          <div class="card shado disclaimer-area">
              <div class="row py-5 card-body">
              <div class="col">
                  <p class="text-justify">
                      The materials in this site are provided "as is" and without warranties of any kind either expressed or implied. 
                      To the fullest extent permissible under applicable law, Docufix disclaims all warranties, expressed or implied, 
                      including, but not limited to, implied warranties of merchantability and fitness for a particular purpose. Docufix 
                      does not warrant that the functions contained in the materials will be uninterrupted or error-free, that defects will 
                      be corrected, or that this site or the server that makes it available are free of viruses or other harmful components.
                      <br>
                      Docufix does not warrant or make any representations regarding the use or the results of the use of the materials in this 
                      site regarding their correctness, accuracy, reliability, or otherwise. You (and not Docufix) assume the entire cost of all 
                      necessary servicing, repair, or correction. Applicable law may not allow the exclusion of implied warranties, so the above 
                      exclusion may not apply to you.
                      <br>                 
                  </p>
                  <h5 class="pt-4"> <strong> Trademarks </strong> </h5>
                  <p class="text-justify">
                      Docufix (including product names, company name, and relevant logos) are trademarks of Docufix. 2019.
                  </p>
                  <h5 class="pt-4"> <strong>Copyright</strong></h5>
                  <p>
                      Docufix software products are copyright of Docufix. 2019.
                  </p>
                  <h5 class="pt-4"><strong>Limitation of Liability </strong></h5>
                  <p class="text-justify">
                      Under no circumstances, including, but not limited to, negligence, shall Docufix be liable for any special or consequential 
                      damages that result from the use of, or the inability to use, the materials on this site, even if Docufix or a Docufix authorized 
                      representative has been advised of the possibility of such damages. Applicable law may not allow the limitation or exclusion of 
                      liability or incidental or consequential damages, so the above limitation or exclusion may not apply to you.
                  </p>
                  <p class="text-justify">
                      In no event shall Docufix total liability to you for all damages, losses, and causes of action whether in contract, tort 
                      (including, but not limited to, negligence), or otherwise exceed the amount paid by you, if any, for accessing this site.
                  </p>
                  <a href="signup.php">Get Started</a>
              </div>
              </div>
          </div>
      </section> -->
    </main>


     <!--Footer-->
     <footer id="footer">
      <div class="container"><hr>
        <div class="row mt-5">
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

      <script src="js/app.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script>
        var SCROLLING_NAVBAR_OFFSET_TOP = 50;
            $(window).on("scroll", function() {
            var $navbar = $(".navbar");

            if ($navbar.length) {
            if ($navbar.offset().top > SCROLLING_NAVBAR_OFFSET_TOP) {
                $(".scrolling-navbar").addClass("top-nav-collapse");
            } else {
                $(".scrolling-navbar").removeClass("top-nav-collapse");
            }
            }
            });
      </script>
</body>
</html>