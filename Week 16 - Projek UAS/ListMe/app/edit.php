<?php
session_start();
include_once('config.php');

if($_SESSION['status'] != "login")
{
  header("location:../index.php?pesan=belum_login");
}

$id = $_GET['id'];
$uname = $_SESSION['uname'];
$pwd = $_SESSION['pwd'];

$getQuery = "SELECT * FROM lists_table WHERE id='$id'";
$result = mysqli_query($conn, $getQuery);
$user_data = mysqli_fetch_array($result);
$title = $user_data['title'];
$description = $user_data['description'];
$status = $user_data['status'];
?>

<?php
if(isset($_POST['Update'])){
  $title = $_POST['Title'];
  $description = $_POST['Description'];
  $status = $_POST['Status'];

  $editQuery = "UPDATE lists_table SET title='$title', description='$description', status='$status' WHERE id=$id";

  $result = mysqli_query($conn, $editQuery);

  header('location:index.php');
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
      <div class="col-md-4 row-title">Edit your list</div>
    </div>
    <div class="row text-start justify-content-center">
      <div class="col-md-4 row-content">
        <form action="" method="POST">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="Title" class="form-control" id="exampleFormControlInput1" value="<?php echo $title; ?>" />
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea name="Description" class="form-control" id="exampleFormControlTextarea1" rows="6" value=""><?php echo $description; ?></textarea>
          </div>
          <div>
            <label for="exampleFormControlInput2" class="form-label">Status</label>
            <select class="form-select" name="Status" aria-label="Default select example">
              <option selected><?php echo $status; ?></option>
              <option value="To do">To do</option>
              <option value="In Progress">In Progress</option>
              <option value="Complete">Complete</option>
            </select>
          </div>
          <div class="d-grid mt-3">
            <button class="btn btn-primary" type="submit" name="Update">Update</button>
            <a href="index.php" class="btn btn-primary mt-2">
              <div class="">Back</div>
            </a>
          </div>
        </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
