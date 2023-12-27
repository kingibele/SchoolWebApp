<?php
  session_start();

  include "../asset/config/db.php";

  $email_input = "";
  $emailErr = "";
  $message = "";
  $res = "";

  if(isset($_SESSION['btn'])){
    $email_input = $_POST['email'];
  }
  ///////////////////// destroy session and stops if user does not loggin /////////////////////
  if(($_SESSION['email'])){
  }else{
    header("location: ../student/studentlogin.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
    <?php
      $currentUser = $_SESSION['email'];
      $sql = "SELECT * FROM student_reg WHERE email ='$currentUser'";
      $gotResults = mysqli_query($conn,$sql);
      if($gotResults){
        if(mysqli_num_rows($gotResults)>0){
          while($row = mysqli_fetch_array($gotResults)){
      ?>
    <title> <?php echo "WELCOME | " . $row['full_name']; ?> | Student Login Portal </title>
  </head>

  <body style="font-family: Helvetica;">

    <!--Main Navigation-->
    <header>
      <!-- Sidebar -->
      <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" >
        <div class="position-sticky">
          <div class="list-group list-group-flush mx-3 mt-4">
            <a href="../student/student.php" class="list-group-item list-group-item-action py-2 ripple active" aria-current="true">
              <img src="../student/image/<?php echo $row['img']; ?>" alt="profile pics" style="width: 30px; height: 30px; border-radius: 50%"> <?php echo $row['full_name']; ?>
              <?php
                }
                }
                }
              ?>
            </a>

            <a href="../student/update.php" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-user-edit fa-fw me-3"></i><span>Update Profile</span>
            </a>

            <a href="../student/update_password.php" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-lock fa-fw me-3"></i><span>Password</span>
            </a>

            <a href="https://paystack.com/pay/kqti7wbc3h" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-money-bill fa-fw me-3"></i><span>School fees</span>
            </a>

            <a href="../student/online_class.html" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-video fa-fw me-3"></i><span> Online Class</span>
            </a>

            <a href="../student/addmission_letter.php" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-receipt fa-fw me-3"></i><span>Admission letter</span>
            </a>

            <a href="../student/check_result.php" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-book fa-fw me-3"></i><span>Check result</span>
            </a>

            <a href="../student/change_faculty.php" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-door-open fa-fw me-3"></i><span>Change faculty</span>
            </a>

            <a href="../student/logout.php" class="list-group-item list-group-item-action py-2 ripple">
              <i class="fas fa-power-off fa-fw me-3"></i ><span>Logout</span>
            </a>

          </div>
        </div>
      </nav>
      <!-- Sidebar -->

      <!-- Navbar -->
      <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
          <!-- Toggle button -->
          <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>

          <h4> Student Login Portal </h4>

          <!-- Right links -->
          <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Notification dropdown -->
            <li class="nav-item dropdown">

              <!-- Avatar -->
              <li class="nav-item dropdown">
                <a>
                  <?php
                    $currentUser = $_SESSION['email'];
                    $sql = "SELECT * FROM student_reg WHERE email ='$currentUser'";
                    $gotResults = mysqli_query($conn,$sql);
                    if($gotResults){
                      if(mysqli_num_rows($gotResults)>0){
                        while($row = mysqli_fetch_array($gotResults)){
                  ?>              
                  <img src="../student/image/<?php echo $row['img']; ?>" alt="profile pics" style="width: 30px; height: 30px; border-radius: 50%">
                </a>    
          
                <?php
                  }
                  }
                  }
                ?>
              </li>
              
            </li>
          </ul>
        </div>
        <!-- Container wrapper -->
      </nav>
      <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px">
      <div class="container pt-4">

        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-sm-12 mx-auto" style="padding-top: 10px; padding-bottom: 10px; padding-left: 10px; padding-right: 10px;">
              <div class="col-lg-10 mt-3 card body alert bg-light">

                <?php
                  $currentUser = $_SESSION['email'];
                  $sql = "SELECT * FROM student_reg WHERE email ='$currentUser'";
                  $gotResults = mysqli_query($conn,$sql);
                  if($gotResults){
                    if(mysqli_num_rows($gotResults)>0){
                      while($row = mysqli_fetch_array($gotResults)){
                ?>

                <div class="row mb-3">
                  <div class="col-lg-10 col-sm-10">
                    <img src="../student/image/<?php echo $row['img']; ?>" alt="profile pics" style="width: 150px; height: 150px; border-radius: 50%"> 
                    <h3> <?php echo $row['full_name']; ?> </h3>  
                    <p class="mt-3">
                      <?php echo $row['email']; ?> <br>
                      <?php echo $row['phone']; ?> <br>
                      <?php echo $row['dob']; ?> <br>
                      <?php echo $row['sex']; ?> <br>
                      <?php echo $row['religon']; ?> <br>
                      <?php echo $row['state']; ?> <br>
                      <?php echo $row['lga']; ?> <br>
                      <?php echo $row['faculty']; ?>
                    </p>                                    
                    <?php
                      }
                      }
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </main>
    <!--Main layout-->

    <style>
        body {
      background-color: #fbfbfb;
    }
    @media (min-width: 991.98px) {
      main {
        padding-left: 240px;
      }
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 58px 0 0; /* Height of navbar */
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      width: 240px;
      z-index: 600;
    }

    @media (max-width: 991.98px) {
      .sidebar {
        width: 100%;
      }
    }
    .sidebar .active {
      border-radius: 5px;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: 0.5rem;
      overflow-x: hidden;
      overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }
    </style>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>