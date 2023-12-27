<?php
    session_start();

    include "./asset/config/db.php";

    $email_input = "";
    $emailErr = "";
    $message = "";
    $res = "";
    
    if(isset($_SESSION['reg'])){
        $email_input = $_POST['email'];
    }

    ///////////////////// destroy session and stops if user does not loggin /////////////////////
    if(($_SESSION['email'])){
    }else{
        header("location: register.php");
    }
?>


<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./asset/css/all.min.css">
      <link rel="stylesheet" href="./asset/css/fontawesome.min.css">
      <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
      <link rel="stylesheet" href="./asset/css/style.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
      <title> SchoolWebApp | Verification code </title>
    </head>

    <body style="font-family: Helvetica;">
        <?php
            $currentUser = $_SESSION['email'];
            $sql = "SELECT * FROM student_reg WHERE email ='$currentUser'";
            $gotResults = mysqli_query($conn,$sql);
            if($gotResults){
                if(mysqli_num_rows($gotResults)>0){
                    while($row = mysqli_fetch_array($gotResults)){
        ?>
        <div class="container mx-auto">
            <h1 class="text-center text-primary"> SchoolWebApp</h1>
            <p class="text-dark text-center"> Head office address: No. 2 james agbaja street, Ugbomro, Effurun, Delta state, Nigeria. <br>
                Telephone: 08154021780, 09032322014, 08026416710. 
                <br> Website: www.SchoolWebApp.com 
                <br> Email address: SchoolWebApp
            </p>
            <div class="row mx-auto">
                <div class="col-lg-10 mx-auto mb-2">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4 mx-auto">
                            <img src="./student/image/<?php echo $row['img']; ?>" alt="student-pics" class="img-fluid" style="width: 150px; height: 150px;">                  
                        </div>

                        <div class="col-lg-4 col-sm-4 mx-auto">
                            <p class="mt-3"> Generated on:
                                <sup style="font-weight: bold;" > <?php echo $row['date']; ?> </sup>
                            </p>
                        </div>

                        <div class="col-lg-4 col-sm-4 mx-auto">
                            <p class="mt-3"> Student OTP Code (SOC):
                                <strong> <?php echo $row['code']; ?> </strong>
                            </p>
                        </div>

                    </div>
                </div> <hr style="border: 2px solid black;">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 mx-auto">
                    <div class="row mx-auto">
                        <div class="col-lg-3 col-sm-4 mx-auto mt-2 mb-2">
                            Name: <?php echo $row['full_name']; ?>
                        </div>

                        <div class="col-lg-3 col-sm-4 mx-auto mt-2 mb-2">
                            Email: <?php echo $row['email']; ?>
                        </div>

                        <div class="col-lg-3 col-sm-4 mx-auto mt-2 mb-2">
                            Phone Number: <?php echo $row['phone']; ?>
                        </div>
                    </div>

                    <div class="row mx-auto">
                        <div class="col-lg-3 col-sm-4 mx-auto mt-2 mb-2">
                            Class: <?php echo $row['class']; ?>
                        </div>

                        <div class="col-lg-3 col-sm-4 mx-auto mt-2 mb-2">
                            Gender: <?php echo $row['sex']; ?>
                        </div>

                        <div class="col-lg-3 col-sm-4 mx-auto mt-2 mb-2">
                            Date of Birth: <?php echo $row['dob']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
        <?php
            }
            }
            }
        ?>

        <script src="./asset/js/jquery-3.5.1.min.js"></script>
        <script src="./asset/js/script.js"></script>

    </body>
</html>