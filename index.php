<!-- <!DOCTYPE html>
<html>
<head>

<script>
function setColor(btn, color){
    var count=1;
    var property = document.getElementById(btn);
    if (count == 0){
        property.style.backgroundColor = "#000000"
        count=1;        
    }
    else{
        property.style.backgroundColor = "#FFFFFF"
        count=0;
    }

}
</script>
</head>

<body>

<input type="button" id="button" value = "button" style= "background-color: white; color:black;" onclick="setColor('button', '#101010')";/>

<script>
    var count = 1;
    function setColor(btn, color) {
        var property = document.getElementById(btn);
        if (count == 0) {
            property.style.backgroundColor = "#000000"
            property.style.color = "#FFFFFF"
            count = 1;        
        }
        else {
            property.style.backgroundColor = "#FFFFFF"
            property.style.color = "#000000"
            count = 0;
        }
    }
</script>

</body>
</html> -->
<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

include '_dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="icon" href="logos/logo.png" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'IBM Plex Sans', sans-serif;">
    <cool-ad>
        <template class="ad__mobile">
            <style>
                #search {
                    background-image: url(logos/search.png);
                    background-repeat: no-repeat;
                    text-indent: 20px;
                }
        
                #search:active {
                    background-image: none;
                }
            </style>
            <!-- <nav class="navbar navbar-expand-lg navbar-light" style="color: white;">
                <div class="container-fluid" style="padding-left: 2vw; padding-right: 4vw;">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="can't load"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex ms-auto">
                            <input id="search" style="border-radius: 2vw; width: 24vw; background-color: #F2F2F2; font-weight: 500;"
                                class="form-control me-2" type="search" placeholder="Search for your favourite groups in ATG"
                                aria-label="Search">
        
                        </form>
                        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
        
        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span style="color: black;">Create account.</span> <span style="color: blue;">It’s
                                        free!</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn" style="background-color: #EDEEF0;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Sign Up
                                            </button>
                                        </div>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn" style="background-color: #EDEEF0; border-color: white" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                Sign In
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    
                                </ul>
                            </li>
        
                        </ul>
        
                    </div>
                </div>
            </nav> -->

         

            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 2vw; padding-right: 1vw;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img class="img-fluid" src="images/logo.png" alt="can't load"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span style="color: black;">Create account.</span> <span style="color: blue;">It’s
                                free!</span>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign Up</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#exampleModal2">Sign In</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" href="sessionend.php">Session end</a></li>
                        </ul>
                      </li>
                    
                  </div>
                </div>
              </nav>
              <?php
              $sql = "Select * from users where email='$_SESSION[email]'";
              $result = mysqli_query($conn, $sql);
              $row=mysqli_fetch_assoc($result);
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:1vw;">
              <strong> Welcome!</strong>  '. $row['name'].'
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            ?>
        
        
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="z-index: 0;" src="images/banner4.png" class="d-block w-100" alt="...">
                            <button type="button" class="btn" style="color: white;border-color: white; z-index: 1; position: absolute; top:8%;right:8%;">Join Group</button>
                            <img src="logos/back.png" style="z-index: 1; position: absolute; top:10%;left:10%; color: white;height: 16px; width: 16px;">
                            <h1 style="z-index: 1; position: absolute; top:70%;left:10%; color: white;">Computer Engineering</h1>
                            <p style="z-index: 1; position: absolute; top:82%;left:10%; color: white;">142,765 Computer Engineers follow this</p>
                        
                    </div>
        
                </div>
        
            </div>
        
           
                <!-- <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#" style="color: black;">All Posts(32)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Article</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Event</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Education</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Job</a>
                      </li>
                      
                      <li class="nav-item ms-auto">
                        <button style="background-color: #EDEEF0;color: black;border-color: white;"class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Write a Post
                          </button>
                          &nbsp
                        <button type="button" class="btn btn-primary"><img src="logos/join.png"> &nbspJoin Group</button>
                      </li>
                </ul> -->
                <br>
                
               

                  <div class="container">
                    <div class="row">
                      <div class="col-8">
                        
                        <h5  style="font-weight: 700;">Posts(368)</h5> 


                      </div>
                      
                      <div class="col-4">
                        
                        <div class="dropdown" >
                    
                            <button style="background-color: #F1F3F5; font-weight: 500;" class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Filter:All
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>


                      </div>
                    </div>
                  </div>
                 
                <div class="container" style="padding-top: 2vw;">
                    
                    
                
               
                    
                            <div class="card mb-3">
                                <img src="images/article1.png" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <p class="card-title">✍️ Article</p>
                                    <div class="row row-cols-auto" style="padding-right: 4vw;">
                                        <div class="col-8"><h5 class="card-text" style="font-size: 16px;font-weight: 700;">What if famous brands had regular fonts? Meet RegulaBrands!</h5></div>
                                        <div class="ms-auto">
                                            <div class="col-4 ms-auto">
                                        
                                                    <div class="btn-group">
                                                        <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="logos/more.png">
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    </div>
                                    <br>
                                    <p class="text-muted">I’ve worked in UX for the better part of a decade. F..</p>
                                    <br><br>
                                    <div class="row row-cols-auto">
                                        <div class="col"><img src="images/editor1.png"></div>
                                        
                                        <div class="col"><p style="padding: 0px;"><span style="font-weight: 700;">Sarthak Kamra</span><br><span class="text-muted">1.4k views</span></p></div>
                                    <div class="col ms-auto"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"> &nbspShare</button></div>
                                    </div>
                                </div>
                        </div>
                        <div class="card mb-3">
                            <img src="images/article2.png" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="card-title">🔬️ Education</p>
                                <div class="row row-cols-auto" style="padding-right: 4vw;">
                                    <div class="col-8"><h5 class="card-text" style="font-size: 16px;font-weight: 700;">Tax Benefits for Investment under National Pension Scheme launched by Government</h5></div>
                                    <div class="ms-auto">
                                            <div class="col-4 ms-auto">
                                        
                                                    <div class="btn-group">
                                                        <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="logos/more.png">
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                                <br>
                                <p class="text-muted">I’ve worked in UX for the better part of a decade. From now on, I plan to rei…</p>
                                <br><br>
                                <div class="row row-cols-auto">
                                    <div class="col"><img src="images/editor2.png"></div>
                                    <div class="col"><p style="padding: 0px;"><span style="font-weight: 700;">Sarah West</span><br><span class="text-muted">4.8k views</span></p></div>
                                    <div class="col ms-auto"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"> &nbspShare</button></div>
                                </div>
                            </div>
                    </div>
                    <div class="card mb-3">
                            <img src="images/article3.png" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <p class="card-title">🗓️ Meetup</p>
                                <div class="row row-cols-auto" style="padding-right: 4vw;">
                                    <div class="col-8">
                                        <h5 class="card-text" style="font-size: 16px;font-weight: 700;">Finance & Investment Elite Social Mixer @Lujiazui</h5>
                                    </div>
                                    <br>
                                    <div class="ms-auto">
                                        <div class="col-4 ms-auto" >
                                                <div class="btn-group">
                                                    <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="logos/more.png">
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <br>
                                <p style="font-size:14px;"><img src="logos/calender.png">&nbsp  Fri, 12 Oct, 2018 &nbsp <img src="logos/location.png">&nbsp  Ahmedabad, India</p>
                                <br><br>
                                <div class="d-grid gap-2">
                                <button class="btn" style="background-color: white;border-color: #A9AEB8; color:#E56135" type="button">Visit Website</button>
                                </div>
                                <br>
                                <div class="row row-cols-auto">
                                    <div class="col"><img src="images/editor3.png"></div>
                                    <div class="col"><p style="padding: 0px;"><span style="font-weight: 700;">Ronal Jones</span><br><span class="text-muted">800 views</span></p></div>
                                    <div class="col ms-auto"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"> &nbspShare</button></div>
                                </div>
                            </div>
                            </div>
        
                        <div class="card mb-3">
                            
                            <div class="card-body">
                                <p class="card-title">💼️ Job</p>
                                <div class="row row-cols-auto" >
                                    <div class="col-8">
                                        <h5 class="card-text" style="font-size: 16px;font-weight: 700;">Software Developer - II</h5>
                                    </div>
                                    <br>
                                    <div class="ms-auto" style="padding-right: 4vw;">
                                        <div class="col-4 ms-auto" >
                                                <div class="btn-group">
                                                    <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="logos/more.png">
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <br>
                                <p style="font-size:14px;"><img src="logos/suitcase.png">&nbsp  Innovaccer Analytics Private Ltd. &nbsp <img src="logos/location.png">&nbsp  Noida, India</p>
                                <br><br>
                                <div class="d-grid gap-2">
                                <button class="btn" style="background-color: white;border-color: #A9AEB8; color:#02B875" type="button">Apply on Timesjobs</button>
                                </div>
                                <br>
                                <div class="row row-cols-auto">
                                    <div class="col"><img src="images/editor4.png"></div>
                                    <div class="col"><p style="padding: 0px;"><span style="font-weight: 700;">Joseph Gray</span><br><span class="text-muted">1.7k views</span></p></div>
                                    <div class="col ms-auto"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"> &nbspShare</button></div>
                                </div>
                            </div>
                            </div>
        
        
                    </div>
                  
                 
                </div>
                    
                        <!-- <style>
                            input[type="text"],
                            select.form-control {
                            background: transparent;
                            border: none;
                            border-bottom: 1px solid #B8B8B8;
                            -webkit-box-shadow: none;
                            box-shadow: none;
                            border-radius: 0;
                            }
        
                            input[type="text"]:focus,
                            select.form-control:focus {
                            -webkit-box-shadow: none;
                            box-shadow: none;
                            }
        
                            #search2 {
                            background-image: url(logos/location.png);
                            background-repeat: no-repeat;
                            text-indent: 20px;
                            }
        
                            #search2:active {
                                background-image: none;
                            }
        
                        </style>
                        
                        <div class="form-group">
                            <input style="width:20.066vw;font-size: 1.936vh;" type="text" name="name" class="form-control" id="search2" value="Noida, India">
                            <br>
                            <p style="font-size:12px; color:black; opacity:0.5;"><img src="logos/info.png">&nbspYour location will help us serve better and extend a personalised experience.</p>
                        </div> -->
                    
                    
   

        
  <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Modal 2 -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" > 
     <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Let's learn, share & inspire each other with our passion for computer engineering. Sign up now 🤘🏼</strong>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700">Sign In</h5>
          
        </div>
        <div class="modal-body">
          
          <div class="row">
              <div class="col-6">
                  <form class="row g-3"> 
                          
                          <div class="col-12">
                              <input style="background-color: #D9D9DB" type="email" class="form-control" id="email" placeholder="Email">
                          </div>
                          <div class="col-12">
                              <input style="background-color: #D9D9DB" type="password" class="form-control" id="password" placeholder="Password">
                          </div>
  
                          
                          <div class="col-12">
                              <div class="d-grid gap-2">
                              <a href="user.php" style="border-radius: 2vw" class="btn btn-primary" type="button">Sign In</a>
                              <br>
                              <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/facebook.png">&nbsp&nbspSign in with Facebook</a>
                              <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/google.png">&nbsp&nbspSign in with Google</a>
                              <br>
                              <a href="#" style="text-align: center; font-weight: 500; font-size: 12px; color:black;">Forgot Password?</a>
                              </div>
                          </div>
                      </form>
              </div>
              <div class="col-6">
   
                  <div class="col-12">
                          <p style="text-align:right; font-size: 13px; color: #3D3D3D">Don’t have an account yet? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-dismiss="modal">Create new for free!</a> </p>
                  </div>
  
                  <div class="col-12">
                          <img class="img-fluid" src="images/vector1.png">
                  </div>
  
                 
      
              </div>
      </div>
  
        </div>
       
      </div>
    </div>
  </div>
         
        <!-- Modal 1 -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
          <div class="modal-dialog" >
            <div class="modal-content" > <!--  style="width: 1000px;" -->
           <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Let's learn, share & inspire each other with our passion for computer engineering. Sign up now 🤘🏼</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700">Create Account</h5>
                
              </div>
              <div class="modal-body">
        
        
               <div class="row">
                    <div class="col-6">
                        <form class="row g-3"> 
                                <div class="col-md-6">
                                    <input style="background-color: #D9D9DB" type="name" class="form-control" id="name" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input style="background-color: #D9D9DB" type="lname" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password">
                                </div>
                                
                                <div class="col-12">
                                    <div class="d-grid gap-2">
                                    <a  href="user.php" style="border-radius: 2vw" class="btn btn-primary" type="button">Create Account</a>
                                    <br>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/facebook.png">&nbsp&nbspSign up with Facebook</a>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/google.png">&nbsp&nbspSign up with Google</a>
                                    
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-6">
        
                        <div class="col-12">
                                <p style="text-align:right; font-size: 13px; color: #3D3D3D">Already have an account? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-dismiss="modal">Sign In</a> </p>
                        </div>
        
                        <div class="col-12">
                                <img class="img-fluid" src="images/vector1.png">
                        </div>
        
                        <div class="col-12">
                        
                            <p style="text-align:center; font-size: 11px; color: black; opacity: 0.6">By signing up, you agree to our Terms & conditions, Privacy policy</p>
                        </div>
            
            
                    </div>
            </div>
                
                
                
        
        
              </div>
             
            </div>
       



            
             
        
        
        <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" > 
           <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Let's learn, share & inspire each other with our passion for computer engineering. Sign up now 🤘🏼</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700">Sign In</h5>
                
              </div>
              <div class="modal-body">
                
                <div class="row">
                    <div class="col-6">
                        <form class="row g-3"> 
                                
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
        
                                
                                <div class="col-12">
                                    <div class="d-grid gap-2">
                                    <a href="user.php" style="border-radius: 2vw" class="btn btn-primary" type="button">Sign In</a>
                                    <br>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/facebook.png">&nbsp&nbspSign in with Facebook</a>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/google.png">&nbsp&nbspSign in with Google</a>
                                    <br>
                                    <a href="#" style="text-align: center; font-weight: 500; font-size: 12px; color:black;">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-6">
         
                        <div class="col-12">
                                <p style="text-align:right; font-size: 13px; color: #3D3D3D">Don’t have an account yet? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-dismiss="modal">Create new for free!</a> </p>
                        </div>
        
                        <div class="col-12">
                                <img class="img-fluid" src="images/vector1.png">
                        </div>
        
                       
            
                    </div>
            </div>
        
              </div>
             
            </div>
          </div>
        </div> -->
        
        </template>
        <template class="ad__desktop">
            <style>
                #search {
                    background-image: url(logos/search.png);
                    background-repeat: no-repeat;
                    text-indent: 20px;
                }
        
                #search:active {
                    background-image: none;
                }
            </style>
            <nav class="navbar navbar-expand-lg navbar-light" style="color: white;">
                <div class="container-fluid" style="padding-left: 2vw; padding-right: 4vw;">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" alt="can't load"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex ms-auto">
                            <input id="search" style="border-radius: 2vw; width: 24vw; background-color: #F2F2F2; font-weight: 500;"
                                class="form-control me-2" type="search" placeholder="Search for your favourite groups in ATG"
                                aria-label="Search">
        
                        </form>
                        <ul class="navbar-nav  mb-2 mb-lg-0 ms-auto">
        
        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span style="color: black;">Create account.</span> <span style="color: blue;">It’s
                                        free!</span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn" style="background-color: #EDEEF0;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Sign Up
                                            </button>
                                        </div>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li>
                                        <div class="d-grid gap-2">
                                            <button type="button" class="btn" style="background-color: #EDEEF0; border-color: white" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                                Sign In
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <div class="d-grid gap-2">
                                            <a href="sessionend.php" type="button" class="btn" style="background-color: #EDEEF0; border-color: white" >
                                                Session End
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
        
                        </ul>
        
                    </div>
                </div>
            </nav>
        
            <?php
              $sql = "Select * from users where email='$_SESSION[email]'";
              $result = mysqli_query($conn, $sql);
              $row=mysqli_fetch_assoc($result);
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top:1vw;">
              <strong> Welcome!</strong>  '. $row['name'].'
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>'
            ?>
        
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 style="text-align: left;">Computer Engineering</h1>
                            <p style="text-align: left;">142,765 Computer Engineers follow this</p>
                        </div>
                    </div>
        
                </div>
        
            </div>
        
            <div class="container" style="padding:2vw;">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#" style="color: black;">All Posts(32)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Article</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Event</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Education</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Job</a>
                      </li>
                      
                      <li class="nav-item ms-auto">
                        <button style="background-color: #EDEEF0;color: black;border-color: white;"class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Write a Post
                          </button>
                          &nbsp
                        <button type="button" class="btn btn-primary"><img src="logos/join.png"> &nbspJoin Group</button>
                      </li>
                </ul>
        
                <br>
        
                <div class="row">
                    <div class="col-8">
                            <div class="card mb-3">
                                <img src="images/article1.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-title">✍️ Article</p>
                                    <div class="row row-cols-auto">
                                        <div class="col"><h5 class="card-text">What if famous brands had regular fonts? Meet RegulaBrands!</h5></div>
                                        <div class="ms-auto">
                                            <div class="col ms-auto">
                                        
                                                    <div class="btn-group">
                                                        <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="logos/more.png">
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    </div>
                                    <br>
                                    <p class="text-muted">I’ve worked in UX for the better part of a decade. From now on, I plan to rei…</p>
                                    <br><br>
                                    <div class="row row-cols-auto">
                                        <div class="col"><img src="images/editor1.png"></div>
                                        <div class="col"><p style="padding: 0px;">Sarthak Kamra</p></div>
                                        <div class="col ms-auto"><img src="logos/views.png"></div>
                                        <div class="col"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"></button></div>
                                    </div>
                                </div>
                        </div>
                        <div class="card mb-3">
                            <img src="images/article2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title">🔬️ Education</p>
                                <div class="row row-cols-auto">
                                    <div class="col"><h5 class="card-text">Tax Benefits for Investment under National Pension Scheme launched by </h5></div>
                                    <div class="ms-auto">
                                            <div class="col ms-auto">
                                        
                                                    <div class="btn-group">
                                                        <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <img src="logos/more.png">
                                                        </button>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Edit</a></li>
                                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                                            <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                        </ul>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                                
                                <p class="text-muted">I’ve worked in UX for the better part of a decade. From now on, I plan to rei…</p>
                                <br><br>
                                <div class="row row-cols-auto">
                                    <div class="col"><img src="images/editor2.png"></div>
                                    <div class="col"><p style="padding: 0px;">Sarah West</p></div>
                                    <div class="col ms-auto"><img src="logos/views.png"></div>
                                    <div class="col"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"></button></div>
                                </div>
                            </div>
                    </div>
                    <div class="card mb-3">
                            <img src="images/article3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title">🗓️ Meetup</p>
                                <div class="row row-cols-auto" >
                                    <div class="col">
                                        <h5 class="card-text">Finance & Investment Elite Social Mixer @Lujiazui</h5>
                                    </div>
                                    <br>
                                    <div class="ms-auto">
                                        <div class="col ms-auto" >
                                                <div class="btn-group">
                                                    <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="logos/more.png">
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <br>
                                <p style="font-size:14px;"><img src="logos/calender.png">&nbsp  Fri, 12 Oct, 2018 &nbsp <img src="logos/location.png">&nbsp  Ahmedabad, India</p>
                                <br><br>
                                <div class="d-grid gap-2">
                                <button class="btn" style="background-color: white;border-color: #A9AEB8; color:#E56135" type="button">Visit Website</button>
                                </div>
                                <br>
                                <div class="row row-cols-auto">
                                    <div class="col"><img src="images/editor3.png"></div>
                                    <div class="col"><p style="padding: 0px;">Ronal Jones</p></div>
                                    <div class="col ms-auto"><img src="logos/views.png"></div>
                                    <div class="col"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"></button></div>
                                </div>
                            </div>
                            </div>
        
                        <div class="card mb-3">
                            
                            <div class="card-body">
                                <p class="card-title">💼️ Job</p>
                                <div class="row row-cols-auto" >
                                    <div class="col">
                                        <h5 class="card-text">Software Developer</h5>
                                    </div>
                                    <br>
                                    <div class="ms-auto">
                                        <div class="col ms-auto" >
                                                <div class="btn-group">
                                                    <button type="button" style="background-color:white;border-color: white;" class="btn btn-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <img src="logos/more.png">
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <li><a class="dropdown-item" href="#">Report</a></li>
                                                    <li><a class="dropdown-item" href="#">Option 3</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <br>
                                <p style="font-size:14px;"><img src="logos/suitcase.png">&nbsp  Innovaccer Analytics Private Ltd. &nbsp <img src="logos/location.png">&nbsp  Noida, India</p>
                                <br><br>
                                <div class="d-grid gap-2">
                                <button class="btn" style="background-color: white;border-color: #A9AEB8; color:#02B875" type="button">Apply on Timesjobs</button>
                                </div>
                                <br>
                                <div class="row row-cols-auto">
                                    <div class="col"><img src="images/editor4.png"></div>
                                    <div class="col"><p style="padding: 0px;">Joseph Gray</p></div>
                                    <div class="col ms-auto"><img src="logos/views.png"></div>
                                    <div class="col"><button type="button" class="btn" style="background-color: #EDEEF0;"><img src="logos/share.png"></button></div>
                                </div>
                            </div>
                            </div>
        
        
                    </div>
                  
                    <div class="col-1">
                        <!-- empty -->
                    </div>
                    
                    <div class="col-3">
                        <style>
                            input[type="text"],
                            select.form-control {
                            background: transparent;
                            border: none;
                            border-bottom: 1px solid #B8B8B8;
                            -webkit-box-shadow: none;
                            box-shadow: none;
                            border-radius: 0;
                            }
        
                            input[type="text"]:focus,
                            select.form-control:focus {
                            -webkit-box-shadow: none;
                            box-shadow: none;
                            }
        
                            #search2 {
                            background-image: url(logos/location.png);
                            background-repeat: no-repeat;
                            text-indent: 20px;
                            }
        
                            #search2:active {
                                background-image: none;
                            }
        
                        </style>
                        
                        <div class="form-group">
                            <input style="width:20.066vw;font-size: 1.936vh;" type="text" name="name" class="form-control" id="search2" value="Noida, India">
                            <br>
                            <p style="font-size:12px; color:black; opacity:0.5;"><img src="logos/info.png">&nbspYour location will help us serve better and extend a personalised experience.</p>
                        </div>
                    
                    </div>
                </div>

        
            </div>


  
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" >
          <div class="modal-dialog" >
            <div class="modal-content" style="width:  53.51vw;"> <!--  style="width: 1000px;" -->
           <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Let's learn, share & inspire each other with our passion for computer engineering. Sign up now 🤘🏼</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700">Create Account</h5>
                
              </div>
              <div class="modal-body">
        
        
               <div class="row">
                    <div class="col-6">
                        <form class="row g-3"> 
                                <div class="col-md-6">
                                    <input style="background-color: #D9D9DB" type="name" class="form-control" id="name" placeholder="First Name">
                                </div>
                                <div class="col-md-6">
                                    <input style="background-color: #D9D9DB" type="lname" class="form-control" id="lname" placeholder="Last Name">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="cpassword" class="form-control" id="cpassword" placeholder="Confirm Password">
                                </div>
                                
                                <div class="col-12">
                                    <div class="d-grid gap-2">
                                    <a  href="user.php" style="border-radius: 2vw" class="btn btn-primary" type="button">Create Account</a>
                                    <br>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/facebook.png">&nbsp&nbspSign up with Facebook</a>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/google.png">&nbsp&nbspSign up with Google</a>
                                    
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-6">
        
                        <div class="col-12">
                                <p style="text-align:right; font-size: 13px; color: #3D3D3D">Already have an account? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-dismiss="modal">Sign In</a> </p>
                        </div>
        
                        <div class="col-12">
                                <img class="img-fluid" src="images/vector1.png">
                        </div>
        
                        <div class="col-12">
                        
                            <p style="text-align:center; font-size: 11px; color: black; opacity: 0.6">By signing up, you agree to our Terms & conditions, Privacy policy</p>
                        </div>
            
            
                    </div>
            </div>
                
                
                
        
        
              </div>
             
            </div>
          </div>
        </div>
        
        <!-- <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
         -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="width:  53.51vw;"> <!--  style="width: 1000px;" -->
           <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Let's learn, share & inspire each other with our passion for computer engineering. Sign up now 🤘🏼</strong>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 700">Sign In</h5>
                
              </div>
              <div class="modal-body">
                
                <div class="row">
                    <div class="col-6">
                        <form class="row g-3"> 
                                
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input style="background-color: #D9D9DB" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
        
                                
                                <div class="col-12">
                                    <div class="d-grid gap-2">
                                    <a href="user.php" style="border-radius: 2vw" class="btn btn-primary" type="button">Sign In</a>
                                    <br>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/facebook.png">&nbsp&nbspSign in with Facebook</a>
                                    <a href="user.php" style="background-color: white; border-color: #D9D9DB" class="btn" type="button"><img src="logos/google.png">&nbsp&nbspSign in with Google</a>
                                    <br>
                                    <a href="#" style="text-align: center; font-weight: 500; font-size: 12px; color:black;">Forgot Password?</a>
                                    </div>
                                </div>
                            </form>
                    </div>
                    <div class="col-6">
         
                        <div class="col-12">
                                <p style="text-align:right; font-size: 13px; color: #3D3D3D">Don’t have an account yet? <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-dismiss="modal">Create new for free!</a> </p>
                        </div>
        
                        <div class="col-12">
                                <img class="img-fluid" src="images/vector1.png">
                        </div>
        
                       
            
                    </div>
            </div>
        
              </div>
             
            </div>
          </div>
        </div>
        
        </template>
      </cool-ad>

      <script>
          class AdComponent extends HTMLElement {
  connectedCallback() {
    const isMobile = matchMedia('(max-width: 540px)').matches;    
    const ad = document.currentScript.closest('.ad');
    const content = this
      .querySelector(isMobile ? '.ad__mobile' : '.ad__desktop')
      .content;
    
    this.appendChild(document.importNode(content, true));
  }
}

customElements.define('cool-ad', AdComponent);
      </script>
</body>
</html>