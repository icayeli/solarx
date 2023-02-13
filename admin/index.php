<?php
session_start();
include "encrypter.php";
$servername = "127.0.0.1"; //default servername for phpmyadmin can also be 'localhost'
$username = "root"; // default username
$password = ""; //password used during installation of xampp
$dbname = "capstone_database"; //Created database in phpmyadmin
$tablename = "customers"; //Created table in phpmyadmin
$conn = new mysqli($servername, $username, $password, $dbname);

if(!isset($_SESSION["loggedin"]))
{
	header("Location: login.php");
}
if(isset($_POST["delete"]))
{
	$delete_id = $_POST["delete"];
	$getQuery = "delete from customers where ID = $delete_id";
	mysqli_query($conn,$getQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/solarx logo.png" rel="icon">
  <link href="../assets/img/solarx logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

</head>
    <body>
    	  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

     <h2 class="logo me-auto"><a href="../index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/solarx logo.png" alt="">&nbspSolarX</a></h2>
      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="login.php">Logout</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<center>
	<br>
	<br>
	<br>
           <table class="table table-bordered">

            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Province</th>
                <th>City</th>
                <th>Baranggay</th>
                <th>Budget</th>
                <th>Power Consumption</th>
                <th>Type</th>
                <th>Details</th>
				<th>Actions</th>

<?php

$firstname = ""; //input from MLTSampleDB.php
$lastname = ""; //input from MLTSampleDB.php
$mobile = "";
$email = "";
$baranggay = "";
$province = "";
$city = "";
$budget = "";
$powerconsumption = "";

$sql = "SELECT customers.ID, customers.First_Name, customers.Last_Name, customers.Mobile_Number, customers.Email, customers.Province, customers.City, customers.Baranggay, customers.Budget, customers.Power_Consumption, packages.Name, packages.Details FROM customers INNER JOIN packages ON customers.PackageID = packages.ID";
$result = $conn->query($sql);
if ($result->num_rows>0){
    while ($row = $result->fetch_assoc()){
        echo "<tr><td>". $row["ID"] . "</td>
		<td>" . $row["First_Name"] . "</td>
		<td>" . $row["Last_Name"] . "</td>
		<td>" . decode($row["Mobile_Number"]) . "</td>
		<td>" . $row["Email"] . "</td>
		<td>" . decode($row["Province"]) . "</td>
		<td>" . decode($row["City"]) . "</td>
		<td>" . decode($row["Baranggay"]) . "</td>
		<td>" . $row["Budget"] . "</td>
		<td>" . $row["Power_Consumption"] . "</td>
                <td>" . $row["Name"] . "</td>
		<td>" . $row["Details"] . "</td>
		<td><form method = 'post'><button name = 'delete' value = '".$row["ID"]."'>Delete</button></form></td></tr>";      
    }
}

?>

      </table>
  </tr>
</center>


   </body>
</html>
  
