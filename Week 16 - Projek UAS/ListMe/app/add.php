<?php
session_start();
include_once("config.php");

if($_SESSION['status'] != "login")
{
  header("location:../index.php?pesan=belum_login");
}

$uname = $_SESSION['uname'];
$pwd = $_SESSION['pwd'];

$gdata = mysqli_query($conn, "SELECT * FROM users WHERE username='$uname' and password='$pwd'");
$id = mysqli_fetch_array($gdata);

if(isset($_POST['Submit'])) {
  $title = $_POST['Title'];
  $description = $_POST['Description'];
  $status = $_POST['Status'];

  $addQuery = "INSERT INTO lists_table (title, description, status, userid) VALUES ('$title', '$description', '$status', '$id[0]')";
  $result = mysqli_query($conn, $addQuery);
  header("location:index.php");
}
?>

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
        src: url("../font/Montserrat-Regular.ttf") format("truetype");
      }

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: "Montserrat";
      }

      .sampul-header {
        width: 100vw;
        height: 300px;
        background: url("../img/Frame.png");
        background-size: cover;

        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
      }

      .workspace-section {
        margin-left: 60px;
        margin-right: 60px;
      }

      .workspace-section .workspace-name {
        font-size: 32px;
        font-weight: bold;
        color: black;

        margin-bottom: 20px;
      }

      .workspace-section .workspace-desc {
        font-size: 16px;
        color: #000000;

        margin-bottom: 30px;
      }

      .row-title {
        font-size: 32px;
        font-weight: bold;
        margin-top: 60px;
        margin-bottom: 30px;
      }

      .row-content .btn {
        height: 48px;
        background-color: #f9963a;
        border: none;

        font-size: 20px;
        font-weight: bold;
      }

      .row-content a {
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <div class="sampul-header">
      <div class="workspace-section">
        <div class="workspace-name"><?php echo "$uname";?> workspace 📚</div>
        <div class="workspace-desc">
          Ini semua catatan tugasku, tidak ada catatan selain tugas disini. <br />
          <b>"non scholae sed vitae discimus".</b>
        </div>
      </div>
    </div>

    <!-- Body -->
    <div class="row text-start justify-content-center">
      <div class="col-md-4 row-title">Add new list</div>
    </div>
    <div class="row text-start justify-content-center">
      <div class="col-md-4 row-content">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="Title" class="form-control" id="exampleFormControlInput1" placeholder="type your list title" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="Description" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="type your list description"></textarea>
          </div>
          <div>
            <label for="exampleFormControlInput2" class="form-label">Status</label>
            <select class="form-select" name="Status" aria-label="Default select example">
              <option selected>choose your list status</option>
              <option value="1">To do</option>
              <option value="2">In Progress</option>
              <option value="3">Complete</option>
            </select>
          </div>
          <div class="d-grid mt-3">
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="font-weight: 400">Add new</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Attention!</h1>
                  </div>
                  <div class="modal-body">Are you sure to add new list?</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: white; color: #f9963a; font-weight: 400; border: 1px solid #f9963a">Cancel</button>
                    <button type="submit" name="Submit" class="btn btn-primary" style="color: white; font-weight: 400">Add new</button>
                  </div>
                </div>
              </div>
            </div>
            <a href="index.php" class="btn btn-primary mt-2">
              <div class="" style="font-weight: 400">Back</div>
            </a>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
