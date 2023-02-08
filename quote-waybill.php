<?php
session_start();

include "encrypter.php";

$servername = "127.0.0.1"; //default servername for phpmyadmin can also be 'localhost'
$username = "root"; // default username
$password = ""; //password used during installation of xampp
$dbname = "capstone_database"; //Created database in phpmyadmin
$tablename = "customers"; //Created table in phpmyadmin
$conn = new mysqli($servername, $username, $password, $dbname);
$firstname = ""; //input from MLTSampleDB.php
$lastname = ""; //input from MLTSampleDB.php
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
$orderID = $_GET['purchaseID'];


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
    // $package_query = "select * from Packages where Budget='".$budget."' AND WattRange='".$powerconsumption."'";
      $package_query = "select * from Packages where id=$orderID";
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

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
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
          <li><a class="nav-link scrollto" href="index.html #contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="index.html #team">Team</a></li>
          <li><a class="getstarted scrollto" href="index.html #about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


<!-- ==========main========= -->
  <main id="main">

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Purchase Details</li>
        </ol>
        <h2>WAYBILL</h2>

      </div>

<br>
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-center">

         <div class="card">
            <div class="card-body">
              <h5 class="card-title">W A Y B I L L</h5>
    
              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th scope="col">Location:  <?php echo decode($baranggay)?> , <?php echo decode($city)?> , <?php echo decode($province)?></th>
                  </tr>
                </thead>

              </table>

              <table class="table table-bordered">

                <thead>
                  <tr>
                    <th scope="col-">BUYER</th>
                    <td scope="col">Name: <?php echo $firstname ." ". $lastname?>
                      <br> Contact Number: <?php echo decode($mobile)?>
                      <br> Email: <?php echo $email?>
                      <br> Address: <?php echo decode($baranggay)?>, <?php echo decode($city)?>, <?php echo decode($province)?>
                      </td>
                  </tr>
                </thead>

                <thead>
                  <tr>
                    <th scope="col">COMPANY DETAILS</th>
                    <td scope="col">Solarx Solar Panel Installation Services
                      <br> Contact Number: 0932 284 9614
                      <br> Email: junelai24@gmail.com
                      <br> Address: Landmark Subdivision Brgy. Parian, Calamba City Laguna 4027, Philippines
                      </td>
                  </tr>
                </thead>        
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

?>

                <thead>

                  
                  <tr>
                    <th scope="col">ORDER DETAILS</th>
                    <td><?php echo $name ?>
                    <br><?php echo $details ?>
                    <br><?php echo $watts ?>
                    <br><?php echo $price ?></td>
                  </tr>
                  <?php }}?>
                </thead>



              </table>


              <div class="col-2"> 
                <a href="quote-thank-you.html" class="btn btn-primary w-100" type="submit">Confirm Order</a>
               </div>


            </div>
          </div>
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
