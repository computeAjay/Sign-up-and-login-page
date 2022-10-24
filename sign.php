<?php 
include 'connect.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
  include 'connect.php';
  if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $cpassword=md5($_POST['cpassword']); 
    // $sql="insert into log (username,password) values('$username','$password')";
    // $result=mysqli_query($conn,$sql);
    // if($result){
    //   echo "inserted data";
    // }else{
    //   die(mysqli_error($conn));
    // }
    $sql="select * from log where username='$username'";
    $result=mysqli_query($conn,$sql);
    if($result){
      $num=mysqli_num_rows($result);
     if($num>0){
      echo "user already exist";
     }else{
      if($password===$cpassword){
       $sql="insert into log (username,password) values('$username','$password')";
       $result=mysqli_query($conn,$sql);
       if($result){
          echo "signup successfull";
          header('location:login.php');
        }
      }else{
          echo "password didn't match";   
     }

    }
   
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
        <h3>Register </h3>
        <form action="" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="type here username" name="username" required>
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="password" class="form-control" placeholder="type here password" name="password" required>
            </div>
            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="confirm_password" name="cpassword" required>
            
            </div>
            <button type="submit"class="btn btn-primary" name="submit">singup</button>
        </form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>