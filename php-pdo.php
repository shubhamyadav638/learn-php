<?php
$host = "localhost";
$username = "root";
$password = null;
$database = "college";

try {
    $connectDB = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $connectDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection done";
} catch (PDOException $err) {
    echo "Connection failed: " . $err->getMessage();
}

echo "<br/>";
$result= $connectDB->query("show tables");
// print_r($result);

while($row= $result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}
?>
