<?php
// ek array ke andar bahut sare array hote hai use multidimentnal array bolte hai and asociative means key value me 

// syntax
// $array=[
//     ["name"=>"shubham","age"=>30,"city"=>"delhi"],
//     ["name"=>"ayushi","age"=>30,"city"=>"noida"],
//      ["name"=>"harshika","age"=>30,"city"=>"gurugram"],
//     ["name"=>"ishika","age"=>30,"city"=>"greter noida"]
// ];

// $array = [
//     ["name" => "shubham", "age" => 30, "city" => "delhi"],
//     ["name" => "ayushi", "age" => 30, "city" => "noida"],
//     ["name" => "harshika", "age" => 30, "city" => "gurugram"],
//     ["name" => "ishika", "age" => 30, "city" => "greter noida"]
// ];

// // Outer loop = har row
// foreach($array as $outer){
//     // Inner loop = us row ke har key => value
//     foreach($outer as $key => $value){
//         echo ucfirst($key) . ": " . $value . " | ";// ucfirst ye first latter ko capital karta hai
//     } /// ye foreach outer foreach associative array ke key value ko point karta hai
//     echo "<br>";
// } // ye foreach har persion ke associative array ko point karta hai



// print in table

$array = [
    ["name" => "shubham", "age" => 30, "city" => "delhi"],
    ["name" => "ayushi", "age" => 30, "city" => "noida"],
    ["name" => "harshika", "age" => 30, "city" => "gurugram"],
    ["name" => "ishika", "age" => 30, "city" => "greter noida"]
];

echo "<table border='1' cellspacing='0' cellpadding='4'>";

// table ki heading ke liye jo key hai 
echo "<tr>";
foreach(array_keys($array[0]) as $key){
    echo "<th>" . ucfirst($key) . "</th>";
}
echo "</tr>";

// Table Rows
foreach($array as $outer){
    echo "<tr>";
    foreach($outer as $value){
        echo "<td>" . ucfirst($value) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>