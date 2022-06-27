<?php
include 'connect.php';
$name = $_POST['name'];
$mail = $_POST['mail'];
$lang = $_POST['lang'];

$sql2 = "INSERT into news (name, mail, lang) values('$name', '$mail', '$lang')";
$conn->exec($sql2);
header('Location:newletter.html');
?>
