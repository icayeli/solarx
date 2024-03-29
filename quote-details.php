<?php
session_start();

include "encrypter.php";

$servername = "127.0.0.1";
$username = "root"; 
$password = ""; 
$dbname = "capstone_database"; 
$tablename = "customers"; 
$conn = new mysqli($servername, $username, $password, $dbname);
$firstname = ""; 
$lastname = ""; 
$mobile = "";
$email = "";
$baranggay = "";
$province = "";
$city = "";
$budget = "";
$powerconsumption = "";

if(isset($_GET["id"])){
    $_SESSION["id"] = $_GET["id"];
}

if(isset($_SESSION["id"])){
    $query = "select * from ".$tablename." where id=".$_SESSION["id"];
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result)>0){
        while($customer = mysqli_fetch_assoc($result)){
            $firstname = $customer["First_Name"];
            $lastname = $customer["Last_Name"];
            $mobile = $customer["Mobile_Number"];
            $email = $customer["Email"];
            $baranggay = $customer["Baranggay"];
            $province = $customer["Province"];
            $city = $customer["City"];
            $budget = $customer["Budget"];
            $powerconsumption = $customer["Power_Consumption"];
         }
    }
  $package_query = "select * from Packages where Budget='".$budget."' AND WattRange='".$powerconsumption."'";
  $package_result = mysqli_query($conn, $package_query);
}
else{
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SolarX Installation Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/solarx logo.png" rel="icon">
  <link href="assets/img/solarx logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

     <h2 class="logo me-auto"><a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/solarx logo.png" alt="">&nbspSolarX</a></h2>
      
      <nav id="navbar" class="navbar">
                <ul>
          <li><a class="nav-link scrollto active" href="index.html #hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html #about">About</a></li>
          <li><a class="nav-link scrollto" href="index.html #services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html #portfolio">Product Items</a></li>
          <li><a class="nav-link   scrollto" href="index.html #pricing">Packages</a></li>
          <li><a class="nav-link scrollto" href="index.html #faq">FAQs</a></li>
          <li><a class="nav-link scrollto" href="index.html #team">Team</a></li>
          <li><a class="nav-link scrollto" href="index.html #contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="index.html #about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Purchase Details</li>
        </ol>
        <h2>Purchase Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hi, <?php echo $firstname?>!</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch justify-content-center">
            <div class="info">
              <div class="address">
  
              <h6> Please check the following details if correct </h6>
              <div class="name">
                <h4>Name</h4>
                <p><?php echo $firstname ." ". $lastname ?></p>
              </div>
                <h4>Address</h4>
                <p><?php echo decode($baranggay)?>, <?php echo decode($city)?>, <?php echo decode($province)?></p>
              </div>

              <div class="email">
                <h4>Email</h4>
                <p><?php echo $email?></p>
              </div>

              <div class="phone">
                <h4>Phone Number</h4>
                <p><?php echo decode($mobile)?></p>
              </div>

              <div class="budget">
                <h4>Budget</h4>
                <p><?php echo $budget?></p>
              </div>
               <div class="consumption">
                <h4>Consumption per month</h4>
                <p><?php echo $powerconsumption?></p>
              </div>

             
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">


           
<?php
	if (mysqli_num_rows($package_result)>0)
	{
        while($package = mysqli_fetch_assoc($package_result))
		{
            $name = $package["Name"];
            $details = $package["Details"];
            $watts = $package["Watts"];
            $price = $package["Price"];
            $budget = $package["Budget"];
            $wattrange = $package["WattRange"];
            $id = $package['ID'];

?>
<!-- ONE -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"></h5>
          <!-- ITEM -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Package</th>
                    <th scope="col">Details</th>
                    <th scope="col">Watts</th>
                    <th scope="col">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo $name ?></td>
                    <td><?php echo $details ?></td>
                    <td><?php echo $watts ?></td>
                    <td><?php echo $price ?></td>
                  </tr>
                </tbody>
              </table>
              <!-- end ITEM-->

              <!-- PURCHASE button -->
              <div class="my-2">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Thank you for choosing us! Please select your choice then proceed to check out.</div>
              </div>
              
              <div class="text-right"><?php echo' <a href="quote-waybill.php?purchaseID='.$id.'"class="w">PURCHASE</a>';?></div>
          <!-- end PURCHASE button -->

          </div>
        </div>
<!-- end ONE -->
&nbsp
<?php
		}
	}
  else{
    echo "<h3 align='center'><br><br><br><br>Sorry but we don't have a recommended package for you. Please try again with another budget and power consumption option.</h3>";

  }
?>
<center>
  <br>
 <div class="text-right"> <a href="quote-register.php" class="w">Go Back</a></div>
</center>

      </div>
    </form>
 </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>SolarX</h3>
            <p>
              Landmark Subdivision <br>
              Brgy. Parian, Calamba City <br>
              Laguna 4027, Philippines <br><br>
              <strong>Contact Number:</strong> 0932 284 9614<br>
              <strong>Email:</strong> junelai24@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html #services">Maintenance</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html #services"> Save up!</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html #services">Free Consultation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html #services">Save the Environment</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>For direct inquiries</h4>
            <p>Please visit us on our <a href="https://www.facebook.com/Solarxpanelinstallation">Facebook Page. </a> </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>SolarX</span></strong> All Rights Reserved
      </div>
      <div class="credits">
        Designed by Team JAEBLEZ
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>
</body>
</html>
