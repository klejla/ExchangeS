<?php
require 'db.php';
$name = $_POST["firstname"];
$surname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO `contact` (`firstname`, `lastname`, `email`, `message`) "
            . "VALUES ('$name','$surname','$email','$message')";
$mysqli->query($sql);
?>



<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
     <link href="https://fonts.googleapis.com/css?famili=Roboto+Condensed:400,700" rel="stylesheet">
    <meta charset="utf-8">
    <title>Other things</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50"> 
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="index.html"> Home </a></li>
        <li class="nav-item"><a class="nav-link" href="about.html"> About us  </a></li>
        
         <li><a>Shopping</a>
            <ul>
             <li class="nav-item"><a class="nav-link" href="clothes.html"> Clothes </a></li>
             <li class="nav-item"><a class="nav-link" href="contact.html">Others</a></li>
         </ul>
             </li>
         </ul>
     </nav><br><br>
	<br><br><br>

<hr>
    <hr>
    <hr>
    <h2>Submition successful.</h2>


</body>


</html>