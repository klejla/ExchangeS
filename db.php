<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = ''; 
$db = "exchangeshop2";
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);

