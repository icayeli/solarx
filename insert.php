<?php
session_start();
use LDAP\Result;

include "encrypter.php";

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "capstone_database";
$tablename = "customers";
$firstname = $_POST["First_Name"];
$lastname = $_POST["Last_Name"];
$mobile = $_POST["Mobile_Number"];
$email = $_POST["Email"];
$baranggay = $_POST["Baranggay"];
$province = $_POST["Province"];
$city = $_POST["City"];
$budget = $_POST["Budget"];
$powerconsumption = $_POST["Power_Consumption"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sqlInsert = "Insert into " . $tablename . "(First_Name,Last_Name,Mobile_Number,Email,Province,City,Baranggay,Budget,Power_Consumption)" . "Values('".$firstname."','".$lastname."','".encode($mobile)."','".$email."','".encode($province)."','".encode($city)."','".encode($baranggay)."','".$budget."','".$powerconsumption."');";

if ($conn->query($sqlInsert) === TRUE)
{
  $id = mysqli_insert_id($conn);
  $_SESSION["id"]=$id;
  header("Location: quote-details.php");

}

else {
  echo "Error: " . $sqlInsert . "<br>" . $conn->error;
}
?>
Welcome <?php echo $_POST["First_Name"];            
?>!
