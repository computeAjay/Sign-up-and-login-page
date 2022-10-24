<?php 
include 'connect.php';
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}




?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>welcome page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  </head>
  <body>
    <div class="container my-5 bg-warning">
        <div class="jumbotron">
        <h1>welcome <?php echo $_SESSION['username'] ?></h1>
        <p>this is your book
        his is your book
        his is your book

        </p>
        <p>this is your book
        his is your book
        his is your book

        </p>
        <a href="logout.php" class="btn btn-danger" role="button">logout</a>
        </div>
    </div>
       
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>