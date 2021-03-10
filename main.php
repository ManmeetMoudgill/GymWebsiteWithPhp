
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./NewCss/main.css">
    <title>Gym website</title>
  </head>
  <body>

  <!-- header -->
    <nav class=" backImage navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo">
            <img class="logoImage" src="./imagesWebsite/dumbbell.png" alt="Dumbel image" />
            <h4 class="headingLogoImage">FIT<span class="spanN">NESS</span></h4>
          </div>
      <!--   <a class="navbar-brand" href="#">Manmeet Website</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#classes">Classes</a>
            </li>
              <li class="nav-item">
                <a class="nav-link " href="#trainer">Trainer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#about">About</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Supplement Stacks
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Lean Muscle Mass</a>
                <a class="dropdown-item" href="#">Weight Loss</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Gain Weight</a>
              </div>
            </li>
          </ul>
           
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <div class="mx-2">
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button> 
            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#signupModal">Sign up</button>
            <a class="btn btn-sm btn-primary" href="./Login&Signup/logout.php" role="button">Log Out</a>
          </div>
        </div>
      </nav>

<?php
include './Login&Signup/login.php';
?>
     
      <!-- creating an login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login In</h5>
        <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- creating login form -->
        <form action ="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1"  class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1"  class="form-label">Password</label>
            <input type="password"  name="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        
      </div>
    </div>
  </div>
</div>

<?php

include './Login&Signup/signup.php';


?>

<!--  creating an signup modal-->

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Sign Up</h5>
        <button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        

   
     <!-- creating sign up form -->
     <form id="signupModalForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
      <div class="mb-3">
        <label for="exampleInputusername" class="form-label">Username</label>
        <input type="text"  name="username" required  class="form-control" id="exampleInputusername" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputnumber" class="form-label">Phone Number</label>
        <input type="text"  name="phoneNumber" required class="form-control" id="exampleInputnumber" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" required  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" required  class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
        <input type="password"  name="confirmPassword" required class="form-control" id="exampleInputPassword2" aria-describedby="emailHelp">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./NewImagesWebsite/bg1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h1 id="hiddenHeading">Welcome<span id="hiddenSpan" class="badge bg-secondary"><?php 
            if(!isset($_SESSION['username'])){
              ?>
              <script>
                document.getElementById('hiddenHeading').style.display="none";
                document.getElementById('hiddenSpan').style.display="none";
              </script> 
              <?php
            }else{
              ?>
              <script>
                document.getElementById('hiddenHeading').style.display="block";
                document.getElementById('hiddenSpan').style.display="hidden";
              </script> 
              <?php
              echo $_SESSION['username'];
            }
            
            ?>
          </span>To Manmeet's Website</h1>
              <p>Best Gym with High Equality Equipments</p>
              <button type="button" class="btn-sm btn btn-primary">Join Premium Membership</button>
              <button type="button" class="btn-sm btn btn-secondary">Join Annual Membership</button>
              <button type="button" class="btn-sm btn btn-success">Join Monthly Membership</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./NewImagesWebsite/bg2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 id="hiddenHeading1">Welcome<span id="hiddenSpan1" class="badge bg-secondary"><?php 
            if(!isset($_SESSION['username'])){
              ?>
              <script>
                document.getElementById('hiddenHeading1').style.display="none";
                document.getElementById('hiddenSpan1').style.display="none";
                </script> 
              <?php
            }else{
              ?>
              <script>
                document.getElementById('hiddenHeading1').style.display="block";
                document.getElementById('hiddenSpan1').style.display="hidden";
                </script> 
              <?php
              echo $_SESSION['username'];
            }
            
            ?>
          </span>To Manmeet's Website</h1>
          <p>Best Gym with High Equality Equipments</p>
          <div class="contaner">
                  <button class="btn-sm btn btn-primary">Join Premium Membership</button>
                  <button class="btn-sm btn btn-secondary">Join Annual Membership</button>
                  <button class="btn-sm btn btn-success">Join Monthly Membership</button>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./NewImagesWebsite/bg3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1 id="hiddenHeading2">Welcome<span id="hiddenSpan2" class="badge bg-secondary"><?php 
            if(!isset($_SESSION['username'])){
              ?>
              <script>
                document.getElementById('hiddenHeading2').style.display="none";
                document.getElementById('hiddenSpan2').style.display="none";
              </script> 
              <?php
            }else{
              ?>
              <script>
                document.getElementById('hiddenHeading2').style.display="block";
                document.getElementById('hiddenSpan2').style.display="hidden";
              </script> 
              <?php
              echo $_SESSION['username'];
            }
            
            ?>
          </span>To Manmeet's Website</h1>
          <p>Best Gym with High Equality Equipments</p>
                <div class="contaner-fluid">
                  <button class="btn-sm btn btn-primary">Join Premium Membership</button>
                  <button class="btn-sm btn btn-secondary">Join Annual Membership</button>
                  <button class="btn-sm btn btn-success">Join Monthly Membership</button>
                </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   <div class="container mt-5">
     <!-- first card -->
    <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-primary">PT Courses</strong>
              <h3 class="mb-0">Best PT Specialist</h3>
              <div class="mb-1 text-muted">Jan 12</div>
              <p class="card-text mb-auto">We have best person Specalists in our gym in order to give you best knowledge as possibile as they can .</p>
             <a href="#"  data-bs-toggle="modal" data-bs-target="#PTModal" class="stretched-link">Continue reading</a>
              
              </div>
            <div class="col-auto d-none d-lg-block">
             <img  class="bd-placeholder-img" width="200" height="250"  src="./NewImagesWebsite/thumbnail.jpg" alt="">
            </div>
          </div>
        </div>
