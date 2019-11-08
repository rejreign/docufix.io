<?php
   
   include 'controller.php';

 
  if(!isset($_SESSION['login_user'])){
  header("location: login.php?redirect=fileUpload.php");
      
}


?>
<!DOCTYPE html>
 <html lang="en">
    <head>
      <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Docufix | Compare Files</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#3B1F9E" />
        <link rel="manifest" href="manifest.json" />
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link rel="manifest" href="manifest.json" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="css/header&footer.css">
        <link rel="icon" type="image/png" href="https://res.cloudinary.com/thecavemann/image/upload/v1571839870/logo_g4kuoa.png"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="./css/wysiwyg.css">
        <link rel="stylesheet" type="text/css" href="css/fileupload.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

      
       <script type="text/javascript" src ="//widget.instabot.io/jsapi/rokoInstabot.js" crossorigin>
        apiKey: "vXj90M2ifAvu8fS739jFKepTXtES72ur59sGR5TPK9c="
      </script>
    </head>
    <body style="background-color:  white; font-family: Ubuntu;"
    onload="view()">
        <!--Header-->
        <div class="w3-container" >
            <div id="id01" class="w3-modal" >
              <div class="w3-modal-content mb-2 mt-5 mt-md-0" style="max-width: 100%">
                <span onclick="document.getElementById('id01').style.display='none'"
                  class="w3-button w3-display-topright mb-0">&times;</span>
                  
                  <div class="form-group pl-3 mb-0 pt-3" id="checkbox">
                    <label for="modalSetting" class="font-weight-bold"><input type="checkbox" name="modal" id="modalSetting" onchange="visibility()"> Check this box to stop getting this alert</label>
                    
                  </div>
                <div id="modal-header">
                  <h2>BEFORE GETTING STARTED</h2>
                </div>
        
                <div id="modal-content">
                  <ul id="mList">
                    <li class="modal-list">Docufix only supports file formats like .docx, .csv, .json, .xml .txt .pdf, .rtf, .odt, .html, .xpt, .ods, .xls, .epud, .css and .dta for
                      <strong>uploading</strong></li>
                    <li class="modal-list">To compare documents aside from the ones mentioned above, make use of the text
                      option, then <strong> copy</strong> and <strong> paste</strong> into the text-box.</strong></li>
                    <li class="modal-list">Result of the documents compared is given in percentage %</li>
                    <li><span style="background-color: red" class="space"> RED HIGHLIGHT</span> Means the texts in second text
                      input that are not found in the first text input</li>
                    <li><span style="background-color: yellow" class="space"> YELLOW HIGHLIGHT</span> Means the texts in first
                      text input that are not found in the second text input</li>
                  </ul>
                </div>
        
        
        
        
              </div>
            </div>
          </div>
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
        <!--Body-->
        <div id="main" style="background-color: #ffffff;">
          
            <div class="container mt-5 pt-5" style="min-height: 100vh" >
                <div class="row mx-auto">
                  <div class="col-md-8">
                    <div class="row" style="border: 1px solid rgb(245, 238, 238); background-color:rgba(59, 31, 158, 0.05)">
                      <div class="col-md-2 p-3 mr-0 mr-md-4">
                        <div class=" bg-light pt-5 mx-auto mx-md-0 pr-md-5"  style="border-radius: 50%;height: 110px; width: 120px;color: white;"></div>
                      </div>
                      <div class="col-md-9">
                        <div class="pl-0 pl-md-4 pt-4">
                          <h4 class="  pl-0 font-weight-bold text">Compare Files</h4>
                                  <p class="font-weight-bold text" style="max-width: 100%"> Docufix is one of the most innovative Technology of our age. Built solidly with the latest technological tools for file and data management. </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 mt-3 mt-md-0">
                    <div class="row pl-0 pl-md-2">
                        <div class="mx-auto" style="border: 1px solid rgba(222, 230, 234, 0.6); background: #F6F8F9">
                          <div class="p-4">
                              <h5 class="pb-4 font-weight-bold" style="color: rgba(12, 10, 90, 0.8)">Other Tools:</h5>
                              <a href="grammarChecker.html" class="btn btn-sm rounded-pill font-weight-bold" style="color: rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)">Grammar check</a>
                                          <a href="fileDuplicate.html" class="btn btn-sm rounded-pill font-weight-bold" style="color:rgba(12, 10, 90, 0.8);background-color: rgba(59, 31, 158, 0.05)">Duplicates check</a>
                                          <div class="btn float-right" style="cursor: pointer;color: rgba(12, 10, 90, 0.8)"  onclick="instruction()"> Instructions</div>
                          </div>
                       
                      </div>
                    </div>
                  </div>
                </div>
              
              <div>
              <div class="row mt-5">
                  <div class="col-md-12 text-center">
                    <div class="btn p-0 rounded-pill py-2 m-0" style=" background-color: rgba(59, 31, 158, 0.05)">
                      <div class="btn-sm btn rounded-pill active1 px-0"  id="fileBtn" ><span class=" px-5 py-3 rounded-pill m-0"
                        style="text-decoration: none; margin-right: 10px;font-weight:  800;">File</span></div>
                      <div class="btn-sm btn rounded-pill px-0"  id="textBtn" style="cursor: pointer"><span class="px-5 py-3 rounded-pill m-0" 
                        style="text-decoration: none; margin-left: 10px;">Text
                      </span></div>
                  </div>
                  </div>
              </div>
              <div id="file">
                <div class="text-center mt-5">
                  <form class="mb-5" id="uploadForm" method="POST" enctype="multipart/form-data">
                    <div class="row mt-5">
                      <div class="col-md-6" >
                        <div class="">
                          <div class="card card-body   p-0 p-1" style="background:  #F6F8F9;box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08);
                          ">
                            <div style="border:  1px dashed #828282" class="pb-5 pt-5 ">
                            <div class=" mx-auto bg-light  p-2 mt-5" style="border-radius: 50%;height: 100%; width: 20%"><img
                                src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png"
                                class="p-2" width="100%" ></div>
                            <div class="custom-file col-md-8 mx-auto pt-3" style="color: #0C105F">
                                
                              <label for="upload1" id="label1" class="text-center mr-md-5 "
                                style=""> <div id="labell1" class="pb-3 " style=" color:#828282; cursor: pointer;font-weight: normal"></div><span  class=" font-weight-bold" style=" color:#828282; cursor: pointer;font-weight: normal"><img class="img-fluid"  width="24" height="18" src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png" alt="" style="margin: auto" srcset="">&nbsp Click to add file</span> 
                                <input id="upload1" type="file" name="file1" accept="" class="custom-file-input"
                                  style="border: 0;background-color:rgba(61, 155, 218, 0.4);position: absolute" required />
                                <div class="invalid-feedback pl-md-5">
                                  No Images Allowed
                                </div></label>
                                <p  style=" color:#828282;" class="font-weight-bold mb-0">Or</p>
                                <button style="color:  #828282;" id="uploadUrlBtn" type="submit" value="submit"
                                class="btn btn-link font-weight-bold"><img src="https://res.cloudinary.com/rammy/image/upload/v1572652721/uploadLogo.png" class="img-fluid"  alt="">&nbsp Click to add URL link</button>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-5 mt-md-0" >
                        <div class="">
                          <div class="card card-body   p-0 p-1" style="background-color: #F6F8F9;box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08);
                          ">
                            <div style="border:  1px dashed #828282" class="pb-5 pt-5 ">
                            <div class=" mx-auto bg-light  p-2 mt-5" style="border-radius: 50%;height: 100%; width: 20%"><img
                                src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png"
                                class="p-2" width="100%" ></div>
                            <div class="custom-file col-md-8 mx-auto pt-3" style="color: #0C105F">
                                
                              <label for="upload2" id="label2" class="text-center mr-md-5 "
                                style=""> <div id="labell2" class="pb-3 " style=" color:#828282; cursor: pointer;font-weight: normal"></div><span  class=" font-weight-bold" style=" color:#828282; cursor: pointer;font-weight: normal"><img class="img-fluid"  width="24" height="18" src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png" alt="" style="margin: auto" srcset="">&nbsp Click to add file</span> 
                                <input id="upload2" type="file" name="file2" accept="" class="custom-file-input"
                                  style="border: 0;background-color:rgba(61, 155, 218, 0.4);position: absolute" required />
                                <div class="invalid-feedback pl-md-5">
                                  No Images Allowed
                                </div></label>
                                <p  style=" color:#828282;" class="font-weight-bold mb-0">Or</p>
                                <button style="color:  #828282;" id="uploadUrlBtn" type="submit" value="submit"
                                class="btn btn-link font-weight-bold"><img src="https://res.cloudinary.com/rammy/image/upload/v1572652721/uploadLogo.png" class="img-fluid"  alt="">&nbsp Click to add URL link</button>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group mt-4" style="margin-bottom: 1em;">
                      <button style="background-color:  #3B1F9E;color: white;" id="uploadBtn" type="submit" value="submit"
                        class="btn text-light rounded-pill px-5">Compare</button>
          
                         
                    </div>
                  </form>
          
          
          
          
                  <form class="mb-5" id="uploadUrlForm" method="POST">
                    <div class="row mt-5">
                      <div class="col-md-6">
                        <div class="">
                          <div class="card card-body  p-0 p-1" style="background-color: #F6F8F9;box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08);">
                            <div style="border:  1px dashed #828282" class="pb-5">
                                <div class=" mx-auto bg-light mt-3 p-2" style="border-radius: 50%;height: 100%; width: 20%"><img
                                  src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png"
                                  class="p-2" width="100%"></div>
          
          
                            <p class="font-weight-bold">Paste URL of the first file here</p>
                            <div class="custom-file col-md-8 mx-auto" style="color: #0C105F">
                              <label for="url1" id="urlLabel1" class="text-left mr-md-5 "
                                style="border: 1px solid #0C105F; "></label>
                              <input id="url1" type="url" name="url1" class="form-control" placeholder="https://file-examples.com/wp.docx" required />
                              <div class="invalid-feedback pb-5">
                                No Images Allowed
                              </div>
                              <button  style="color:  #828282;" id="uploadFilesBtn" type="submit" value="submit"
                          class="btn btn-link">upload Files</button> 
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="col-md-6 mt-5 mt-md-0">
                        <div class="pb-5">
                          <div class="card card-body  p-0 p-1"  style="background-color: #F6F8F9;box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08);">
                            <div style="border:  1px dashed #828282" class="pb-5">
                                <div class=" mx-auto bg-light mt-3 p-2" style="border-radius: 50%;height: 100%; width: 20%"><img
                                  src="https://res.cloudinary.com/rammy/image/upload/v1572652721/Group.png"
                                  class="p-2" width="100%"></div>
                            <p class="font-weight-bold">Paste URL of the second file here</p>
                            <div class="custom-file col-md-8 mx-auto" style="color: #0C105F">
                              <label for="url2" id="urlLabel2" class="text-left mr-md-5 "
                                style="border: 1px solid #0C105F; "></label>
                              <input id="url2" type="url" name="url2" class="form-control" placeholder="https://file-examples.com/wp.docx" required />
                              <div class="invalid-feedback pb-5">
                                No Images Allowed
                              </div>
                              <button  style="color:  #828282;" id="uploadFilesBtn" type="submit" value="submit"
                          class="btn btn-link">upload Files</button> 
                            </div>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <button style="background-color:  #3B1F9E;color: white;" id="uploadViaUrlBtn" type="submit" value="submit"
                        class="btn rounded-pill px-5">Compare</button>
          
                        
                          
                    </div>
                  </form>
                </div>
              </div>
            </div>
              <div class="progress" style="display: none">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40"
                  aria-valuemin="0" aria-valuemax="100" style="width:0%;">
          
                </div>
              </div>
              <div id="status"></div>
              <div id="text" style="display: none;">
                <div class="row card mt-4 m-1 mb-4" style="background-color: white">
                    <div class="row">
                        <div class="col-md-6 text-center  pr-md-0">
                            <div class="card-header" style="border-bottom: 1px solid #C4C4C4;background-color: white"><span class="btn-link float-left" style="cursor: pointer;color: #0C105F" id="reset">reset</span> Original Text  </div>
                            <div class="card-body p-0" >
                                <textarea
                                    placeholder="1."
                                    class=""
                                    id="textareaBefore"
                                    cols=""
                                    rows="20"
                                    style="border-left:0;border-bottom: 1px solid #C4C4C4;border-top: 0"
                                ></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 text-center pl-md-0 mt-4 mt-md-0">
                            <div class="card-header" style="border-bottom: 1px solid #C4C4C4;background-color: white">
                                Duplicate Text <span id="reset1" class="btn-link float-right" style="cursor: pointer;color: #0C105F">reset</span>
                            </div>
                            <div class="card-body p-0">
                                <textarea
                                    placeholder="1."
                                    class=""
                                    id="textareaAfter"
                                    cols=""
                                    rows="20"
                                    style="border:0;border-bottom: 1px solid#C4C4C4;border-top: 0"
                                ></textarea>
                            </div>
                        </div>
                        <div class="text-center col-md-12 m-3">
                                <button value="compare" class="btn font-weight-bold  rounded-pill px-5"
                                  style="background-color:   #EEEEEE;color:#333333;" type="submit" onclick="buttonCompareClicked();"> Compare</button>
                              </div>
                    </div>
                </div>
                <div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">RESULT</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="col">DIFFERENCE %</th>
                        <td id="percentageD"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th scope="col">SIMILARITY %</th>
                        <td id="percentageS"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th scope="col">CHARACTER ADDED</th>
                        <td id="added"></td>
                      </tr>
                    </tbody>
                    <tbody>
                      <tr>
                        <th scope="col">CHARACTER DELETED</th>
                        <td id="deleted"></td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- <table class="table table-striped">
                                  <thead>
                                    <tr>
                                          <th scope="col">#</th>
                                      <th scope="col" class="text-center">DIFFERENCE %</th>
                                      <th scope="col" class="text-center">SIMILARITY %</th>
                                      <th scope="col" class="text-center">CHARACTER ADDED </th>
                                      <th scope="col" class="text-center">CHARACTER DELETED </th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">RESULT</th>
                                      <td id="percentageD" class="text-center"></td>
                                      <td  id="percentageS" class="text-center"></td>
                                      <td id="added" class="text-center"></td>
                                      <td id="deleted" class="text-center"></td>
                                    </tr>
                                  </tbody>
                                </table> -->
                  <br />
          
                  <br>
          
          
                  <div class="toolbar" style = "padding: 30px; background-color: rgba(59, 31, 158, 0.05);">
                    <a href="#" data-command='undo'><i class='fa fa-undo'></i></a>
                    <a href="#" data-command='redo'><i class='fa fa-repeat'></i></a>
                    <div class="fore-wrapper"><i class='fa fa-font' style='color: #0C105F;'></i>
                      <div class="fore-palette">
                      </div>
                    </div>
                    <div class="back-wrapper"><i class='fa fa-font' style='background:rgba(59, 31, 158, 0.05);'></i>
                      <div class="back-palette">
                      </div>
                    </div>
                    <a href="#" data-command='bold'><i class='fa fa-bold'></i></a>
                    <a href="#" data-command='italic'><i class='fa fa-italic'></i></a>
                    <a href="#" data-command='underline'><i class='fa fa-underline'></i></a>
                    <a href="#" data-command='strikeThrough'><i class='fa fa-strikethrough'></i></a>
                    <a href="#" data-command='justifyLeft'><i class='fa fa-align-left'></i></a>
                    <a href="#" data-command='justifyCenter'><i class='fa fa-align-center'></i></a>
                    <a href="#" data-command='justifyRight'><i class='fa fa-align-right'></i></a>
                    <a href="#" data-command='justifyFull'><i class='fa fa-align-justify'></i></a>
                    <a href="#" data-command='indent'><i class='fa fa-indent'></i></a>
                    <a href="#" data-command='outdent'><i class='fa fa-outdent'></i></a>
                    <a href="#" data-command='insertUnorderedList'><i class='fa fa-list-ul'></i></a>
                    <a href="#" data-command='insertOrderedList'><i class='fa fa-list-ol'></i></a>
                    <a href="#" data-command='h1'>H1</a>
                    <a href="#" data-command='h2'>H2</a>
                    <a href="#" data-command='createlink'><i class='fa fa-link'></i></a>
                    <a href="#" data-command='unlink'><i class='fa fa-unlink'></i></a>
                    <a href="#" data-command='insertimage'><i class='fa fa-image'></i></a>
                    <a href="#" data-command='p'>P</a>
                    <a href="#" data-command='subscript'><i class='fa fa-subscript'></i></a>
                    <a href="#" data-command='superscript'><i class='fa fa-superscript'></i></a>
                  </div>
                  <div id="page"></div>
                  <div contenteditable="true" id="textareaDifferences" class ="test1"
                    style="border:none;min-height:100%; width: 100%;overflow: scroll; box-shadow: 0px 0px 4px 1px grey;"></div>
                </div>
                <div class="row">
                  <div class="mx-auto">
                    <div class="">
                      
                         <button type="button" class="btn mt-2 mb-0 mb-md-5" data-toggle="modal" data-target="#myModal" style="background-color:  #3B1F9E; color: white;"><i class="fas fa-cloud-download-alt"></i>Download <strong>HERE</strong></button>

                         <!--JOVIA SAV AS EMAIL BUTTON-->
                      <button id ="btn" onclick="CopyDivsToTextArea();" data-toggle="modal"  data-target="#myModal2" class="btn mt-2 mb-0 mb-md-5 text-light" style="background-color:  #3B1F9E"><i class="fas fa-cloud-download-alt"></i>Save As <strong>Email</strong></button>
                    </div>
              
                     
                  </div>
                    
                </div>

              

                <!-- <!-- FROM @Major  -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                
                    
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
                      </div>
                      <div class="modal-body">

                          <br />
                          <br />
            
                          <input type="text" placeholder="Please Specify Document Name..." id="saveAs" required></input><br/>
                          <button id="btn-export" onclick="exportHTML();" class="mt-2 mb-5" style="padding: 7px 14px; background-color:  #3B1F9E; color: white;"><i
                              class="fas fa-cloud-download-alt"></i> Download as word
                            doc</button>
                          <button id="cmd" class="mt-2 mb-5"style =" padding: 7px 14px; background-color:  #3B1F9E; color: white;"><i
                              class="fas fa-cloud-download-alt" ></i>Download as PDF</button>
                              <button id="btn-export" onclick="txt();" class="mt-2 mb-5" style="padding: 7px 14px; background-color:  #3B1F9E; color: white;""><i
                                class="fas fa-cloud-download-alt"></i> Download as .txt
                        </button>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                
                  </div>
                </div>

               
          

                  <!--JOVIAL SAVE AS EMAIL MODAL-->


                  <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">
                    
            <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="mailsub.php" id="form">
                    <p id="msg" name="msg" class="msgbox"></p>
                      
                    <input type="text"  id="email" name="docName" placeholder="Please input a doc name" required>
                       <select type="select" id="email" name="select">
                        <option value="txt" selected>select doc type</option>
                        <option value=".txt"> .txt </option>
                        <option value=".doc"> .doc</option>
                       </select>
                       <input type="email" id="email" name="mail" placeholder="Please input your email Address..." required>
                            <br />
                            <textarea id="ta" cols="50" rows="20" name="txt"></textarea>
                            <br />
              <!--  -->
               
                    <div class="modal-footer">
                            <button type="submit" name="submit" id="closeSend" class="btn btn-default" style="padding: 7px 14px; background-color:  #3B1F9E; color: white;">Send!</button>
                      </form>
            
                      <button type="button" class="btn btn-default" data-dismiss="modal" style="padding: 7px 14px; background-color:  #3B1F9E; color: white;">Close</button>
                    </div>
                  </div>
                  
                </div>
              </div>

                <!---MODAL FOR SAVE AS-->
          
          
          
          
               <!--- <div class="w3-container">
                  <div id="id02" class="w3-modal">
                    <div class="w3-modal-content" style="border-radius: 4px;">
                      <div class="w3-container">
                        <span onclick="document.getElementById('id02').style.display='none'"
                          class="w3-button w3-display-topright">&times;</span>
                        <br />
                        <br />
          
                        <input type="text" placeholder="Please Specify Document Name..." id="saveAs" required></input>
                        <button id="btn-export" onclick="exportHTML();" class="btn-dark mt-2 mb-5" style="padding: 7px 14px;"><i
                            class="fas fa-cloud-download-alt"></i> Download as word
                          doc</button>
                        <button id="cmd" class="btn-dark mt-2 mb-5" style="padding: 7px 14px;"><i
                            class="fas fa-cloud-download-alt"></i>Download as PDF</button>
                            <button id="btn-export" onclick="txt();" class="btn-dark mt-2 mb-5" style="padding: 7px 14px;"><i
                              class="fas fa-cloud-download-alt"></i> Download as .txt
                      </button>
                      </div>
                    </div>
                  </div>
                </div>--->
          
          
          
              </div>
          
              <!--END OF MODAL-->
              <div align="right" class="shareBtn" id="shareBtn">
                <h4>Helpful? Please Share With Your Friends On:</h4>
                <button class="twtShare" data-js="twitter-share"><i class="fab fa-twitter"></i> Twitter</button>
                <button class="fbShare" data-js="facebook-share"><i class="fab fa-facebook-f"></i> Facebook</button>
                <button class="fbShare" data-js="facebook-share"><a
                    href="mailto:info@example.com?&subject=&body=http://docufix.ga Hey! I just compared my files for similarities on Docufix"><i
                      class="fas fa-envelope"></i> Email</a></button>
              </div>
            </div>
        </div>
            
        <!--Footer-->
        <footer id="footer">
          <div class="container mt-3"><hr>
            <div class="row">
                <div class="col-sm-6" id="docufix">
                    <a class="navbar-brand  text-justify" href="index.html"><img src="https://res.cloudinary.com/kuic/image/upload/v1572638901/docufix/Docufix_Logo_lnsgsr.svg" alt="DOCUFIX" id="image"></a>
                    <p class="text-justify">This app was built by <a href="https://hng.tech/" target="_blank">HNGi6</a> interns</p>
                </div>
              <div class="col-sm-6 text-center">           
                  <ul class="list-inline text-center mt-3 pl-3">  
                      <li class="list-inline-item">
                        <a class="text-center" href="contact.html">Contact us</a>
                      </li>
                      <li class="list-inline-item">
                          <a class="text-center" href="faq.html">FAQs</a>
                        </li>
                        <li class="list-inline-item">
                        <a class="text-center" href="why-use-docufix.html">Why use Docufix</a>
                      </li>
                        <li class="list-inline-item">
                            <a class="text-center" href="termsOfService.html">Terms and Conditions</a>
                          </li>
                      <li class="list-inline-item">
                          <a class="text-center" href="privacy.html">Privacy Policy</a>
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
        <script src="./js/app.js"></script>
         
           
            <script src="https://kit.fontawesome.com/7967e81f77.js" crossorigin="anonymous"></script>
            <script src = "./js/jsTXT.js"></script>
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
            <script>
                
               
              document
                .getElementById("fileBtn")
                .addEventListener("click", showFile);
              document
                .getElementById("textBtn")
                .addEventListener("click", showtext);
          
              function showFile() {
                document.getElementById("file").style.display = "block";
                document.getElementById("text").style.display = "none";
                document.getElementById("fileBtn").classList.add("active1");
                document.getElementById("textBtn").classList.remove("active1");
              }
              function showtext() {
                document.getElementById("text").style.display = "block";
                document.getElementById("file").style.display = "none";
                document.getElementById("fileBtn").classList.remove("active1");
                document.getElementById("textBtn").classList.add("active1");
              }
            </script>
            <script src="./js/fileUpload.js"></script>
            <script src="./js/wysiwyg.js"></script>
            <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
            <script src="./js/jsPDF.js"></script>
            <script type="text/javascript">
          
              // events
          
              function buttonCompareClicked() {
                var textBefore = document.getElementById("textareaBefore").value;
                var textAfter = document.getElementById("textareaAfter").value;
          
                var differences = new TextDifferencer().findDifferencesBetweenStrings
                  (
                    textBefore,
                    textAfter
                  );
          
          
                var differencesAsString = differences.toString();
          
                var textareaDifferences = document.getElementById
                  (
                    "textareaDifferences"
                  );
                textareaDifferences.innerHTML = differencesAsString;
                document.getElementById("shareBtn").style.display = "block"
          
              }
          
              // extensions
          
              function ArrayExtensions() {
                // extension class
              }
              {
                Array.prototype.insertElementAt = function (element, index) {
                  this.splice(index, 0, element);
                }
          
                Array.prototype.insertElementsAt = function (elements, index) {
                  for (var i = 0; i < elements.length; i++) {
                    this.splice(index + i, 0, elements[i]);
                  }
                }
          
                Array.prototype.removeAt = function (index) {
                  this.splice(index, 1);
                }
              }
          
              // classes
          
              function TextDifferencer() {
                // do nothing
              }
              {
                TextDifferencer.prototype.findDifferencesBetweenStrings = function (string0, string1) {
                  var lengthOfShorterString =
                    (string0.length <= string1.length ? string0.length : string1.length);
          
                  var numberOfExtremes = 2;
                  var passagePairsMatchingAtExtremes = [];
          
                  for (var e = 0; e < numberOfExtremes; e++) {
                    var lengthOfMatchingSubstring = 0;
          
                    for (var i = 0; i < lengthOfShorterString; i++) {
                      var offsetForString0 = (e == 0 ? i : string0.length - i - 1);
                      var offsetForString1 = (e == 0 ? i : string1.length - i - 1);
          
                      var charFromString0 = string0[offsetForString0];
                      var charFromString1 = string1[offsetForString1];
          
                      if (charFromString0 != charFromString1) {
                        lengthOfMatchingSubstring = i;
                        break;
                      }
                    }
          
                    var matchingSubstringAtExtreme;
          
                    if (e == 0) {
                      matchingSubstringAtExtreme = string0.substr(0, lengthOfMatchingSubstring);
                      string0 = string0.substr(lengthOfMatchingSubstring);
                      string1 = string1.substr(lengthOfMatchingSubstring);
                    } else // if (e == 1)
                    {
                      matchingSubstringAtExtreme = string0.substr(string0.length - lengthOfMatchingSubstring);
                      string0 = string0.substr(0, string0.length - lengthOfMatchingSubstring);
                      string1 = string1.substr(0, string1.length - lengthOfMatchingSubstring);
                    }
          
                    var passagePairMatchingAtExtreme = new TextPassagePair
                      (
                        true, // doPassagesMatch
                        [
                          new TextPassage(matchingSubstringAtExtreme),
                          new TextPassage(matchingSubstringAtExtreme),
                        ]
                      );
          
                    passagePairsMatchingAtExtremes.push
                      (
                        passagePairMatchingAtExtreme
                      );
                  }
          
                  var passagePairsAll = [];
          
                  var passagePairsMatching = this.findPassagePairsMatchingBetweenStrings
                    (
                      string0, string1, [0, 0]
                    );
          
                  this.insertPassagePairsDifferentBetweenMatching
                    (
                      string0,
                      string1,
                      passagePairsMatching,
                      passagePairsAll
                    );
          
                  for (var e = 0; e < passagePairsMatchingAtExtremes.length; e++) {
                    var passagePairMatchingAtExtreme = passagePairsMatchingAtExtremes[e];
                    passagePairsAll.insertElementAt
                      (
                        passagePairMatchingAtExtreme,
                        (e == 0 ? 0 : passagePairsAll.length)
                      );
                  }
          
                  var returnValue = new TextDifferences(passagePairsAll);
          
                  return returnValue;
                }
          
                TextDifferencer.prototype.findPassagePairsMatchingBetweenStrings = function
                  (
                    string0, string1, positionOffsets
                  ) {
                  var passagePairsMatching = [];
          
                  var longestCommonPassagePair = this.findLongestCommonPassagePair
                    (
                      string0,
                      string1
                    );
          
                  var longestCommonPassageText = longestCommonPassagePair.passages[0].text;
                  var lengthOfCommonPassage = longestCommonPassageText.length;
          
                  if (lengthOfCommonPassage == 0) {
                    return passagePairsMatching;
                  }
          
                  passagePairsMatching.push(longestCommonPassagePair);
          
                  var passages = longestCommonPassagePair.passages;
                  var passage0 = passages[0];
                  var passage1 = passages[1];
          
                  var passagePairsMatchingBeforeCommon = this.findPassagePairsMatchingBetweenStrings
                    (
                      string0.substr(0, passage0.position),
                      string1.substr(0, passage1.position),
                      [
                        positionOffsets[0],
                        positionOffsets[1]
                      ]
                    );
          
                  var passagePairsMatchingAfterCommon = this.findPassagePairsMatchingBetweenStrings
                    (
                      string0.substr
                        (
                          passage0.position + lengthOfCommonPassage
                        ),
                      string1.substr
                        (
                          passage1.position + lengthOfCommonPassage
                        ),
                      [
                        positionOffsets[0]
                        + passage0.position
                        + lengthOfCommonPassage,
          
                        positionOffsets[1]
                        + passage1.position
                        + lengthOfCommonPassage
                      ]
                    );
          
                  var passagePairSetsMatchingBeforeAndAfter =
                    [
                      passagePairsMatchingBeforeCommon,
                      passagePairsMatchingAfterCommon
                    ];
          
                  for (var i = 0; i < passagePairSetsMatchingBeforeAndAfter.length; i++) {
                    var passagePairsToInsert = passagePairSetsMatchingBeforeAndAfter[i];
                    passagePairsMatching.insertElementsAt
                      (
                        passagePairsToInsert,
                        (i == 0 ? 0 : passagePairsMatching.length)
                      );
                  }
          
                  for (var i = 0; i < longestCommonPassagePair.passages.length; i++) {
                    var passage = longestCommonPassagePair.passages[i];
                    passage.position += positionOffsets[i];
                  }
          
                  return passagePairsMatching;
                }
          
                TextDifferencer.prototype.findLongestCommonPassagePair = function (string0, string1) {
                  var passage0 = new TextPassage("", 0);
                  var passage1 = new TextPassage("", 0);
          
                  var returnValue = new TextPassagePair
                    (
                      true, // doPassagesMatch
                      [
                        passage0, passage1
                      ]
                    );
          
                  var lengthOfString0 = string0.length;
                  var lengthOfString1 = string1.length;
          
                  var substringLengthsForRow = null;
                  var substringLengthsForRowPrev;
          
                  var lengthOfLongestCommonSubstringSoFar = 0;
                  var longestCommonSubstringsSoFar = "";
                  var cellIndex = 0;
          
                  // Build a table whose y-axis is chars from string0,
                  // and whose x-axis is chars from string1.
                  // Put length of the longest substring in each cell.
          
                  for (var i = 0; i < lengthOfString0; i++) {
                    substringLengthsForRowPrev = substringLengthsForRow;
                    substringLengthsForRow = [];
          
                    for (var j = 0; j < lengthOfString1; j++) {
                      if (string0[i] != string1[j]) {
                        substringLengthsForRow[j] = 0;
                      }
                      else {
                        var cellValue;
          
                        if (i == 0 || j == 0) {
                          // first row or column
                          cellValue = 1;
                        }
                        else {
                          // Copy cell to upper left, add 1.
                          cellValue = substringLengthsForRowPrev[j - 1] + 1;
                        }
          
                        substringLengthsForRow[j] = cellValue;
          
                        if (cellValue > lengthOfLongestCommonSubstringSoFar) {
                          lengthOfLongestCommonSubstringSoFar = cellValue;
                          var startIndex = i - lengthOfLongestCommonSubstringSoFar + 1;
                          var longestCommonSubstringSoFar = string0.substring // not "substr"!
                            (
                              startIndex,
                              i + 1
                            );
          
                          passage0.text = longestCommonSubstringSoFar;
                          passage0.position = startIndex;
          
                          passage1.text = longestCommonSubstringSoFar;
                          passage1.position = j - lengthOfLongestCommonSubstringSoFar + 1;
                        }
                      }
                    }
                  }
          
                  return returnValue;
                }
          
                TextDifferencer.prototype.insertPassagePairsDifferentBetweenMatching = function
                  (
                    string0,
                    string1,
                    passagePairsToInsertBetween,
                    passagePairsAll
                  ) {
                  passagePairsToInsertBetween.insertElementAt
                    (
                      new TextPassagePair
                        (
                          true, // doPassagesMatch
                          [
                            new TextPassage("", 0),
                            new TextPassage("", 0)
                          ]
                        ),
                      0
                    );
          
                  passagePairsToInsertBetween.push
                    (
                      new TextPassagePair
                        (
                          true, // doPassagesMatch
                          [
                            new TextPassage("", string0.length),
                            new TextPassage("", string1.length)
                          ]
                        )
                    );
          
                  var pMax = passagePairsToInsertBetween.length - 1;
          
                  for (var p = 0; p < pMax; p++) {
                    passagePairToInsertAfter = passagePairsToInsertBetween[p];
                    passagePairToInsertBefore = passagePairsToInsertBetween[p + 1];
          
                    this.buildAndInsertPassagePairBetweenExisting
                      (
                        string0,
                        string1,
                        passagePairToInsertBefore,
                        passagePairToInsertAfter,
                        passagePairsAll
                      );
          
                    passagePairsAll.push(passagePairToInsertBefore);
                  }
          
                  var indexOfPassagePairFinal = passagePairsAll.length - 1;
          
                  var passagePairFinal = passagePairsAll[indexOfPassagePairFinal];
          
                  if
                    (
                    passagePairFinal.doPassagesMatch == true
                    && passagePairFinal.passages[0].text.length == 0
                  ) {
                    passagePairsAll.removeAt(indexOfPassagePairFinal, 1);
                  }
                }
          
                TextDifferencer.prototype.buildAndInsertPassagePairBetweenExisting = function
                  (
                    string0,
                    string1,
                    passagePairToInsertBefore,
                    passagePairToInsertAfter,
                    passagePairsAll
                  ) {
                  var lengthOfPassageToInsertAfter = passagePairToInsertAfter.passages[0].text.length;
          
                  var positionsForPassagePairDifferent =
                    [
                      [
                        passagePairToInsertAfter.passages[0].position
                        + lengthOfPassageToInsertAfter,
          
                        passagePairToInsertAfter.passages[1].position
                        + lengthOfPassageToInsertAfter
                      ],
                      [
                        passagePairToInsertBefore.passages[0].position,
                        passagePairToInsertBefore.passages[1].position
                      ]
                    ];
          
                  var passageToInsert0 = new TextPassage
                    (
                      string0.substring // not "substr"!
                        (
                          positionsForPassagePairDifferent[0][0],
                          positionsForPassagePairDifferent[1][0]
                        ),
                      positionsForPassagePairDifferent[0][0]
                    );
          
                  var passageToInsert1 = new TextPassage
                    (
                      string1.substring  // not "substr"!
                        (
                          positionsForPassagePairDifferent[0][1],
                          positionsForPassagePairDifferent[1][1]
                        ),
                      positionsForPassagePairDifferent[0][1]
                    );
          
                  var passagePairToInsert = new TextPassagePair
                    (
                      false, // doPassagesMatch
                      [
                        passageToInsert0,
                        passageToInsert1
                      ]
                    );
          
                  if
                    (
                    passagePairToInsert.passages[0].text.length > 0
                    || passagePairToInsert.passages[1].text.length > 0
                  ) {
                    passagePairsAll.push(passagePairToInsert);
                  }
          
                }
              }
          
              function TextDifferences(passagePairs) {
                this.passagePairs = passagePairs;
              }
              {
                // instance methods
          
                TextDifferences.prototype.toString = function () {
                  var returnValue = "";
          
                  for (var p = 0; p < this.passagePairs.length; p++) {
                    var passagePair = this.passagePairs[p];
                    var passagePairAsString = passagePair.toString();
          
                    returnValue += passagePairAsString;
                  }
          
                  return returnValue;
                }
          
              }
          
              function TextPassage(text, position) {
                this.text = text;
                this.position = position;
              }
          
              function TextPassagePair(doPassagesMatch, passages) {
                this.doPassagesMatch = doPassagesMatch;
                this.passages = passages;
              }
              {
                TextPassagePair.prototype.toString = function () {
                  var textBefore = document.getElementById("textareaBefore").value;
                  var textAfter = document.getElementById("textareaAfter").value;
          
                  var removed = Math.floor(this.passages[0].text.length);
                  var added = Math.floor(this.passages[1].text.length);
          
          
                  var similarity = Math.floor((textBefore.length - (removed + added)) / textBefore.length * 100);
                  var difference = Math.floor(100 - similarity);
                  var returnValue = "";
          
                  if (this.doPassagesMatch == true) {
                    returnValue = this.passages[0].text;
                    returnValue = this.escapeStringForHTML(returnValue);
                  }
                  else {
                    returnValue += "<mark style='background-color:red'>";
                    returnValue += this.escapeStringForHTML(this.passages[0].text);
                    returnValue += "</mark><mark style='background-color:yellow'>";
                    returnValue += this.escapeStringForHTML(this.passages[1].text);
                    returnValue += "</mark>";
                    if (difference <= 0) {
                      difference = "No difference";
                      similarity = similarity;
                      document.getElementById('percentageD').textContent = `${difference}`;
                      document.getElementById('percentageS').textContent = ` ${similarity}`;
                      document.getElementById('added').textContent = `${added} `;
                      document.getElementById('deleted').textContent = `${removed} `;
                      console.log(difference, similarity);
                    } else if (similarity <= 0) {
                      difference = difference;
                      similarity = "No similarity";
                      document.getElementById('percentageD').textContent = ` ${difference}`;
                      document.getElementById('percentageS').textContent = ` ${similarity} `;
                      document.getElementById('added').textContent = `${added} `;
                      document.getElementById('deleted').textContent = `${removed} `;
                    } else {
                      difference = difference;
                      similarity = similarity;
                      document.getElementById('percentageD').textContent = `${difference}`;
                      document.getElementById('percentageS').textContent = `${similarity}`;
                      document.getElementById('added').textContent = `${added} `;
                      document.getElementById('deleted').textContent = `${removed} `;
                    }
          
                    document.getElementById('percentageD').textContent = ` ${difference}`;
                    document.getElementById('percentageS').textContent = `${similarity}`;
                    document.getElementById('added').textContent = `${added} `;
                    document.getElementById('deleted').textContent = `${removed} `;
                    console.log(difference, similarity);
                  }
                  return returnValue;
                }
          
                TextPassagePair.prototype.escapeStringForHTML = function (stringToEscape) {
                  var returnValue = stringToEscape.replace
                    (
                      "&", "&amp;"
                    ).replace
                    (
                      "<", "&lt;"
                    ).replace
                    (
                      ">", "&gt;"
                    ).replace
                    (
                      "\n", "<br />"
                    );
          
                  return returnValue;
                }
              }
          
          
              var p = document.getElementById('before').inner.value;
              function checkpercentage() {
          
                document.getElementById('display').innerHTML = p;
              }
            </script>
          
          
          
          
          
            <script>
          
              function exportHTML() {
          
                var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' " +
                  "xmlns:w='urn:schemas-microsoft-com:office:word' " +
                  "xmlns='http://www.w3.org/TR/REC-html40'>" +
                  "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
          
                var footer = "</body></html>";
                var sourceHTML = header + document.getElementById("textareaDifferences").innerHTML + footer;
          
                var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
                var fileName = document.getElementById('saveAs').value
                console.log(fileName + " is working")
                var fileDownload = document.createElement("a");
                document.body.appendChild(fileDownload);
                fileDownload.href = source;
                fileDownload.download = fileName + " " + '.doc';
                fileDownload.click();
                document.body.removeChild(fileDownload);
              }
            </script>
          
            <script type="text/javascript">
              var twitterShare = document.querySelector('[data-js="twitter-share"]');
          
              twitterShare.onclick = function (e) {
                e.preventDefault();
                var twitterWindow = window.open('https://twitter.com/intent/tweet?text=Hey! I just compared my files for similarities on&url=http://docufix.ga/fileUpload.html&###', 'twitter-popup', 'height=350,width=600');
                if (twitterWindow.focus) { twitterWindow.focus(); }
                return false;
              }
          
              var facebookShare = document.querySelector('[data-js="facebook-share"]');
          
              facebookShare.onclick = function (e) {
                e.preventDefault();
                var facebookWindow = window.open('https://www.facebook.com/sharer/sharer.php?u=http://docufix.ga', 'facebook-popup', 'height=350,width=600');
                if (facebookWindow.focus) { facebookWindow.focus(); }
                return false;
              }
          
              document.getElementById("upload1").addEventListener("change", function (e) {
                var upload1 = document.getElementById("upload1");
                var label = document.getElementById("labell1");
                if (e.target.files[0].name.includes(".png") || e.target.files[0].name.includes(".jpg")) {
                  upload1.classList.add("is-invalid");
                } else {
                  upload1.classList.remove("is-invalid");
                  label.textContent = e.target.files[0].name;
                }
              });
              document.getElementById("upload2").addEventListener("change", function (e) {
                var upload2 = document.getElementById("upload2");
                var label = document.getElementById("labell2");
                if (e.target.files[0].name.includes(".png") || e.target.files[0].name.includes(".jpg")) {
                  upload2.classList.add("is-invalid");
                } else {
                  upload2.classList.remove("is-invalid");
                  label.textContent = e.target.files[0].name;
                }
              });
            </script>
            <script>
          
          
              options1 = {
                success: function (files) {
                  var upload1 = document.getElementById("upload1");
                  var label = document.getElementById("labell1");
                  upload1.value = files[0].link;
                  label.textContent = files[0].name;
                },
                cancel: function () {
                  console.log("error")
                },
                linkType: "preview",
                multiselect: false,
          
              };
              var button = Dropbox.createChooseButton(options1);
              document.getElementById("button3").appendChild(button);
              options2 = {
                success: function (files) {
                  var upload2 = document.getElementById("upload2");
                  var label = document.getElementById("labell2");
                  upload2.value = files[0].link;
                  label.textContent = files[0].name;
                },
                cancel: function () {
                  console.log("error")
                },
                linkType: "preview",
                multiselect: false,
          
              };
              var button = Dropbox.createChooseButton(options2);
              document.getElementById("button4").appendChild(button);
          
              function visibility(){
               let val = document.getElementById("modalSetting");
               let valBool = document.getElementById("modalSetting");
               check = valBool;
                if(valBool.checked){
                  valBool.checked = true;
                  localStorage.setItem('value', valBool.checked);
                  setTimeout(() => {
                  
                      document.getElementById("id01").style.display = "none";
                
                      }, 2000);
                } else{
                  valBool.checked = false;
                  localStorage.setItem('value', valBool.checked);
                  setTimeout(() => {
                  
                  document.getElementById("id01").style.display = "block";
            
                  }, 2000);
                
                }
              //  if(valBool === true){
              //   localStorage.setItem('value', false);
              //   setTimeout(() => {
                  
              //     document.getElementById("id01").style.display = "none";
            
              //     }, 2000);
              //  } else if(valBool === false || valBool === undefined){
              //   localStorage.setItem('value', true);
              //   document.getElementById("id01").style.display = "block";
              //  }else
               
                
              }
               function view(){
              let value = localStorage.getItem('value');
              let val = document.getElementById("modalSetting");
              if(value !== null && value === value){
                val.check = value;
                if(val.check === value){
                document.getElementById("id01").style.display = "none";
              } 
              } else if(value === false){
                document.getElementById("id01").style.display = "block";
              } else{
                document.getElementById("id01").style.display = "block";
              }
              
              
              
               
             
          }
          function instruction(){
            let value = localStorage.getItem('value');
            let val = document.getElementById("modalSetting").checked;
            let valBool = document.getElementById("modalSetting");
            document.getElementById("modalSetting").checked = value;
            document.getElementById("id01").style.display = "block";
            document.getElementById("checkbox").style.display = "none";
            }
            
            </script>


