<?php
   include('connect.php');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $lang = $_POST['lang'];

        $sql = "INSERT into news (name, mail, lang) values('$name', '$mail', '$lang')";
        $conn->exec($sql);
        header('Location:newsletter.html');
    }
?>

