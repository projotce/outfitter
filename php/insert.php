<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "clothesDB"; 

// Opens connection to MySQL
try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }

//Creating Variables Q: is this necessary?
$imgURL=$_POST['imgURL'];
$clothesType=$_POST['clothesType'];

//Insert Data
$sql="INSERT INTO clothesWardrobe (clothesType)
	VALUES('$_POST[fname]')
";

//added condition if pass/fail
if(mysqli_affected_rows($connect)>0){
	echo "echo Success! <br>";
	echo "Go back to <a href="uploadimage.html">upload image</a> Or <a href="home.html">main menu</a>?";
}
else{
	echo "Adding to category NOT added. <br>";
	echo mysqli_error($connect);

//Catch block handles any problems that occur in DB queries
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

//Closes connection
    $conn = null;

?>