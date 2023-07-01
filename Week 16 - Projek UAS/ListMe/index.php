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

      .container-fluid {
        margin-left: 100px;
        margin-right: 100px;
      }

      .navbar {
        height: 100px;
        box-shadow: 0px 4px 10px rgba(248, 166, 45, 0.2);
        background-color: white;
      }

      .login {
        padding: 10px 20px !important;
        display: flex;
        justify-content: center;
        background-color: #f9963a;
        color: white;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
      }

      .signup {
        padding: 10px 20px !important;
        display: flex;
        justify-content: center;
        background-color: white;
        border: 1px solid #f9963a;
        color: #f9963a;
        border-radius: 25px;
        margin-left: 20px;
        text-decoration: none;
        font-weight: bold;
      }

      .hero {
        margin: 180px 0px 0px;
      }

      .text-hero {
        text-align: center;
        font-size: 48px;
        font-weight: bold;
        margin-bottom: 90px;
      }

      .text-hero span {
        color: #f9963a;
      }

      .text-hero a {
        padding: 10px 20px;
        background-color: #f9963a;
        border-radius: 20px;
        font-size: 16px;
        color: white;
        text-decoration: none;
      }

      .sub-text-hero {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
      }

      .sub-text-hero span {
        color: #f9963a;
      }

      .sub-text-hero img {
        width: 12%;
        height: auto;
      }

      .img-hero {
        text-align: center;
      }

      .img-hero img {
        width: 100%;
        height: auto;
      }

      @media (max-width: 576px) {
        .text-hero {
          text-align: center;
          font-size: 24px;
          font-weight: bold;
          margin-bottom: 50px;
        }

        .sub-text-hero img {
          width: 22%;
          height: auto;
        }
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src=".\img\ListMe Brand.png" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="login" href=".\app\login.php">Login</a>
            <a class="signup" href=".\app\signup.php">Sign Up</a>
          </div>
        </div>
      </div>
    </nav>

    <section class="hero" id="hero">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-hero col-md">
              <span>Boost</span> Productivity 🚀 <br />
              <div class="sub-text-hero">Stay <span>organized</span> with <img src=".\img\ListMe Brand Hero.png" alt="" /></div>
            </div>
            <div class="img-hero col-md">
              <img src=".\img\App View.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
