<?php
  include 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/header&footer.css">
	  <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
      <link rel="stylesheet" type="text/css" href="css/teampage.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	 	
       
    <script type="text/javascript" src ="//widget.instabot.io/jsapi/rokoInstabot.js" crossorigin>
	apiKey: "vXj90M2ifAvu8fS739jFKepTXtES72ur59sGR5TPK9c="
	</script>

</head>
<body>
	<!--Header-->
	<header>
          <nav class="navbar navbar-expand-lg navbar-light scrolling-navbar fixed-top">
            <a class="navbar-brand px-sm-5 ml-3" href="index.php"><img src="https://res.cloudinary.com/kuic/image/upload/v1573054016/docufix/Group_1_5_olg2uj.svg" alt="DOCUFIX" id="image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto px-5">
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
                  <a class="nav-link text-center" href="logout.php">Logout</a>
                </li>
                  ';
                }
                ?>
                
              </ul>
            </div>
          </nav>
  </header>
    <main> 
     <!--  TEAM -->
     <section id="team">
            <div class="content-box">
                <div class="content-title">
                    <h3>Meet Our Team</h3>
          <div class="content-title-underline line"></div>
          
                </div>
                <div class="container">
                   <div class="row">
                        <div class="col-sm-4"  data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-6"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Kazeem David</h3>
                                         <p>Back-End Developer</p>
                                     </div>
                                     <div class="user-content">
                                         <p class="text-center pt-5">SlackUsername : @davon_jagah</p>
                                     </div>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/davon_jagah" target="_blank">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.instagram.com/davon_jagah/" target="_blank">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.linkedin.com/in/kazeem-david-9425b5100/" target="_blank">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://facebook.com/davonjagah" target="_blank">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>                     
                        <div class="col-sm-4"  data-aos="fade-up"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-8"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Chidiebere Chukwudi</h3>
                                         <p>Back-End Developer</p>
                                     </div>
                                     <div class="user-content">
                                         <p class="text-center pt-5">SlackUsername : @jovial</p>
                                     </div>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/chidideveloper">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.instagram.com/">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.linkedin.com/">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://m.facebook.com/">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>

                        <div class="col-sm-4">
                            <div class="all-users side"  data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                                 <div class="user-image">
                                   <div class="generic-image-circle user-image-box-69"></div>
                               </div>
                               <div class="content-part back text-center">
                                   <div class="user-info">
                                       <h3>Martini Mabifa</h3>
                                       <p>FrontEnd</p>
                                   </div>
                                   <div class="user-content">
                                       <p class="text-center pt-5">SlackUsername : @Martini Mabifa</p>
                                   </div>
                               </div>
                               <div class="content-footer ">
                                   <a href="https://twitter.com/MartiniDeen">
                                       <i class="fab fa-twitter fa-2x social-icons"></i>
                                   </a>
                                   <a href="https://www.instagram.com/martinideen/?hl=en">
                                       <i class="fab fa-instagram fa-2x social-icons"></i>
                                   </a>
                                   <a href="#">
                                       <i class="fab fa-linkedin fa-2x social-icons"></i>
                                   </a>
                                   <a href="https://www.facebook.com/martini.mabifa?ref=bookmarks">
                                       <i class="fab fa-facebook fa-2x social-icons"></i>
                                   </a>
                               </div>
                          </div>  
                       </div>

                        <div class="col-sm-4"  data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-20"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Omotoso Yusuf</h3>
                                         <p>Front-End</p>
                                     </div>
                                     <div class="user-content">
                                         <p class="text-center pt-5">SlackUsername : @OmotosoYusuf  </p>
                                     </div>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/OmotosoYusuf" target="_blank">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="" target="_blank">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.linkedIn.com/OmotosoYusuf " target="_blank">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="" target="_blank">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>

                        <div class="col-sm-4"  data-aos="fade-up"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-21"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Yusuf Ismaila</h3>
                                         <p>Front-End</p>
                                     </div>
                                     <div class="user-content">
                                         <p class="text-center pt-5">SlackUsername : @YUSUF</p>
                                     </div>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/yusufIsmail1" target="_blank">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="" target="_blank">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://linkedin.com/in/yusuf-ismail-59706089" target="_blank">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="" target="_blank">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>

                        <div class="col-sm-4"  data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-22"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Samson Emeje</h3>
                                         <p>Front-End</p>
                                     </div>
                                     <div class="user-content">
                                         <p class="text-center pt-5">SlackUsername : @Genghis Khan</p>
                                     </div>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/S_Mabeni" target="_blank">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.instagram.com/mabeni808/" target="_blank">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.linkedin.com/in/samson-emeje/" target="_blank">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://mobile.facebook.com/samemeje" target="_blank">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>

                        <div class="col-sm-4"  data-aos="fade-right"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-23"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Ogidiagba Henry Oghenetejiri</h3>
                                         <p>Front-End</p>
                                     </div>
                                     <div class="user-content">
                                         <p class="text-center pt-3">SlackUsername : @Henry Teejay</p>
                                     </div><br>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/henry_teejay" target="_blank">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.instagram.com/henry_teejay/?hl=en" target="_blank">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.linkedin.com/in/henry-ogidiagba-a77721191/" target="_blank">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://web.facebook.com/henry.teejay1" target="_blank">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>

                        <div class="col-sm-4"  data-aos="fade-up"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-24"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Osunkunle Olanrewaju</h3>
                                         <p>Front-End</p>
                                     </div>
                                     <div class="user-content">
                                      <br><br>
                                         <p class="text-center pt-5">SlackUsername : @lario </p>
                                     </div>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/lario_lee0" target="_blank">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.instagram.com/lario_lee/?hl=en" target="_blank">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.linkedin.com/in/osunkunle-olanrewaju-841307129/" target="_blank">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://web.facebook.com/larioscophobia" target="_blank">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>

                        <div class="col-sm-4"  data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                            <div class="all-users side">
                                <div class="user-image">
                                     <div class="generic-image-circle user-image-box-74"></div>
                                 </div>
                                 <div class="content-part back text-center">
                                     <div class="user-info">
                                         <h3>Christian Ani</h3>
                                         <p>Front-End</p>
                                     </div>
                                     <div class="user-content">
                                      <br><br>
                                         <p class="text-center pt-5">SlackUsername : @anikriz</p>
                                     </div>
                                 </div>
                                 <div class="content-footer ">
                                     <a href="https://twitter.com/anikriz99" target="_blank">
                                         <i class="fab fa-twitter fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.instagram.com/ani_kriz/" target="_blank">
                                         <i class="fab fa-instagram fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://www.linkedin.com/in/anikriz/" target="_blank">
                                         <i class="fab fa-linkedin fa-2x social-icons"></i>
                                     </a>
                                     <a href="https://web.facebook.com/anikrizz" target="_blank">
                                         <i class="fab fa-facebook fa-2x social-icons"></i>
                                     </a>
                                 </div>
                            </div>  
                        </div>
                        
                        
                    </div> 
                </div>


                
            </div>
            <nav aria-label="Page navigation example" class="mb-4"  data-aos="fade-up"  data-aos-duration="1000" data-aos-easing="ease-in-out">
                    <ul class="pagination justify-content-center">
                      <li class="page-item prev">
                        <a class="page-link" href="teampage.php">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="teampage.php">1</a></li>
                      <li class="page-item active"><a class="page-link" href="teampage-2.php">2</a></li>
                      <li class="page-item"><a class="page-link" href="teampage-3.php">3</a></li>
                      <li class="page-item next">
                        <a class="page-link" href="teampage-3.php">Next</a>
                      </li>
                    </ul>
                  </nav>
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
        <script src="https://kit.fontawesome.com/85682eb992.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
                AOS.init();
           </script>
                <script>
                        var SCROLLING_NAVBAR_OFFSET_TOP = 100;
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
				<script>
					const cards = document.querySelectorAll('.col-sm-4');
					const heading = document.querySelector('.head');
					const line = document.querySelector('.line');
					const leftCtn = document.querySelector('.left');
					const rightCtn = document.querySelector('.right');
			
					scroll(heading, 'left');
					scroll(line, 'right');
					scroll(leftCtn, 'left');
					scroll(rightCtn, 'right');
					cards.forEach(card => scroll(card, 'bottom')); 
				</script>
  
</body>
</html>
