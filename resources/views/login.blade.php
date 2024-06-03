<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT Rahmat Alam Samudera | Login</title>


  <!-- font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- icon -->
  <link rel="stylesheet" href="test-internship/resources/views/icon.css">
  <!-- tema -->
  <link rel="stylesheet" href="test-internship/resources/views/tema.css">
</head>
<style>
  body {
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
</style>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card card-outline card-purple">
      <div class="card-header text-center">
        <a href="" class="h1"><b>Testing Internship </b>PT Rahmat Alam Samudera </a>
      </div>
      <div class="card-body">
        <p class="login-box-msg"><b>Owner login</b></p>
        <br>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" value="admin" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" value="admin" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" name="submit" class="btn btn-warning btn-block" style="color: whitesmoke;">Log In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>