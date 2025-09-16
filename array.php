<?php
// callection of data store multiple vallue

// syntax
// $user=["raam","syam","krishn"];
// $user=array("raam","syam","krishn");

// type of array 
// 1. indexed arrays
// 2. associative arrays
// 3. multidimensional arrays

 
// $user=["raam","syam","krishn"];
// echo  $user[0];
// echo"<Br>";

// $user=array("radha","raman","gopi");
// echo  $user[1];

$users = ["Shubham", "Rahul", "Amit", "Priya","1","2"];
// echo count($users);// count jo arra ke har element ko cout karke uske index ko dta hai
for ($user=0; $user< count($users); $user++){
echo $users[$user];
echo "<br>";
}

?>