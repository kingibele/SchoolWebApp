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
      <title> SchoolWebApp | Registration for a class </title>
    </head>

    <body style="font-family: Helvetica;">
      <!-- Navigation --> 
      <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <p> <img class="img-fluid" src="./img/school.jpg" style="height: 40px; width: 50px; border-radius: 50%" alt="SchoolWebApp logo"> SchoolWebApp </p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="gallery.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user-circle"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="./student/studentlogin.php">Student Login Portal</a></li>
                  <li><a class="dropdown-item" href="./student/check_result.php">Check result</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="./admin/admin.php"> Staff </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <style>
        body, html {
          height: 100%;
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
        }

        .hero-image {
          background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("./img/istockphoto-108222850-170667a.jpg");
          height: 70%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          position: relative;
        }

        .hero-text {
          text-align: center;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: white;
        }
      </style>

      <div class="hero-image">
        <div class="hero-text">
          <h5 style="font-size:50px"> Our Gallery </h5>
          <p> Providing information about our school.</p>
        </div>
      </div>

    <!---------------------------------- gallery ----------------------------->
    <div class="container mt-5 mb-5" style="margin-bottom: 20px;">
      <div class="row">
        <h4 style="color: blue; text-align: center;"> A Deep dive into our school gallery that might change your veiw about us </h4>
        <div class="col-lg-3 col-sm-6 mb-5">
          <div class="card body bg-light">
            <img src="./img/istockphoto-1323715308-170667a.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our kids planying ground </h6>
          </div>
        </div>
          
        <div class="col-lg-3 col-sm-6 mb-5">
          <div class="card body bg-light">
            <img src="./img/istockphoto-478500151-612x612.jpg  " class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our football feild </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5">
          <div class="card body bg-light">
            <img src="./img/istockphoto-1323715308-170667a.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our well equiped computer laboratory </h6>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/nigerian-children-1024x680.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> 2020/2021 Children day </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/hiace.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our School Bus </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/photo-1523580846011-d3a5bc25702b.jfif" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our 2020/2021 Graduation day </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/istockphoto-1323715308-170667a.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our Certified staff </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/istockphoto-1323715308-170667a.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Johnathan smith got 8A's and 1B in the Senior Secondary School Examination (SSSE) </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/gettyimages-467493647-612x612.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our state of the art science laboratory science </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/sc.png" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Took 3rd at the Delta state marathon race </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/School-kk-Copy.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our state of the art science laboratory science </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/gettyimages-170330977-612x612.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our state of the art science laboratory science </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/teacher-copy-1062x594.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Learners and Teachers working out solution together </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/photo-1524995997946-a1c2e315a42f.jpeg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our state of the art Library that holds they secrete to knowledge </h6>
          </div>
        </div>
            
        <div class="col-lg-3 col-sm-6 mb-5" style="padding-bottom: 10px;">
          <div class="card body bg-light">
            <img src="./img/tick-symptom-checklist-checking.jpg" class="mx-auto img-fluid" style="width: 100%;">
            <h6 style="font-size: 20px; color: blue"> Our state of the art science laboratory science </h6>
          </div>
        </div>
      </div>
    </div>

    <!------------------------------------ address------------------------>
    <div class="container-fluid" style="background-image: url(./img/eko.jpg); background-repeat: no-repeat; background-size: cover;">
      <div class="row">
        <div class="col-lg-3 col-sm-8 mt-3" style="text-align: left">
          <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> About SchoolWebApp </h4>
          <p style="color: yellow; text-align: left; font-weight: bolder"> We are daily driven to deliver top quality education to bring out superb performance and to keep our promise to our dear Parents that with us their kids/wards will exceed expectations. <br> </p>
        </div>

        <div class="col-lg-3 col-sm-4 mt-3" style="text-align: left">
          <h5 id="contact" style="color: white; padding-top: 20px" class="mt-5"> Contact Us</h4>
          <p style="color: yellow; text-align: left; font-weight: bolder"> For Complaints and enquiries you can reach us on any of the numbers below at: <br> </p>                     
          <p style="color: yellow; text-align: left; font-weight: bolder"> <i class="fa fa-phone"></i>  Call us on 0802 641 6710 <br>
            Mon-Fri, 8:00 am - 5:00 pm
          </p>
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