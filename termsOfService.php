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
        <title>Docufix | Terms of Service</title>
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
                <h2 class="text-9 text-center">TERMS OF SERVICE</h2> 
                <button class="btn btn-primary mt-2 text-center">Updated November 2019</button>
            </div>
             
          <div class="row">
            <div class="col-sm-12 py-3 mx-auto">
              <div id="termsOfService" class="accordion accordion-alternate arrow-right">
                <div class="card">
                  <div id="heading1" class="card-header">
                    <h5 class="mb-0">
                      <a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">Introduction</a>
                    </h5>
                  </div> 
                      <div id="collapse1" aria-labelledby="heading1" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>Docufix.io (the "Site") and its services are maintained by HNG Tech and offered to you, the user ("You"), conditioned upon Your acceptance of the terms, conditions, and notices contained herein without modification (the "User Agreement"). <br>By clicking the "I Agree to the above Terms & Conditions" box below You: 
                          <ol>
                              <li>Represent that You have read and understand, and have the capacity and authority to enter into, this User Agreement; and </li>
                              <li>Agree to be bound by all of its terms and conditions.</li>
                          </ol>
                      </p>
                      <p><b>You should review this User Agreement carefully. If You breach the User Agreement, Your authorization to use the Site may automatically be terminated.</b></p>        
                  </div>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading2" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">Scope of Services</a>
                        </h5>
                      </div> 
                      <div id="collapse2" aria-labelledby="heading2" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>The Site offers certain document checking, plagiarism detection services (the "Services") which allows You to check Your papers for possible textual matches against Internet-available resources, HNG Tech own proprietary database, and databases licensed from other third parties. The Site is owned and operated by HNG TECH. The Site and Services are protected by Nigeria and international copyright and trademark laws.</p>     
                        </div>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading3" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3" class="collapsed">Suspension</a>
                        </h5>
                      </div> 
                      <div id="collapse3" aria-labelledby="heading3" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>HNG Tech may, in its sole discretion, suspend or terminate Your access to the Site and Services to </p>
                          <ol class="list-unstyled">
                              <li>(i) prevent damages to, or degradation of, the Services;</li>
                              <li>(ii) comply with any law, regulation, court order, or other governmental requests;</li>
                              <li>(iii) otherwise protect HNG TECH from potential legal liability; or (iv) address a breach of this User Agreement.</li>
                          </ol> </div>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading4" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4" class="collapsed">Privacy</a>
                        </h5>
                      </div> 
                      <div id="collapse4" aria-labelledby="heading4" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2"> 
                          <p>By entering this User Agreement, You further represent that You have read and understand the Privacy Policy (set forth at: "http://www.docufix.io/privacy") and agree to its terms</p>
                        </div>
                      </div>
                    </div> 
                    <div class="card">
                      <div id="heading5" class="card-header">
                        <h5 class="mb-0">
                          <a href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5" class="collapsed"> Warranty Disclaimer</a>
                        </h5>
                      </div> 
                      <div id="collapse5" aria-labelledby="heading5" data-parent="#termsOfService" class="collapse">
                        <div class="card-body px-5 py-2">
                          <p>THE SITE, SERVICES ARE PROVIDED "AS IS," WITH ALL FAULTS, AND "AS AVAILABLE". HNG TECH AND ITS LICENSORS DO NOT WARRANT THAT THE SITE, SERVICES WILL MEET YOUR REQUIREMENTS, OR THAT ANY RESULTS OR COMPARISONS GENERATED BY THE SITE WILL BE COMPLETE OR ACCURATE. HNG TECH DOES NOT WARRANT THAT ACCESS TO THE SITE OR THE OPERATION OF THE SERVICES OR LICENSED PROGRAMS WILL BE UNINTERRUPTED OR ERROR-FREE, OR THAT DEFECTS IN THE SITE WILL BE CORRECTED. TO THE FULLEST EXTENT PERMISSIBLE BY LAW, HNG TECH AND ITS LICENSORS DISCLAIM ALL REPRESENTATIONS AND WARRANTIES, EXPRESS, IMPLIED OR STATUTORY, INCLUDING, BUT NOT LIMITED TO, CONFORMITY TO ANY REPRESENTATION OR DESCRIPTION, MERCHANTABILITY, QUALITY OF INFORMATION, QUIET ENJOYMENT, TITLE, NON-INFRINGEMENT AND FITNESS FOR A PARTICULAR PURPOSE. THE SERVICES ARE ACCESSED AND USED OVER THE INTERNET. YOU ACKNOWLEDGE AND AGREE THAT HNG TECH DOES NOT OPERATE OR CONTROL THE INTERNET AND THAT: (I) VIRUSES, WORMS, TROJAN HORSES, OR OTHER UNDESIRABLE DATA OR SOFTWARE; OR (II) UNAUTHORIZED USERS (e.g., HACKERS) MAY ATTEMPT TO OBTAIN ACCESS TO AND DAMAGE YOUR DATA, COMPUTERS, OR NETWORKS. HNG TECH SHALL NOT BE RESPONSIBLE FOR SUCH ACTIVITIES.</p>  
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div id="heading6" class="card-header">
                          <h5 class="mb-0">
                            <a href="#" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6" class="collapsed">Limitation of Liability</a>
                          </h5>
                        </div> 
                        <div id="collapse6" aria-labelledby="heading6" data-parent="#termsOfService" class="collapse">
                          <div class="card-body px-5 py-2">
                              <p>NEITHER HNG TECH, NOR ITS LICENSORS, SUPPLIERS, AND THEIR RESPECTIVE AFFILIATES WILL BE LIABLE UNDER ANY THEORY FOR DAMAGES OF ANY KIND (INCLUDING WITHOUT LIMITATION DIRECT, INDIRECT, INCIDENTAL, CONSEQUENTIAL, EXEMPLARY DAMAGES OR DAMAGES RESULTING FROM LOST PROFITS, LOST DATA, OR BUSINESS INTERRUPTION) ARISING FROM THE YOUR USE OF THE SITE, REPORTS, SERVICES OR INFORMATION CONTAINED THEREIN, HOWEVER ARISING, EVEN IF HNG TECH, ITS LICENSORS, SUPPLIERS AND THEIR RESPECTIVE AFFILIATES HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.</p>          
                          </div>
                        </div>
                      </div>
                      <div class="card">
                          <div id="heading7" class="card-header">
                            <h5 class="mb-0">
                              <a href="#" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7" class="collapsed">External Hyperlinks</a>
                            </h5>
                          </div> 
                          <div id="collapse7" aria-labelledby="heading7" data-parent="#termsOfService" class="collapse">
                            <div class="card-body px-5 py-2">
                                <p>The Site may contain hyperlinks to third party Web sites. External hyperlinks to or from the Site do not constitute HNG TECH endorsement of, affiliation with, or recommendation of any third party or its Web site, products, resources or other information. HNG TECH is not responsible for any software, data or other information available from any third party Website. You are solely responsible for complying with all terms and conditions of use for the third party sites. You acknowledge that HNG TECH shall have no liability for any damage or loss arising from Your access to, use of or reliance on any third party Website, software, data, or other information.</p>         
                               
                            </div>
                          </div>
                        </div>
                        <div class="card">
                            <div id="heading8" class="card-header">
                              <h5 class="mb-0">
                                <a href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8" class="collapsed">General</a>
                              </h5>
                            </div> 
                            <div id="collapse8" aria-labelledby="heading8" data-parent="#termsOfService" class="collapse">
                              <div class="card-body px-5 py-2">
                                  
                                      <p>This User Agreement is governed by Nigerian laws. You hereby consent to the exclusive jurisdiction and venue of federal courts in NIgeria, in all disputes arising out of or relating to the use of the Site or the Services. HNG TECH performance of this User Agreement is subject to existing laws and legal process, and nothing contained in this User Agreement is in derogation of HNG TECH right to comply with law enforcement requests or requirements relating to Your use of the Site or the Services or information provided to or gathered by HNG TECH with respect to such use. You agree that any claim or cause of action arising out of or related to the Site or the Services must be commenced within one (1) year after the cause of action arose. Otherwise, such claim or cause of action is barred forever. If any part of this User Agreement is determined to be invalid or unenforceable pursuant to applicable law including, but not limited to, the warranty disclaimers and liability limitations set forth above, then the invalid or unenforceable provision will be deemed superseded by a valid, enforceable provision that most closely matches the intent of the original provision; the remainder of the User Agreement shall continue in effect. A printed version of this User Agreement and of any notice given in electronic form shall be admissible in judicial or administrative proceedings based upon or relating to the User agreement to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form. This User Agreement constitutes the entire agreement between You and HNG TECH with regard to its subject matter and supersedes any and all prior negotiations, representations and agreements, whether written or oral, between the parties.</p>
                                      <p>Your privacy is important to us HNGI is the educational division of HNG TECH, a company that, as a part of its services, must collect and store specific, private information from its users. As such, HNG TECH adheres to the privacy principles enforced at all HNG TECH web sites. To better protect your privacy we provide this Privacy Policy explaining our online information practices and the choices you can make about the way your personal information is collected and used. This Privacy Policy applies to all personally identifiable information collected or submitted on the <a href="index.php">http://www.docufix.ga</a> website (the "Site"). To make this Privacy Policy easy to find, we make it available on all our pages.</p>
                                      <p>This Site in the future might provide links to third-party web sites, they are not covered by this Privacy Policy. HNG TECH assumes no responsibility for the privacy or security of information you provide to any third party through linked web sites or any other means. By using this Site, you agree that you have reviewed and understood our Usage Policy and this Privacy Policy to your full satisfaction, that you accept and are subject to our Usage Policy and this Privacy Policy.</p>
                                     
                              </div>
                            </div>
                          </div>
                          <div class="card">
                              <div id="heading9" class="card-header">
                                <h5 class="mb-0">
                                  <a href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9" class="collapsed">Changes to this Policy</a>
                                </h5>
                              </div> 
                              <div id="collapse9" aria-labelledby="heading9" data-parent="#termsOfService" class="collapse">
                                <div class="card-body px-5 py-2">
                                    <p>We reserve the right to make changes to this Privacy Policy at any time. Please check the Privacy Policy when you use the Site to ensure that you are aware of any changes in our privacy practices. Our Privacy Policy will indicate the date it was last updated.</p>
                                          
                                </div>
                              </div>
                            </div>
                            <div class="card">
                                <div id="heading10" class="card-header">
                                  <h5 class="mb-0">
                                    <a href="#" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10" class="collapsed">Notices</a>
                                  </h5>
                                </div> 
                                <div id="collapse10" aria-labelledby="heading10" data-parent="#termsOfService" class="collapse">
                                  <div class="card-body px-5 py-2">
                                      <p>Please direct all inquiries regarding the Privacy Policy as follows: Contact us by email at legal@docufix.ga In the subject line, type "HNG TECH Privacy Policy."</p>    
                                   </div>
                                </div>
                              </div>
           <div class="text-center mt-2"> 
                <a href="disclaimer.php" class="btn  px-3  btn btn-primary text-center" id="disclaimer">Disclaimer</a>
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