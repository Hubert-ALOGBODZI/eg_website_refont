<?php

$conn =new mysqli("localhost","root", "", "Blog_DB");

if($conn){
    echo"connection successful";
}else{
    die(mysqli_error($conn));
}