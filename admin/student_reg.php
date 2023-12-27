<?php
  session_start();
  include "../asset/config/db.php";

  $admin_id = "";
  $admin_idErr = "";
  
  $message = "";
  $res = "";
  
  if(isset($_SESSION['btn'])){
    $admin_id_input = $_POST['admin_id'];
  }
  ///////////////////// destroy session and stops if user does not loggin /////////////////////
  if(($_SESSION['admin_id'])){
  }
  else{
    header("location: ../admin/admin.php");
  }
 
  /////////////////ERROR VARIABLES///////////////
  $fullnameErr = $emailErr = $phoneErr = $classErr = $dobErr = $sexErr = $religonErr = $stateErr = $lgaErr = $facultyErr = $imageErr = $passwordErr = "";
  
  //////FORM VARIABLES///////////////////////////////////
  $fullname = $email = $phone = $class = $dob = $sex = $religon = $state = $lga = $faculty = $image = $password = "";

  ///////////////Load data to table below
  $fetchsql = "SELECT * FROM student_reg";
  $fetchRes = mysqli_query($conn, $fetchsql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />
  <title>  <?php echo "WELCOME | " . $_SESSION['admin_id']; ?> | Admin Portal </title>
  </head>

  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white" >
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="../admin/admin_profile.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3"></i ><span>My dashboard</span>
          </a>

          <a href="../admin/student_reg.php" class="list-group-item list-group-item-action py-2 ripple active">
            <i class="fas fa-user-graduate fa-fw me-3"></i><span> Students</span>
          </a>

          <a href="../admin/staff-registration.php" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-user-tie fa-fw me-3"></i><span>Staff</span>
          </a>

          <a href="https://dashboard.paystack.com/#/balance?use_cursor=true" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-money-bill fa-fw me-3"></i><span>Payments</span>
          </a>

          <a href="../admin/upload_result.php" class="list-group-item list-group-item-action py-2 ripple">
            <i class="fas fa-book fa-fw me-3"></i><span> Results</span>
          </a>

          <a href="../admin/admin_logout.php" class="list-group-item list-group-item-action py-2 ripple">
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

        <h4> Admin Login Portal </h4>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">

            <!-- Avatar -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-user-circle" style="font-size: 28px;"></i>
              </a>              

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

      <!------------------ List of Students -------------------->
      <?php
        /////////////Load data to table below
        $fetchsql = "SELECT * FROM student_reg";
        $fetchRes = mysqli_query($conn, $fetchsql);

                            
        $active = "";
                                                        
        if(isset($_POST['save']) && isset($_GET['update'])){  
          $active_input = mysqli_real_escape_string($conn, $_POST['active']);
                    
          if(empty($active_input)){
            $activeErr = "<h6 style='float: left' class='text-danger'> <i class='fa fa-exclamation-circle'> </i> Select status </h6>";
          }else{
            $active = $active_input;
          }
           
          if(empty($activeErr)){
            $sql = "UPDATE student_reg SET active='$active_input' WHERE id='$_GET[update]'";
            $res = mysqli_query($conn, $sql);
            if(!$res){
              $message = "<span class='text-danger'>Changes could not be Updated</span>";
            }else{
              $message =
              "<script type='text/javascript'>
                alert('Changes made successfully')
                window.location = '../admin/student_reg.php';
              </script>";                        
            }
          }
        }
      ?>

      <div class="container">
        <div class="row">
          <div class="card body col-lg-10 col-sm-10" style="overflow-x:auto;">
            <h4 class="mt-3"> <i class="fa fa-user-graduate text-left"></i>  List of students that signup for a class </h4>
            <table class="table table-border table-striped display" id="example">
              <thead>
                <tr>
                  <th>Full name</th>
                  <th>Email address</th>
                  <th>Phone number</th>
                  <th>Class</th>
                  <th>D.O.B</th>
                  <th>Sex</th>
                  <th>Religon</th>
                  <th>State</th>
                  <th>Lga</th>
                  <th>Faculty</th>
                  <th>Image</th>
                  <th>Date created</th>
                  <th> Active </th>                                   
                  <th>Code </th> 
                </tr>   
              </thead>

              <tbody>
                <?php while($fetchRow = mysqli_fetch_assoc($fetchRes)){?>
                <tr>
                  <td><?php echo $fetchRow['full_name'];  ?></td>
                  <td><?php echo $fetchRow['email']; ?></td>
                  <td><?php echo $fetchRow['phone'];  ?></td>
                  <td><?php echo $fetchRow['class'];  ?></td>
                  <td><?php echo $fetchRow['dob'];  ?></td>
                  <td><?php echo $fetchRow['sex'];  ?></td>
                  <td><?php echo $fetchRow['religon'];  ?></td>
                  <td><?php echo $fetchRow['state'];  ?></td>
                  <td><?php echo $fetchRow['lga'];  ?></td>
                  <td><?php echo $fetchRow['faculty'];  ?></td>
                  <td> <img src="<?php echo "../student/image/".$fetchRow['img']; ?>" class="img-fluid mx-auto" alt="student image" width="70px;"> </td>
                  <td><?php echo $fetchRow['date'];  ?></td>                                                                    
                  <td><?php echo $fetchRow['active'];  ?></td>                                                                    
                  <td><?php echo $fetchRow['code'];  ?></td>  
                  <td>
                    <a class="btn btn-warning btn-sm" href="../admin/student_reg.php?update=<?php echo $fetchRow['id']; ?>">
                      <i class="text-white fa fa-pen fa-sm"></i>
                    </a>
                  </td>    
                </tr>

                <?php } ?>
              </tbody>
            </table>
                                                                                
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
            <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
                                    
            <!------------------ Data tables search, paggination, sort jquery function -------------------->
            <script>
              $(function(){
                $("#example").dataTable();
              })
            </script>

          </div> 

          
          <div class="col-lg-2 col-sm-2" style="padding-top: 20px; padding-bottom: 30px">
            <span class="status"><?php echo $message; ?></span>
            <h4 class="text-dark text-center"> Status </h4>
            <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
              <select class="form-control bg-light" style="font-size: 18px; border: 1px solid black;" name="active" id="active">
                <option value="" selected>Set status </option>
                <option value="deactivated">Deactivate</option>
                <option value="1">Activate</option>
              </select>
                            
              <?php if(isset($_GET['update'])){ ?>
              <input class="btn btn-warning btn-block text-white mt-3 w-100" style="float:right;" type="submit" name="save" value="Change">
              <?php }else{?>
              <input class="btn btn-primary btn-block mt-3 w-100" style="float:right;" type="submit" name="register" value="Submit">
              <?php } ?>
            </form>

            <script>
              document.getElementById('active').value = "<?php echo $_POST['active'];?>";
            </script>
            
          </div>
        </div>
      </div>

      
    </div>
  </main>
  <!--Main layout-->

  <body>

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

    
  </body>
</html>
