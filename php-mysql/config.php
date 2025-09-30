<?php
$host="localhost";
$username="root";
$password=null;
$database="college"

$connectDb= new PDO("mysql:host=$host;dbname=$database",$username,$password);
$connectDb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE)
?>