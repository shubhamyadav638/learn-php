<?php
/*echo "demo page <br>";
echo "<br>";
echo 10+20*/


// echo use a function

/*echo("echo as a fun");
//php version check
echo phpversion();*/

// variable 
/*$name ="abc";
echo $name;
echo "<br>";
echo $name;
echo "<br>";
echo $name;
echo "<br>";
echo $name;
echo "<br>";
echo $name;*/

/*$num ="2";
echo "<br>";
echo $num *1;
echo "<br>";
echo  $num *2;
echo "<br>";
echo $num *3;
echo "<br>";
echo  $num *4;
echo "<br>";
echo  $num *5;*/


?>

<pre>

<?php
/*var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);*/
// echo phpversion();


// assign strig to a variable 

/*$x = "John";

echo $x;  
echo "<br>";       
// Assign Multiple Values 
$a = $b = $c = "xyz";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;*/

//Variable with local scope: 

/*function myTest() {
  $m = 5; // local scope
  echo "<p>Variable m inside function is: $m</p>";
}
myTest();

// using m outside the function will generate an error
echo "<p>Variable m outside function is: $m</p>";*/


// global scope

/*$x = 5; // global scope

function globalVar() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
}
globalVar();

echo "<p>Variable x outside function is: $x</p>";*/

// PHP The global Keyword


$x = 5;
$y = 10;

function myTest() {
  
  global $x, $y;

  echo $y;
  echo "<br>";
  echo $x;
  echo "<br>";
} 

myTest();  // run function
echo $y; // output the new value for variable $y
echo "<br>";
echo $x;
echo "<br>";
?>

</pre>