<?php

$name = $_POST["name"];
$mail= $_POST["mail"];
$checkbox1 = filter_input(INPUT_POST, "checkbox1", FILTER_VALIDATE_INT);
$checkbox2= filter_input(INPUT_POST, "checkbox2", FILTER_VALIDATE_INT);



$host = "localhost";
$dbname = "Blog_DB";
$username = "root";
$password = "";


$conn = mysqli_connect ("$host","$username", "$password", "$dbname");


// $conn = mysqli_connect (hostname : $host,
//                 username : $username,
//                 password : $password,
//                 database : $dbname );

            
if(mysqli_connect_errno()){
    die("connection error: ".mysqli_connect_error());
}               

$sql = "INSERT INTO  EG_refont_blog (name,mail,checkbox1,checkbox2)
         VALUES(?,?,?,?)";


$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt , $sql)) {
    die( mysqli_error($conn));
}


mysqli_stmt_bind_param($stmt, "ssii",
                        $name,
                        $mail,
                        $checkbox1,
                        $checkbox2);


mysqli_stmt_execute($stmt);

