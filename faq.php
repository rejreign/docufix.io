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
        <title>Docufix | FAQ</title>
        <meta name="description" content="terms of service">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="stylesheet" type="text/css" href="css/termsOfService.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    </head>
    <body>
        <!--Header-->
        <header>
          <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1572949531/docufix/Group_1_3_pqdphq.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span><i class="fa fa-bars" aria-hidden="true" id="toggle"></i></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5" id="navlink">
                <li class="nav-item">
                  <a class="nav-link text-center" href="about_us.php">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-center" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tools
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-justify" href="fileUpload.php">Compare files</a>
                    <a class="dropdown-item text-justify" href="grammarChecker.php">Grammar Check</a>
                    <a class="dropdown-item text-justify" href="fileDuplicate.php">Duplicates Check</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" href="teampage.php">Our Team</a>
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
    <!--Main-->  
      
    <section class="section">
          <div class="container mb-0">
            <div class="text-center mb-2" id="Introduction">
                <h2 class="text-9 text-center">Frequently asked questions</h2> 
                
            </div>
             
          <div class="row">
            <div class="col-sm-12 py-3 mx-auto">
              <div id="termsOfService" class="accordion accordion-alternate arrow-right">
                <div class="card">
                  <div id="heading1" class="card-header">
                    <h5 class="mb-0">
                      <a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">How does Docufix work?</a>
                    </h5>
                  </div> 
                      <div id="collapse1" aria-labelledby="heading1" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>Docufix makes it easier for users to compare contents of thier documents, find out differences contained in documents, remove duplicates and check for grammatical errors.</p>        
                  </div>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading2" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">How can I compare my documents?</a>
                        </h5>
                      </div> 
                      <div id="collapse2" aria-labelledby="heading2" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>Instructions on how to compare documents can be found on the Compare files page. Just click on instructions.</p>     
                        </div>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading3" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed">What type of documents does Docufix support?</a>
                        </h5>
                      </div> 
                      <div id="collapse3" aria-labelledby="heading3" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>Docufix only supports file formats like .docx, .csv, .json, .xml .txt .pdf, .rtf, .odt, .php, .xpt, .ods, .xls, .epud, .css and .dta</p>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading4" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">Do I need to download or install anything to use your service?</a>
                        </h5>
                      </div> 
                      <div id="collapse4" aria-labelledby="heading4" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2"> 
                          <p>No. This is a web-based service -- you do NOT download anything. All processing takes place on our server and the results are displayed in your browser.</p>
                        </div>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading5" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"> How long does it take to compare documents?</a>
                        </h5>
                      </div> 
                      <div id="collapse5" aria-labelledby="heading5" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>This is an automated service, so the analysis is produced in real-time. It's unusual for you to wait more than one minute, and usually much less than that.</p> 
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div id="heading6" class="card-header">
                          <h5 class="mb-0">
                            <a href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed">How can I print or download a copy of the result?</a>
                          </h5>
                        </div> 
                        <div id="collapse6" aria-labelledby="heading6" data-parent="#termsOfService" class="collapse">
                          <div class="card-body px-5 py-2">
                              <p>The results page includes a printable report link. Depending on your computer or device, you may be able to print this to a PDF or docx file. You can also send your results to an email address</p>          
                          </div>
                        </div>
                      </div>
                      
          </section>    
        </main>

 

        <!--Footer-->
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