<?php 
// $card = $_GET;
 $emaile_from_db = "asd@asd.com";
 $pas_from_db = "123";






?>






<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php forms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body class="container">
    <a href="../">back</a>
    <h1>php forms</h1>


    <div class="my-5">
      <a href="./login" class="btn btn-primary">Login Form -full</a>
    </div>










    
    <?php 
    if (!empty($_GET) && isset($_GET["email"]) && isset($_GET["pas"])){
      if ($_GET["email"] == $emaile_from_db && $_GET["pas"] == $pas_from_db) {
        echo "
        <div class='alert alert-success' role='alert'>
        you are logged in!
        </div>";
    } else {
        echo "
        <div class='alert alert-danger' role='alert'>
        incorrect email or pas!
        </div>";
    }
    }
    ?>

    <form class="w-50" method="GET" > 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label ">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pas" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">logein</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>