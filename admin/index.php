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

<html>
    <body>
		<a href = "login.php"><button>Logout</button></a>
           <table>
            <tr>
                <th>ID</th>
                <th>First_Name</th>
                <th>Last_Name</th>
                <th>Mobile_Number</th>
                <th>Email</th>
                <th>Province</th>
                <th>City</th>
                <th>Baranggay</th>
                <th>Budget</th>
                <th>Power_Consumption</th>
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

$sql = "SELECT * FROM customers";
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
		<td><form method = 'post'><button name = 'delete' value = '".$row["ID"]."'>Delete</button></form></td></tr>";      
    }
}

else{
    echo"No results";
}

?>

      </table>
   </body>
</html>