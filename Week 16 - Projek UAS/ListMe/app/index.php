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

$fdata = mysqli_query($conn, "SELECT * FROM lists_table WHERE userid='$id[0]'");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Workspace - <?php echo "$uname";?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <style>
      @font-face {
        font-family: "Montserrat";
        src: url("../font/Montserrat-Regular.ttf") format("truetype");
      }

      body {
        font-family: "Montserrat";
      }

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      .sampul-header {
        width: 100vw;
        height: 300px;
        background-color: #8EAEFF !important;
        background: url("../img/Frame.png");
        background-size: cover;

        display: flex;
        justify-content: flex-start;
        align-items: flex-end;
      }

      .workspace-section {
        margin-left: 60px;
        margin-right: 60px;
        width: 100vw;
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        gap: 30px;
      }

      .workspace-section .workspace-name {
        font-size: 32px;
        font-weight: bold;
        color: #000000;

        margin-bottom: 20px;
      }

      .workspace-section .workspace-desc {
        font-size: 16px;
        color: #000000;

        margin-bottom: 30px;
      }

      .logout {
        display: flex;
        gap: 10px;
        width: 160px;
        padding: 8px 20px;
        background-color: #f9963a;
        justify-content: center;
        align-items: center;
        color: white;
        text-decoration: none;
        font-weight: bold;
        border-radius: 10px;
        margin-bottom: 30px;
        border: none;
      }

      .list-area {
        padding: 0px 60px;
        margin-top: 30px;
      }
      .group-header {
        width: 100%;
        height: 60px;
        padding: 0px 30px;
        margin-bottom: 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f9963a;
        border-radius: 10px;

        color: #ffffff;
        font-weight: bold;
        font-size: 20px;
      }

      .group-header h6 {
        padding: 0px;
        margin: 0px;
        color: #ffffff;
        font-weight: bold;
        font-size: 20px;
      }

      .to-do {
        width: 100%;
        min-height: 100px;
        padding: 20px 30px;
        margin-bottom: 30px;
        background-color: #eaeaea;
        border-radius: 10px;

        color: #000000;
        font-size: 16px;
      }

      .to-do h6 {
        margin-bottom: 10px;
        padding: 0;
        color: #000000;
        font-weight: bold;
        font-size: 20px;
      }

      .in-progress {
        width: 100%;
        min-height: 100px;
        padding: 20px 30px;
        margin-bottom: 30px;
        background-color: #d3e5ff;
        border-radius: 10px;

        color: #000000;
        font-size: 16px;
      }

      .in-progress h6 {
        margin-bottom: 10px;
        padding: 0;
        color: #000000;
        font-weight: bold;
        font-size: 20px;
      }

      .complete {
        width: 100%;
        min-height: 100px;
        padding: 20px 30px;
        margin-bottom: 30px;
        background-color: #d3ffd5;
        border-radius: 10px;

        color: #000000;
        font-size: 16px;
      }

      .complete h6 {
        margin-bottom: 10px;
        padding: 0;
        color: #000000;
        font-weight: bold;
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <!-- Header -->
    <div class="sampul-header">
      <div class="workspace-section">
        <div>
          <div id="title-name" class="workspace-name">
            <?php echo "$uname";?> workspace 📚
          </div>
          <div class="workspace-desc">
            <i>Lorem ipsum dolor sit amet consectetur adipisicing elit. In cum sequi provident consequuntur atque eius, rerum ex debitis nesciunt libero excepturi laborum exercitationem expedita reprehenderit architecto perferendis amet repellat. Commodi!</i>
          </div>
        </div>
        <div class="d-flex gap-3">
        <a href="logout.php" class="logout order-1">
          Logout
          <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.33331 10H16.6666M16.6666 10L14.1666 7.5M16.6666 10L14.1666 12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M3.33331 10C3.33331 8.2319 4.03569 6.53621 5.28593 5.28596C6.53618 4.03572 8.23187 3.33334 9.99998 3.33334M9.99998 16.6667C9.00046 16.6676 8.01359 16.4433 7.11263 16.0105C6.21168 15.5777 5.41981 14.9475 4.79581 14.1667" stroke="white" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </a>
      </div>
      </div>
    </div>

    <!-- Body -->
    <div class="list-area text-start">
      <!-- Header of Lists -->
      <div class="row align-items-start">
        <div class="col-md-4">
          <div class="group-header">
            <h6>To do</h6>
            <a href="add.php">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_2_22" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="28" height="28">
                  <path d="M26 4H6C4.89543 4 4 4.89543 4 6V26C4 27.1046 4.89543 28 6 28H26C27.1046 28 28 27.1046 28 26V6C28 4.89543 27.1046 4 26 4Z" fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                  <path d="M16 10.6667V21.3333M10.6667 16H21.3333" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </mask>
                <g mask="url(#mask0_2_22)">
                  <path d="M0 0H32V32H0V0Z" fill="white" />
                </g>
              </svg>
            </a>
          </div>
          <!-- Listnye disini -->
          <?php
            include_once('config.php');

            $dapatkan = mysqli_query($conn, "SELECT * FROM `lists_table` WHERE status='To do' and userid='$id[0]'");

            while($data = mysqli_fetch_array($dapatkan)) {
              echo "<div class='to-do'>
                      <div class='d-flex justify-content-between mb-2'>
                        <h6> $data[title] </h6>
                        <div class='cta-icon d-flex gap-3'>
                          <a class='edit' href='edit.php?id=$data[id]'>
                            <svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                              <path
                                d='M10.733 2.56C11.0921 2.20103 11.5791 1.99942 12.0869 1.99951C12.5946 1.99961 13.0815 2.2014 13.4405 2.5605C13.7995 2.91961 14.0011 3.4066 14.001 3.91436C14.0009 4.42211 13.7991 4.90903 13.44 5.268L12.707 6.002L9.99901 3.294L10.733 2.561V2.56ZM9.29301 4.001L3.33701 9.955C3.15623 10.1359 3.01997 10.3564 2.93901 10.599L2.02501 13.342C1.99556 13.4301 1.99122 13.5246 2.01248 13.615C2.03374 13.7054 2.07976 13.7881 2.14537 13.8538C2.21099 13.9196 2.29361 13.9657 2.38398 13.9871C2.47435 14.0085 2.56889 14.0043 2.65701 13.975L5.40001 13.06C5.64301 12.98 5.86301 12.843 6.04401 12.662L12 6.709L9.29201 4L9.29301 4.001Z'
                                fill='#0066FF'
                              />
                            </svg>
                          </a>
                            <a href='' class='delete' name='aplot' data-bs-toggle='modal' data-bs-target='#deleteModal$data[id]'>
                            <svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                            <path
                              d='M4.00001 12.6667C4.00001 13.4 4.60001 14 5.33334 14H10.6667C11.4 14 12 13.4 12 12.6667V6C12 5.26667 11.4 4.66667 10.6667 4.66667H5.33334C4.60001 4.66667 4.00001 5.26667 4.00001 6V12.6667ZM12 2.66667H10.3333L9.86001 2.19333C9.74001 2.07333 9.56668 2 9.39334 2H6.60668C6.43334 2 6.26001 2.07333 6.14001 2.19333L5.66668 2.66667H4.00001C3.63334 2.66667 3.33334 2.96667 3.33334 3.33333C3.33334 3.7 3.63334 4 4.00001 4H12C12.3667 4 12.6667 3.7 12.6667 3.33333C12.6667 2.96667 12.3667 2.66667 12 2.66667Z'
                              fill='#FF0000'
                            />
                          </svg>
                        </a>                       
                        </div>
                      </div>
                      <div class='list-desc'>$data[description]</div>
                    </div>";
                    echo "<div class='modal fade' id='deleteModal$data[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h1 class='modal-title fs-5' id='exampleModalLabel' style='color: red;'>Attention!</h1>
                                </div>
                                <div class='modal-body'>
                                  Are you sure to delete new list?
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal' style='color: white; border: none;'>Close</button>
                                  <a href='delete.php?id=$data[id]' class='btn btn-primary' style='color: white; background-color: red; border: none;'>Delete selected</a>             
                                </div>
                              </div>
                            </div>
                          </div>";
            }
          ?>
        </div>
        <div class="col-md-4">
          <div class="group-header">
            <h6>In Progress</h6>
            <a href="add.php?pesan=progress">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_2_22" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="28" height="28">
                  <path d="M26 4H6C4.89543 4 4 4.89543 4 6V26C4 27.1046 4.89543 28 6 28H26C27.1046 28 28 27.1046 28 26V6C28 4.89543 27.1046 4 26 4Z" fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                  <path d="M16 10.6667V21.3333M10.6667 16H21.3333" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </mask>
                <g mask="url(#mask0_2_22)">
                  <path d="M0 0H32V32H0V0Z" fill="white" />
                </g>
              </svg>
            </a>
          </div>

          <!-- Listnye disini -->
          <?php
            include_once('config.php');

            $dapatkan = mysqli_query($conn, "SELECT * FROM `lists_table` WHERE status='In Progress' and userid='$id[0]'");
            // $title = mysqli_fetch_array($dapatkan);

            while($data = mysqli_fetch_array($dapatkan)) {
              echo "<div class='in-progress'>
                      <div class='d-flex justify-content-between mb-2'>
                        <h6> $data[title] </h6>
                        <div class='cta-icon d-flex gap-3'>
                          <a class='edit' href='edit.php?id=$data[id]'>
                            <svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                              <path
                                d='M10.733 2.56C11.0921 2.20103 11.5791 1.99942 12.0869 1.99951C12.5946 1.99961 13.0815 2.2014 13.4405 2.5605C13.7995 2.91961 14.0011 3.4066 14.001 3.91436C14.0009 4.42211 13.7991 4.90903 13.44 5.268L12.707 6.002L9.99901 3.294L10.733 2.561V2.56ZM9.29301 4.001L3.33701 9.955C3.15623 10.1359 3.01997 10.3564 2.93901 10.599L2.02501 13.342C1.99556 13.4301 1.99122 13.5246 2.01248 13.615C2.03374 13.7054 2.07976 13.7881 2.14537 13.8538C2.21099 13.9196 2.29361 13.9657 2.38398 13.9871C2.47435 14.0085 2.56889 14.0043 2.65701 13.975L5.40001 13.06C5.64301 12.98 5.86301 12.843 6.04401 12.662L12 6.709L9.29201 4L9.29301 4.001Z'
                                fill='#0066FF'
                              />
                            </svg>
                          </a>
                          <a class='delete' type='submit' data-bs-toggle='modal' data-bs-target='#deleteModal$data[id]'>
                            <svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                              <path
                                d='M4.00001 12.6667C4.00001 13.4 4.60001 14 5.33334 14H10.6667C11.4 14 12 13.4 12 12.6667V6C12 5.26667 11.4 4.66667 10.6667 4.66667H5.33334C4.60001 4.66667 4.00001 5.26667 4.00001 6V12.6667ZM12 2.66667H10.3333L9.86001 2.19333C9.74001 2.07333 9.56668 2 9.39334 2H6.60668C6.43334 2 6.26001 2.07333 6.14001 2.19333L5.66668 2.66667H4.00001C3.63334 2.66667 3.33334 2.96667 3.33334 3.33333C3.33334 3.7 3.63334 4 4.00001 4H12C12.3667 4 12.6667 3.7 12.6667 3.33333C12.6667 2.96667 12.3667 2.66667 12 2.66667Z'
                                fill='#FF0000'
                              />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class='list-desc'>$data[description]</div>
                    </div>";
                    echo "<div class='modal fade' id='deleteModal$data[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h1 class='modal-title fs-5' id='exampleModalLabel' style='color: red;'>Attention!</h1>
                                </div>
                                <div class='modal-body'>
                                  Are you sure to delete new list?
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal' style='color: white; border: none;'>Close</button>
                                  <a  href='delete.php?id=$data[id]' class='btn btn-primary' style='color: white; background-color: red; border: none;'>Delete selected</a>             
                                </div>
                              </div>
                            </div>
                          </div>";
            }
          ?>
        </div>
        <div class="col-md-4">
          <div class="group-header">
            <h6>Complete</h6>
            <a href="add.php">
              <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_2_22" style="mask-type: luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="28" height="28">
                  <path d="M26 4H6C4.89543 4 4 4.89543 4 6V26C4 27.1046 4.89543 28 6 28H26C27.1046 28 28 27.1046 28 26V6C28 4.89543 27.1046 4 26 4Z" fill="white" stroke="white" stroke-width="4" stroke-linejoin="round" />
                  <path d="M16 10.6667V21.3333M10.6667 16H21.3333" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                </mask>
                <g mask="url(#mask0_2_22)">
                  <path d="M0 0H32V32H0V0Z" fill="white" />
                </g>
              </svg>
            </a>
          </div>

          <!-- Listnye disini -->
          <?php
            include_once('config.php');

            $dapatkan = mysqli_query($conn, "SELECT * FROM `lists_table` WHERE status='Complete' and userid='$id[0]'");

            while($data = mysqli_fetch_array($dapatkan)) {
              echo "<div class='complete'>
                      <div class='d-flex justify-content-between mb-2'>
                        <h6> $data[title] </h6>
                        <div class='cta-icon d-flex gap-3'>
                          <a class='edit' href='edit.php?id=$data[id]'>
                            <svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                              <path
                                d='M10.733 2.56C11.0921 2.20103 11.5791 1.99942 12.0869 1.99951C12.5946 1.99961 13.0815 2.2014 13.4405 2.5605C13.7995 2.91961 14.0011 3.4066 14.001 3.91436C14.0009 4.42211 13.7991 4.90903 13.44 5.268L12.707 6.002L9.99901 3.294L10.733 2.561V2.56ZM9.29301 4.001L3.33701 9.955C3.15623 10.1359 3.01997 10.3564 2.93901 10.599L2.02501 13.342C1.99556 13.4301 1.99122 13.5246 2.01248 13.615C2.03374 13.7054 2.07976 13.7881 2.14537 13.8538C2.21099 13.9196 2.29361 13.9657 2.38398 13.9871C2.47435 14.0085 2.56889 14.0043 2.65701 13.975L5.40001 13.06C5.64301 12.98 5.86301 12.843 6.04401 12.662L12 6.709L9.29201 4L9.29301 4.001Z'
                                fill='#0066FF'
                              />
                            </svg>
                          </a>
                          <a class='delete' type='button' data-bs-toggle='modal' data-bs-target='#deleteModal$data[id]' href=''>
                            <svg width='16' height='16' viewBox='0 0 16 16' fill='none' xmlns='http://www.w3.org/2000/svg'>
                              <path
                                d='M4.00001 12.6667C4.00001 13.4 4.60001 14 5.33334 14H10.6667C11.4 14 12 13.4 12 12.6667V6C12 5.26667 11.4 4.66667 10.6667 4.66667H5.33334C4.60001 4.66667 4.00001 5.26667 4.00001 6V12.6667ZM12 2.66667H10.3333L9.86001 2.19333C9.74001 2.07333 9.56668 2 9.39334 2H6.60668C6.43334 2 6.26001 2.07333 6.14001 2.19333L5.66668 2.66667H4.00001C3.63334 2.66667 3.33334 2.96667 3.33334 3.33333C3.33334 3.7 3.63334 4 4.00001 4H12C12.3667 4 12.6667 3.7 12.6667 3.33333C12.6667 2.96667 12.3667 2.66667 12 2.66667Z'
                                fill='#FF0000'
                              />
                            </svg>
                          </a>
                        </div>
                      </div>
                      <div class='list-desc'>$data[description]</div>
                    </div>";
                    echo "<div class='modal fade' id='deleteModal$data[id]' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h1 class='modal-title fs-5' id='exampleModalLabel' style='color: red;'>Attention!</h1>
                                </div>
                                <div class='modal-body'>
                                  Are you sure to delete new list?
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal' style='color: white; border: none;'>Close</button>
                                  <a  href='delete.php?id=$data[id]' class='btn btn-primary' style='color: white; background-color: red; border: none;'>Delete selected</a>             
                                </div>
                              </div>
                            </div>
                          </div>";
            }
          ?>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
