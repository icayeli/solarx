<HTML>
<body>
<?php
//Initialize variables
$servername = "127.0.0.1"; //default servername for phpmyadmin can also be 'localhost'
$username = "root"; // default username
$password = ""; //password used during installation of xampp
$dbname = "capstone_database"; //Created database in phpmyadmin
$tablename = "customers"; //Created table in phpmyadmin
$firstname = $_POST["first_name"]; //input from MLTSampleDB.php
$lastname = $_POST["last_name"]; //input from MLTSampleDB.php


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
$sqlInsert = "Insert into " . $tablename . "(first_name,last_name)" . "Values('".$firstname."','".$lastname."');";

//Condition and execute query
if ($conn->query($sqlInsert) === TRUE) 
{
  echo "New record created successfully";
} 

else 	
{
  echo "Error: " . $sqlInsert . "<br>" . $conn->error;
}
?>
Welcome <?php echo $_POST["first_name"];?>!
</body>
</HTML>