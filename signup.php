<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST["email"];
    $name = $_POST["name"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exists=false;

    // Check whether this email id exists
    $existSql = "SELECT * FROM `users` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Email-ID Already Exists";
    }
    else{

        // Validate password strength
        $uppercase = preg_match('@[A-Z]@', $name);
        $lowercase = preg_match('@[a-z]@', $name);
        $number    = preg_match('@[0-9]@', $name);
        $specialChars = preg_match('@[^\w]@', $name);


        if(($uppercase || $lowercase) && !$number && !$specialChars){

                        if( strlen($password) >= 8)
                        {

                            // $exists = false; 
                            if(($password == $cpassword)){
                                    $hash = password_hash($password, PASSWORD_DEFAULT);
                                    $sql = "INSERT INTO `users` ( `email`, `name`, `password`, `date`) VALUES ('$email', '$name', '$hash', current_timestamp())";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result){
                                        $showAlert = true;
                                    }
                            }
                            else{
                                $showError = "Passwords do not match";
                            }
                    }
                    else{
                        $showError = "Passwords must be minimum of 8 caracters long.";
                    }
            }
            
            else{
                $showError = "Name must be in letters only.";
            }
}}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="ATG-World">
    <meta property="og:description" content="Responsive blogging website frontend">
    <meta property="og:image" content="https://i.imgur.com/qnuCS07.png">
    <meta property="og:url" content="https://world-atg.000webhostapp.com">
    <title>Sign up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@500&display=swap" rel="stylesheet">
<link rel="icon" href="logos/logo.png" type="image/icon type">

</head>
<body style="font-family: 'IBM Plex Sans', sans-serif; background-image: url('images/login-background.png');background-size: 100%;background-repeat: no-repeat;">


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 2vw; padding-right: 1vw;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img class="img-fluid" src="images/logo.png" alt="can't load">
                  </a>
                </div>
</nav>

<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can <a href="login.php">login</a>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
           
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:1vw;">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            
        </button>
    </div> ';
    }
    ?>



<div class="d-flex justify-content-center text-light">
<div class="container col-6  " style="border-style:solid;border-color: gray;padding:2vw;margin:2vw;border-radius:2vw"">
<form action="signup.php" method="post">
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input class="form-control" type="text" name="name" placeholder="Your username" id="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email-ID</label>
    <input class="form-control" type="email" name="email" placeholder="Valid email-ID" id="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input class="form-control" type="password" name="password" placeholder="Password" id="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputConfirmPassword1" class="form-label">Confirm Password</label>
    <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password" id="cpassword">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
<br>
<p>Already have an account?<a href="signup.php"> Log in</a></p>
</div>
</div>
</body>
</html>