<?php
session_start();

if($_SERVER['REQUEST_METHOD']=="POST"){
  include 'connect.php';
  if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="select * from log where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num>0){
      // echo "login successfull";
      echo "<div class='alert alert-success' role='alert'><h5> login successfull</h5> </div>";
      $_SESSION['username']=$username;
      header('location:welcome.php');

    }else{
      // echo "invalid credentials";
      echo "<div class='alert alert-danger' role='alert'><h5>invalid credentials</h5> </div>";
    }
  }
}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="containere col-6 mx-auto mt-3">
        <h3>login in </h3>
        <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="password" name="password" required>
            </div>
            <input type="submit" class="btn btn-primary w-100%" name="login">
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>