<!-- second card -->
        <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">Nutrition Courses</strong>
                <h3 class="mb-0">Nutriton Specalists</h3>
                <div class="mb-1 text-muted">jan 10</div>
                <p class="mb-auto">We have best Nutrition Specalists in our gym in order to give you best knowledge as possibile as they can.</p>
                <a href="#"  data-bs-toggle="modal" data-bs-target="#NutritionModal" class="stretched-link">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
               <img  class="bd-placeholder-img" width="200" height="250"  src="./NewImagesWebsite/thumbnail1.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      

      <!-- third box card -->
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <strong class="d-inline-block mb-2 text-secondary">Equipments</strong>
              <h3 class="mb-0">Best Equipments</h3>
              <div class="mb-1 text-muted">Jan 13</div>
              <p class="card-text mb-auto">We have best and new technology equipments in our gym..</p>
              <a href="#"  data-bs-toggle="modal" data-bs-target="#EquipmentModal"  class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
             <img  class="bd-placeholder-img" width="200" height="250"  src="./NewImagesWebsite/thumbnail3.jpg" alt="">
            </div>
          </div>
        </div>

        <!-- fourth Div -->
      <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-danger">Services</strong>
                <h3 class="mb-0">customer Services</h3>
                <div class="mb-1 text-muted">Nov 11</div>
                <p class="mb-auto">We give weekly offers to our customers in order to provide them best quality services.</p>
                <a href="#"  data-bs-toggle="modal" data-bs-target="#CustomerModal" class="stretched-link">Continue reading</a>
              </div>
              <div class="col-auto d-none d-lg-block">
               <img  class="bd-placeholder-img" width="200" height="250"  src="./NewImagesWebsite/thumbnail2.jpg" alt="">
              </div>
            </div>
          </div>
    </div>

    <section id="classes">
    <!-- Classes schedules -->
    <div class="container">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-2 mx-auto text-center">
        <h1 class="display-4">Classes Schedule</h1>
        <p class="lead"> Classes Schedule table for our customers,Please have a look,this schedule table will change every month.</p>
      </div>
    
      <div class="row row-cols-1 row-cols-md-3 mb-1 text-center">
        <div class="col">
          <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 fw-normal">Body Combact</h4>
          </div>
          <div class="card-body">

            <ul class="list-unstyled mt-1 mb-1">
              <img class="img-fluid rounded w-25 h-25 mb-2" src="./imagesWebsite/doubmell.svg" alt="">
              <li>Heavy Weight Traning</li>
              <li>Intermediate & Advanced level</li>
              <li>With Proper Safety Equipments</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Enroll</button>
          </div>
        </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 fw-normal">Yoga Program</h4>
          </div>
          <div class="card-body">

            <ul class="list-unstyled mt-1 mb-1">
              <img class="img-fluid rounded w-25 h-25 mb-2" src="./imagesWebsite/fit-yoga.svg" alt="">
              <li>Yoga Sessions</li>
              <li>Beginners & Intermediates</li>
              <li>With Best yoga teachers</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-secondary">Get started</button>
          </div>
        </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 fw-normal">Cycling Program</h4>
          </div>
          <div class="card-body">

            <ul class="list-unstyled mt-1 mb-1">
              <img class="img-fluid rounded w-25 h-25 mb-2" src="./imagesWebsite/fit-cycling.svg" alt="">
              <li>Cycling Sessions</li>
              <li>Intermediate & Advanced Level</li>
              <li>Afternoon Sessions</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-danger">Get Started</button>
          </div>
        </div>
        </div>
      </div>


      <!-- Second row schedule claess -->
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 fw-normal">Boxing Finess</h4>
          </div>
          <div class="card-body">

            <ul class="list-unstyled mt-1 mb-1">
              <img class="img-fluid rounded w-25 h-25 mb-2" src="./imagesWebsite/fit-boxing.svg" alt="">
              <li>Boxing Class and Matches</li>
              <li>Intermediate & Advanced level</li>
              <li>With Proper Safety Equipments</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-light">Enroll</button>
          </div>
        </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 fw-normal">Swimming Program</h4>
          </div>
          <div class="card-body">

            <ul class="list-unstyled mt-1 mb-1">
              <img class="img-fluid rounded w-25 h-25 mb-2" src="./imagesWebsite/fit-swimming.svg" alt="">
              <li>Swimming Classes</li>
              <li>Only for Advanced</li>
              <li>With Best Swimming Coaches</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-dark">Get started</button>
          </div>
        </div>
        </div>
        <div class="col">
          <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 fw-normal">Massage Program</h4>
          </div>
          <div class="card-body">

            <ul class="list-unstyled mt-1 mb-1">
              <img class="img-fluid rounded w-25 h-25 mb-2" src="./imagesWebsite/fit-massage.svg" alt="">
              <li>Massage Sessions</li>
              <li>Experience Best Massages</li>
              <li>Afternoon Sessions</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-light">Get Started</button>
          </div>
        </div>
        </div>
      </div>
    
     </div>
    </section>


    <!-- trainer here -->
    <section id="trainer">
        <div class="container">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-2 mx-auto text-center">
        <h1 class="display-4">Our Trainers</h1>
        <p class="lead"> We have world's best & Experienced Trainer in our gym,they will give you provide you best quality services.</p>
      </div>

       <!-- first Trainer -->
      <div class="container">
        <div class=" d-flex justify-content-center align-items-center row featurette my-5">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Personal Trainer<span class="text-muted"> & Sports nutritionist
            </span></h2>
            <p class="lead">My name is Manmeet Moudgill,I am from Pardise ,Graduated in PT & ScienceBiolgy from Paradise India,street number 25,5000</p>
          </div>
          <div class="col-md-5 order-md-1">
            <img  class="  img-fluid bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./imagesWebsite/trainer1.jpg" alt="">

          </div>
        </div>

         <!-- second Trainer -->
        <div class=" d-flex justify-content-center align-items-center row featurette my-5">
          <div class="col-md-7 order-md-1">
            <h2 class="featurette-heading">Functional,Personal Trainer<span class="text-muted"> & Sports nutritionist
              <p class="lead">My name is Sakshi Moudgill,I am from Pardise ,Graduated in Sports & ScienceBiolgy from Paradise India,street number 25,5000</p>
          </div>
          <div class="col-md-5 order-md-2">
             
             <img  class="  img-fluid bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./imagesWebsite/trainer2.jpg" alt="">
          </div>
        </div>
        </div>



        <!-- third Trainer -->
        <div class=" d-flex justify-content-center align-items-center row featurette my-5">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Cross-Fit Trainer<span class="text-muted"> & nutritionist
              <p class="lead">My name is Navbharti Moudgill,I am from Pardise ,Graduated in Sports & ScienceBiolgy from Paradise India,street number 25,5000</p>
          </div>
          <div class="col-md-5 order-md-1">
             
             <img  class="  img-fluid bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./imagesWebsite/trainer3.jpg" alt="">
          </div>
        </div>

        <!-- fourth trainer -->
         <!-- third Trainer -->
         <div class=" d-flex justify-content-center align-items-center row featurette my-5">
          <div class="col-md-7 order-md-1">
            <h2 class="featurette-heading">Yoga Trainer<span class="text-muted"> & Sport's nutritionist
              <p class="lead">My name is Simrajneet Moudgill,I am from Pardise ,Graduated in Sports & ScienceBiolgy from Paradise India,street number 25,5000</p>
          </div>
          <div class="col-md-5 order-md-2">
             
             <img  class="  img-fluid bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="./imagesWebsite/trainer4.jpg" alt="">
          </div>
        </div>
    </section>
