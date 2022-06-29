<?php

include 'connect.php';

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$level = $_POST['level'];
$domain = $_POST['domain'];
$campus = $_POST['campus'];

$sql = "INSERT INTO `application` (`id`, `name`, `surname`, `email`, `gender`, `phone`, `country`, `level`, `domain`, `campus`, `reg_date`) VALUES (NULL, '$name', '$surname', '$email', '$gender', '$phone', '$country', '$level', '$domain', '$campus', CURRENT_TIMESTAMP);";

$conn -> exec($sql);

echo "<script>window.alert('Please wait, we\'re saving your informations')</script>";

sleep(4);
header('Location:business-energy.html#form');
exit();
?>
