<?php
    session_start();
    include "../asset/config/db.php";

    $email_input = $password_input = "";
    $emailErr = $passwordErr = "";
    
    $message = "";
    $res = "";

    if(isset($_POST['btn'])){
        $email_input = $_POST['email'];
        $code_input = rand(999999, 111111); // Generate random 6 character code.
        
        /////////////// to prevent mysqli injection ///////////////////
        $email_input = stripcslashes($email_input);
        $email_input = mysqli_real_escape_string($conn, $email_input);

        if(empty($email_input)){
            $emailErr = "<h6 class='text-danger'> <i class='fa fa-exclamation-circle'> </i> Please enter your email </h6>";
        }

        if(empty($emailErr)){
            $sql = "SELECT * FROM student_reg WHERE email='$email_input'";
            $mysqli_res = mysqli_query($conn, $sql);            
            if(mysqli_num_rows($mysqli_res)){
                $sql = "UPDATE student_reg SET code = '$code_input'
                WHERE email = '$email_input'";
                $mysqli_res = mysqli_query($conn, $sql);
                ///////////////// echo username /////////////////////////
                $_SESSION['email'] = $email_input;
                header('location:../student/change_password.php');                    
            }else{
                $message = "<div style='font-size: 20px; border-radius: 20px;' class='mb-2 py-2 bg-danger text-center text-white'>" ."This account does not exist!</div>";
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
      <title> SchoolWebApp | Student Forget Password Portal </title>
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
                    <li><a class="dropdown-item active" aria-current="page" href="../student/studentlogin.php">Student Login Portal</a></li>
                    <li><a class="dropdown-item" href="../student/check_result.php">Check result</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../admin/admin.php"> Staff </a></li>
                    </ul>
                    <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contact us</a>
                    </li>

                </li>
                </ul>
            </div>
            </div>
        </nav>

        <div class="container mt-4 mb-4">
            <div class="row">
                <div class="card body alert bg-light mx-auto col-lg-5 col-sm-8" style="border: 1px solid lightgrey;">
                    <h4 class="text-center"> Student Forget Password Portal </h4>
                    <p> Let's locate your account </p> <hr>
                    <form action="" class="mt-5" method="POST">
                        <span><?php echo $message; ?></span>
                        <span><?php echo $emailErr; ?>
                        <input type="email" placeholder="Enter your email address" class="form-control" name="email">

                        <input type="submit" value="Continue" class="mt-4 w-100 btn btn-primary" name="btn">
                    </form>
                </div>
            </div>
        </div>
                        
        <!------------------------------------ address------------------------>
        <div class="container-fluid" style="background-image: url(../img/eko.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="row">
            <div class="col-lg-3 col-sm-8 mt-3" style="text-align: left">
                <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> About SchoolWebApp </h5>
                <p style="color: yellow; text-align: left; font-weight: bolder"> We are daily driven to deliver top quality education to bring out superb performance and to keep our promise to our dear Parents that with us their kids/wards will exceed expectations. </p>
            </div>

            <div class="col-lg-3 col-sm-4 mt-3" style="text-align: left">
                <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> Contact Us</h5>
                <p style="color: yellow; text-align: left; font-weight: bolder"> For Complaints and enquiries you can reach us on any of the numbers below at: </p>                            
                <p style="color: yellow; text-align: left; font-weight: bolder"> <i class="fa fa-phone"></i>  Call us on 0802 641 6710 <br>
                Mon-Fri, 8:00 am - 5:00 pm</p>
            </div>

            <div class="col-lg-3 col-sm-6 mt-3" style="text-align: left">
                <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> You can visit us at our head office at: </h4>
                <p style="color: yellow; text-align: left; font-weight: bolder"> <i class="fa fa-map-marker"></i> 2 James Agbaja Street, Ugbomro, Effurun, Warri, Delta state </p>                            
                <p style="color: yellow; text-align: left; font-weight: bolder">  <i class="fa fa-envelope"></i> SchoolWebApp@gmail.com
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

        <script src="../asset/js/jquery-3.5.1.min.js"></script>
        <script src="../asset/js/script.js"></script>

    </body>
</html>