<hr>
    <!-- about section -->
    <section id="about">
      <div class="container ml-5">
        <div class="row">
          <div class=" d-flex justify-content-center align-items-center flex-column col-lg-4">
           <img  class="bd-placeholder-img rounded-circle" width="140" height="140" src="./imagesWebsite/trainer2.jpg" alt="">
    
            <h2>Manmeet Moudgill</h2>
            <p>My name is Manmeet Moudgil, I am Currently pursuing Computer Science from IT Latina.
              I am the BacEnd developer of this website,Have been working with Manmeet,it's been great 
              Experience,Hopefully i will continue to work with him.
            </p>
            
          </div><!-- /.col-lg-4 -->
          <div class=" d-flex justify-content-center align-items-center flex-column col-lg-4">
            <img  class="bd-placeholder-img rounded-circle" width="140" height="140" src="./imagesWebsite/boyBackground.jpg" alt="">
    
            <h2>Rajnet Singh</h2>
            <p>My name is Rajnet  Singh ,Currently I am in final year of IT,Latina.
              I am the Main developer of this website,This website is created with the help
              of my Amazing and hardworking Team.Contact me and my team for any queies.
            </p>
            
          </div><!-- /.col-lg-4 -->
          <div class=" d-flex justify-content-center align-items-center flex-column col-lg-4">
            <img  class="bd-placeholder-img rounded-circle" width="140" height="140" src="./imagesWebsite/trainer1.jpg" alt="">
            <h2>Simranjeet Singh</h2>
            <p>My name is Simranjeet Singh,Currently I am in Fourth year of IT,Latina.
              I am the Main developer of this website,This website is created with the help
              of my Amazing and hardworking Team.Contact me and my team for any queies.
            </p>
            
          </div><!-- /.col-lg-4 -->
        </div>
      </div>
     <hr>
    </section>
    <footer class="container my-4">
      <p class="float-right"><a href="#">Back to top</a></p>
      <p>© 2021-2022 Moudgill'sCompany, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>

    <!-- Personal trainer modal -->
