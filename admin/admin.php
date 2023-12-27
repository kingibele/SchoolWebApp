<?php
    session_start();

    include "../asset/config/db.php";

    $admin_id = "";
    $admin_idErr = "";
    
    $message = "";
    $res = "";

    if(isset($_POST['btn'])){
        $admin_id_input = $_POST['admin_id'];

        /////////////// to prevent mysqli injection ///////////////////
        $admin_id_input = stripcslashes($admin_id_input);
        $admin_id_input = mysqli_real_escape_string($conn, $admin_id_input);

        if(empty($admin_id_input)){
            $admin_idErr = "<h6 class='text-danger'> <i class='fa fa-exclamation-circle'> </i> Please enter your Staff ID </h6>";
        }       

        if(empty($admin_idErr)){
            $sql = "SELECT * FROM admin WHERE admin_id='$admin_id_input' AND active='1'";
            $mysqli_res = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($mysqli_res)){
                ///////////////// echo username /////////////////////////
                $_SESSION['admin_id'] = $admin_id_input;
                header('location: ../admin/admin_profile.php?schoolwebapk+admin-login-portal=true');
            }else{
                $message = "<div class='bg-danger text-white alert'> <i class='fa fa-exclamation-circle'> </i> Invalid Details </div>";
            }
        }
    }
?>


<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../asset/css/all.min.css">
      <link rel="stylesheet" href="../asset/css/fontawesome.min.css">
      <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
      <link rel="stylesheet" href="../asset/css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
      <title> SchoolWebApp | Staff Login Portal </title>
    </head>

    <body style="font-family: Helvetica;">
        <!-- Navigation --> 
        <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
            <div class="container">
            <a class="navbar-brand" href="../index.php">
                <p> <img class="img-fluid" src="../img/school.jpg" style="height: 40px; width: 50px; border-radius: 50%" alt="SchoolWebApp logo"> SchoolWebApp </p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../register.php">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../about.php">About us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../student/studentlogin.php">Student Login Portal</a></li>
                    <li><a class="dropdown-item" href="../student/check_result.php">Check result</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item active" aria-current="page" href="../admin/admin.php"> Staff </a></li>
                    </ul>
                    <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact us</a>
                    </li>

                </li>
                </ul>
            </div>
            </div>
        </nav>
        
        <div class="container mt-2">
            <div class="row">
                <div class="mt-2 alert bg-light mx-auto col-lg-4 col-sm-8" style="border: 1px solid lightgrey;">
                    <h2 class="text-center"> Staff Login Portal </h2> <hr>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" >
                        <span><?php echo $message; ?></span>
                        <span><?php echo $admin_idErr; ?>
                        <label for="admin_id"> Staff ID </label>
                        <input type="text" class="mb-3 form-control" name="admin_id" placeholder="Enter your Staff ID">                       

                        <input type="submit" value="Login" class="w-100 btn btn-primary" style="float:left" name="btn">                                
                    </form>
                </div>
            </div>
        </div>
          
        <!------------------------------------ address------------------------>
        <div class="container-fluid" style="background-image: url(../img/eko.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="row">
            <div class="col-lg-3 col-sm-8 mt-3" style="text-align: left">
                <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> About SchoolWebApp </h4>
                <p style="color: yellow; text-align: left; font-weight: bolder"> We are daily driven to deliver top quality education to bring out superb performance and to keep our promise to our dear Parents that with us their kids/wards will exceed expectations. <br> </p>
            </div>

            <div class="col-lg-3 col-sm-4 mt-3" style="text-align: left">
                <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> Contact Us</h4>
                <p style="color: yellow; text-align: left; font-weight: bolder"> For Complaints and enquiries you can reach us on any of the numbers below at: <br> </p>
                            
                <p style="color: yellow; text-align: left; font-weight: bolder"> <i class="fa fa-phone"></i>  Call us on 0802 641 6710 <br>
                Mon-Fri, 8:00 am - 5:00 pm</p>
            </div>

            <div class="col-lg-3 col-sm-6 mt-3" style="text-align: left">
                <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> You can visit us at our head office at: </h4>
                <p style="color: yellow; text-align: left; font-weight: bolder"> <i class="fa fa-map-marker"></i> 2 James Agbaja Street, Ugbomro, Effurun, Warri, Delta state <br> </p>
                            
                <p style="color: yellow; text-align: left; font-weight: bolder">  <i class="fa fa-envelope"></i> SchoolWebApp@gmail.com  <br>
            </div>

            
            <div class="col-lg-2 col-sm-6 mt-3" style="text-align: left">
                <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> CONNECT WITH US </h4>
                <p style="color: yellow; text-align: left; font-weight: bolder"> 
                <a style="padding: 10px 10px 10px 10px; color: yellow; text-decoration: none;" href="https://www.facebook.com/"> <i class="fab fa-facebook" style="font-size: 30px;"> </i> </a>
                <a style="padding: 10px 10px 10px 10px; color: yellow; text-decoration: none;" href="https://www.facebook.com/"> <i class="fab fa-instagram" style="font-size: 30px;"> </i> </a>
                <a style="padding: 10px 10px 10px 10px; color: yellow; text-decoration: none;" href="https://www.facebook.com/"> <i class="fab fa-twitter" style="font-size: 30px;"> </i> </a>
                </p>                     
            </div>
            </div>
        </div>

        <style>
            footer {
                color: white;
                padding: 15px;
            }
        </style>

        <footer class="container-fluid text-center bg-dark">
            © 2022 School. All rights reserved. Developed by <a style="text-decoration: none;" href="https://www.instagram.com/king_ibelle/">King_ibelle</a>
        </footer>

    </body>
</html>
