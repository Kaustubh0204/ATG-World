 <?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
   
    if ($num == 1){
   
        while($row=mysqli_fetch_assoc($result)){
         
         
            if (password_verify($password ,$row['password'])){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header("location: index.php");
            } 
            else{
                $showError = "Invalid Credentials";
            }
        }
        
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta property="og:title" content="ATG-World">
    <meta property="og:description" content="Responsive blogging website frontend">
    <meta property="og:image" content="https://i.imgur.com/qnuCS07.png">
    <meta property="og:url" content="https://world-atg.000webhostapp.com">
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
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin:1vw;">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert" style="margin-top:1vw;">
    <strong>Error!</strong> Invalid credentials.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>

<div class="d-flex justify-content-center text-light">
<div class="container col-6  " style="border-style:solid;border-color: gray;padding:2vw;margin:2vw;border-radius:2vw;">
<form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email-ID</label>
    <input class="form-control" type="email" name="email" placeholder="Registered email id" id="email">
    <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input class="form-control" type="password" name="password" placeholder="Password" id="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Log In</button>
</form>
<br>
<p>New user?<a href="signup.php"> Create an account</a></p>
</div>
</div>
</body>
</html>