<div class="modal fade" id="PTModal" tabindex="-1" aria-labelledby="PTModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PTModalLabel">PT COURSES</h5>
        <button type="button" class="btn-close btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      <p>The Training Room offers Personal Trainer Courses 
        which can see you fully qualified as Personal Trainer in
         as little as 5 weeks! Have a look at all the courses we
          offer below. We offer a range of Personal Training Courses,
           as well as additional Continuous Personal Development (CPD)
            Courses to enhance your learning and development.
          By taking a Personal Training Course with The Training Room, 
          you can change your career in just 5 weeks time. 
          After graduating from the course you’ll be eligible
           to sign up with CIMPSA as a Level 3 Personal Trainer, 
           the highest entry-level in the industry. Starting every
            two weeks (with weekday, weekend or online learning options), 
            the intensive programmes require full commitment from you which
             in return will make you full accredited and able to start your
              exciting new career in less than 2 months!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <!-- Nutrionist Specalist modal -->
    <div class="modal fade" id="NutritionModal" tabindex="-1" aria-labelledby="NutritionModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="NutritionModalLabel">Nutrionist Specalist</h5>
            <button type="button" class="btn-close btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
          <div class="modal-body">
          <p>Engaging in physical activity is essential for health
             and wellness, but it is only half the battle. Good nutrition
              is paramount to a well-rounded fitness routine and is a key 
            factor in guiding your clients to healthier lives.
             Understanding nutrition takes more than simply knowing
              what to eat. Knowing how to use behavior change coaching
               is critical to effectively help clients develop habits
                that will yield positive results lasting a lifetime.
              As an Fitness Nutrition Specialist, you will be armed
               with essential behavior change strategies paired with 
               science-backed nutrition information to help your clients
                become more knowledgeable about their nutrition and 
                develop life-long dietary habits that lead to better health</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



      <!-- CustomerServices  modal -->
      <div class="modal fade" id="CustomerModal" tabindex="-1" aria-labelledby="CustomerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="CustomerModalLabel">Customer Services</h5>
              <button type="button" class="btn-close btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <h3>“Great customer service is all about smiling and being nice.”</h3>
            <p>A study by American Express found that customers
               tell an average of 15 people about a poor service 
               experience, compared with 11 people they’ll tell 
               about a positive experience. This spread of negative
                views about a brand through word of mouth can affect 
                the industry-wide reputation and credibility of a company. 
                Furthermore, positive client testimonials have a great 
                impact on the purchase decision of new potential clients, marking 
              it significant to offer the target market a great 
              customer experience to cherish and pass on to others.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>



      <!-- Equipment modal -->
        <div class="modal fade" id="EquipmentModal" tabindex="-1" aria-labelledby="EquipmentModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="EquipmentModalLabel"> Best Equipment</h5>
                <button type="button" class="btn-close btn-danger btn-sm" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
              <p>You can launch an effective exercise program
                using only what nature gave you: your body.
                But because regular activity remains an elusive 
                goal for most people, a multibillion-dollar
                industry has blossomed around the promise 
                of surefire success. Health club memberships
                and home exercise equipment are excellent 
                bexercise solutions for many people. Do keep
                these cautions in mind, though:
                Even the best equipment and most tricked-out 
                gyms only produce results when used regularly.
                Learn to use equipment properly to avoid injuries
                that could sideline you temporarily or permanently.
                Exercise equipment comes in all sizes, shapes, 
                and price ranges. It pays to check consumer 
                ratings and follow our other tips for smart 
                consumers before making your purchase.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->
   

    <!-- about page -->
    <script>
      console.log('hello there');
    </script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
   
    
    </script>
  </body>
</html>