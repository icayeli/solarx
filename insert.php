

<?php
//Initialize variables
session_start();
use LDAP\Result;

include "encrypter.php";

$servername = "127.0.0.1"; //default servername for phpmyadmin can also be 'localhost'
$username = "root"; // default username
$password = ""; //password used during installation of xampp
$dbname = "capstone_database"; //Created database in phpmyadmin
$tablename = "customers"; //Created table in phpmyadmin
$firstname = $_POST["First_Name"]; //input from MLTSampleDB.php
$lastname = $_POST["Last_Name"]; //input from MLTSampleDB.php
$mobile = $_POST["Mobile_Number"];
$email = $_POST["Email"];
$baranggay = $_POST["Baranggay"];
$province = $_POST["Province"];
$city = $_POST["City"];
$budget = $_POST["Budget"];
$powerconsumption = $_POST["Power_Consumption"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

//Create sql command for insert
//SQL/MYSQL: Insert into studentTable(Surname,GivenName,MiddleName) Values('1','2','3');
//C++: cout << "Insert into " + studentTable + "(Surname,GivenName,MiddleName)" + "Values('" + surname + "','" + givenname + "','" + middlename + "');";
$sqlInsert = "Insert into " . $tablename . "(First_Name,Last_Name,Mobile_Number,Email,Province,City,Baranggay,Budget,Power_Consumption)" . "Values('".$firstname."','".$lastname."','".encode($mobile)."','".$email."','".encode($province)."','".encode($city)."','".encode($baranggay)."','".$budget."','".$powerconsumption."');";




//Condition and execute query
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
