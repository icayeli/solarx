<?php
session_start();
session_destroy();
session_start();
$servername = "127.0.0.1"; //default servername for phpmyadmin can also be 'localhost'
$username = "root"; // default username
$password = ""; //password used during installation of xampp
$dbname = "capstone_database"; //Created database in phpmyadmin
$tablename = "customers"; //Created table in phpmyadmin
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST["submit"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$getQuery = "select * from users where username = '$username' and password = '$password'";
	$result = mysqli_query($conn,$getQuery);
	if(mysqli_num_rows($result) > 0)
	{
		$_SESSION["loggedin"] = "true";
		header("Location: index.php");
	}
	else
	{
		header("Location: login.php?error=nouser");
	}	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SolarX Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/solarx logo.png" rel="icon">
  <link href="../assets/img/solarx logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


<!--=========main=======-->
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <h3> <b><a href=""> SolarX Admin </b></a> </h3>
              </div><!-- End Home -->

              <div class="card mb-3">

                <div class="card-body">

                  <form class="row g-3 needs-validation" method="post">
                    <div class="col-12">
                      <input placeholder="Username" type="text" name="username" class="form-control" id="username" required>
                    </div>

                  <div class="col-12">
                      <input placeholder="Password" type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <br>
                    <br>
                    <div class="col-12"> 
                      <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
                     </div>
                  </form>
      </section>

    </div>
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>
