<?php  
include 'config.php';

    session_start();
    if(!isset($_SESSION['username'])) {
        header('location:login.php');
        exit;
    }
?>

<!doctype html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="test.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg justify-content-md-center bg-success">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">Pepe Face</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
         <div class="row mb-3">
              <a href="logout.php"><button class="btn btn-success" name=""> Log Out</button></a>
          </div>
      </ul>
    </div>
  </div>
</nav>

<div class="image" style= "background-image: url('./image/meme3.jpg');">
    <img src="./image/meme3.jpg">
    
</div>
<div class="image" style= "background-image: url('./image/meme3.jpg');">
    <img src="./image/meme2.jpg">
    
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>