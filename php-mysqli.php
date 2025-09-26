<?php
$host="localhost";
$username="root";
$password=null;
$database="college";

// new  means object create kar rahe hai 
$connectdb = new mysqli($host,$username,$password,$database); // ye isi tara same position pe value hongi

if ($connectdb->connect_error) {
    die("Db not connect: " . $connectdb->connect_error);
} else {
    echo "Db connected";
}

// how to confirm database is connected or not 

echo "<br/>";
$result = $connectdb->query("show tables")->fetch_all();
print_r($result);
?>