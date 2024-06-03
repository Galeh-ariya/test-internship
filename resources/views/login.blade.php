<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PT Rahmat Alam Samudera | LOGIN</title>

  <style>
    body {
      font-family: 'Source Sans Pro', sans-serif;
      background: #f4f6f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-box {
      width: 360px;
      margin: 7% auto;
    }

    .card {
      border-radius: 0.25rem;
      box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      border: 1px solid #d2d6da;
      background-color: #fff;
      padding: 20px;
    }

    .card-header {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-body {
      padding: 10px 20px;
    }

    .login-box-msg {
      margin: 0;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .input-group {
      margin-bottom: 15px;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
    }

    .input-group-append {
      display: flex;
      align-items: center;
    }

    .input-group-text {
      padding: 10px;
      border: 1px solid #ced4da;
      border-left: 0;
      border-radius: 0 0.25rem 0.25rem 0;
      background-color: #e9ecef;
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      user-select: none;
      border: 1px solid transparent;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      line-height: 1.5;
      border-radius: 0.25rem;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      width: 100%;
      color: #fff;
      background-color: #ffc107;
      border-color: #ffc107;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #e0a800;
      border-color: #d39e00;
    }

  </style>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="card">
      <div class="card-header">
        <a href="/" class="h1"><b>Testing Internship</b> PT Rahmat Alam Samudera</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg"><b>Selamat Datang!</b></p>
        <form action="/login" method="post">
          @csrf
          <div class="input-group">
            <h6>Email</h6>
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="input-group">
            <h6>Password</h6>
            <input type="password" name="password" class="form-control" placeholder="Password"> 
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" name="submit" class="btn">Log In</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>

</html>