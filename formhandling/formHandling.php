<?php
// print_r($_POST); // isse sari value mill jayegi jaise submit karunga 

if(isset($_POST['user'])){
    echo "user name is ". $_POST['user'];
    echo "<br/>";
    echo "user email is ". $_POST['email'];
    echo "<br/>";
    echo "user password is ". $_POST['password'];
    echo "<br/>";
    echo "user skills is ".implode(",",$_POST['skills']) ;
    echo "<br/>";
    echo "user gender is ". $_POST['gender'];
    echo "<br/>";
    echo "user city is ". $_POST['city'];
    echo "<br/>";
    echo "user bio is ". $_POST['bio'];
    echo "<br/>";
}
?>