<!--JOVIAL SAVE AS EMAIL SCRIPT BY MAJOR-->

<script type="text/javascript">
  $(document).ready(function() {
    var delay = 2000;
    $("#form").submit(function(event){
      event.preventDefault();

      var email = $('#email').val();
      if (email == ''){
        $('.msgbox').html(
          '<span> Please input field is not suppose to be empty</span>'
        );

        $('#email').focus();
        return false;
      }
     
     $('#msg').html('');
     var values = $(this).serialize();
       $.ajax ({
     
        url : "mailsub.php",
        type: "POST",
        data:  $(this).serialize(),
        beforeSend: function(){
          $('.msgbox').html(
            '<span><img src="Loader.gif" width="25" height="25"/> <span style="color:green"> Please wait a sec</span>'
          );
        }

      }).done (function(data) {
          
        setTimeout(function() {
          $("#form").trigger("reset");
                $('.msgbox').html(data);
            }, delay);
        });
     
    });
  });

</script>

<script type="text/javascript">




function CopyDivsToTextArea()
{
    var divs = document.getElementsByTagName("div");
    var textToTransfer = "";
    var pattern = new RegExp("test1");

   for(var i=0;i<divs.length;i++)
    {
    if(pattern.test(divs[i].className))
        {
           textToTransfer += (divs[i].innerText || divs[i].textContent);
        }
     }
 document.getElementById("ta").value = textToTransfer;
}

</script>
<script>
    const reset = document.getElementById("reset");
    reset.addEventListener("click", (e)=>{
    e.target.parentElement.nextElementSibling.children[0].value = "";
      
    });
    const reset1 = document.getElementById("reset1");
    reset1.addEventListener("click", (e)=>{
    e.target.parentElement.nextElementSibling.children[0].value = "";
      
    })
</script>

    </body>
</html>

