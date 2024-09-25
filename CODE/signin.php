<!DOCTYPE html>
<html lang="en">

<head>
  <!-- favicon icon -->
  <link rel="shortcut icon" href="img/Brand_Broker_logo black 1.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: URL("img/background.jpg");
      object-fit: cover;
      background-repeat: no-repeat;
      background-size: 100% 100%;
    }

    .container1 {
      width: 350px;
      height: 400px;
    }

    .container1 img {
      height: 300px;
    }

    .container1 form {
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      place-items: center;
    }

    form .txt_field {
      width: 300px;
    }

    input[type="submit"] {
      margin-top: 20px;
    }
  </style>
  <title>user signin</title>
</head>

<body>
  <div class="container1">
    <div>
      <center>
        <h1>SignIn</h1>
      </center>
      <hr>
      <img src="img/signin.png">
    </div>
  </div>
  <div class="container1 container2">
    <form action="form.html" method="POST">
      <div class="txt_field">
        <input type="email" class="email" name="email" id="loginEmail" autocomplete="off">
        <span></span>
        <label>Username</label>
      </div>
      <div class="txt_field">
        <input type="password" class="password" name="password" a required>
        <span></span>
        <label>Password</label>
      </div>
      <input type="submit" value="Login" name="submit" id="loginbtn">
      <a href="#">Forget Password?<a>
          <a href="signup.html"> New User? Sign Up<a>
    </form>
  </div>
  <script src="index.js"></script>
  <script src="js/titlechange.js"></script>

</body>

</html>