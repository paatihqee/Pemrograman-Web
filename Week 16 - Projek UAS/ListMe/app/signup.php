<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ListMe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <style>
      @font-face {
        font-family: "Montserrat";
        src: url("/font/Montserrat-Regular.ttf") format("truetype");
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Montserrat";
      }
      .img-login {
        width: 700px;
        height: 95vh;
        background-color: aqua;
        margin-right: 20px;
        margin-bottom: 20px;
        margin-top: 20px;
        background: url("../img/Login Image.png");
        background-size: cover;
      }

      .field-login {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .container-login-field {
        width: 60%;
      }

      .container-login-field h3 {
        font-size: 32px;
        font-weight: bold;
      }

      .container-login-field p {
        font-size: 16px;
        margin-bottom: 30px;
        font-weight: bold;
      }

      .container-login-field a {
        color: #f9963a;
        text-decoration: none;
      }

      .form-control {
        height: 60px;
        border: 0.5px solid #737373;
      }

      .btn {
        width: 100%;
        height: 60px;
        background-color: #f9963a;
        border: none;
        color: white;
        font-weight: bold;
      }

      .btn:hover {
        background-color: #f9963a;
        color: white;
      }
    </style>
  </head>

  <?php
  include('config.php');

  if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $signUpQuery = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

    $result = mysqli_query($conn, $signUpQuery);
    echo "<script>
            alert('Registrasi Berhasil!');
          </script>";
    header("location:login.php");
  }
  ?>

  <body>
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md field-login">
            <div class="container-login-field">
              <form action="" method="POST">
              <h3>Hello, Welcome Brodi!</h3>
              <p>Have an account? <a href="login.php">Login.</a></p>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Username</label>
                <input name="username" type="username" class="form-control" id="exampleFormControlInput2" />
              </div>
              <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input name="password" type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock" />
              </div>
              <button class="btn" type="submit" name="signup">Sign Up</button>
              </form>
            </div>
          </div>
          <div class="col-md img-login"></div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
