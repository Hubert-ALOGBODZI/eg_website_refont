<?php

$conn =new mysqli("localhost","root", "", "Blog_DB");

if($conn){
    echo"connection successful";
}else{
    die(mysqli_error($conn));
}

$servername = "localhost";
$username = "phpmyadmin";
$password = "root";
$db = "egdb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  // echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

<?php

$conn =new mysqli("localhost","root", "", "Blog_DB");

if($conn){
    echo"connection successful";
}else{
    die(mysqli_error($conn));
}
