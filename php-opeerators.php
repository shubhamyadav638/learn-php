<?php
// $x = 10;  
// $y = 6;
//Arithmetic operators
// echo $x + $y;
// echo '<br>';
// echo $x - $y;
// echo '<br>';
// echo $x * $y;
// echo '<br>';
// echo $x / $y;
// echo '<br>';
// echo $x % $y;
// echo '<br>';
// echo $x ** $y; // power x^Y

//Assignment Operators
// $x = 2;  
// $y = 5;
// echo $x = $y;  // y ki value x me assign ho gai ab x me 5 hoga //5
// echo '<br>';
// echo $x += $y; // x and y ko add karke x me assign ho jayega same work x= x+ y ka karega but hum sort code use karenge kyuki ye jyada time le raha hai first srithmatic operator then assignment operator // 5+5 =10
// echo '<br>';

// echo $x -= $y;
// echo '<br>';  // 10-5=5

// echo $x *= $y;
// echo '<br>'; //5*5=25


// echo $x /= $y;
// echo '<br>'; //25/5=5

// echo $x %= $y;
// echo '<br>';//5%5=0

//Comparison operators

// $a=5;
// $b='6';

// echo var_dump($a == $b); // equalto 
// echo '<br>';
// echo var_dump($a === $b); //Identical ye check karega rqual ke sath data type
// echo '<br>';
// echo var_dump($a != $b); // Not equal
// echo '<br>';
// echo var_dump($a <> $b); // Not equal ye same hai Not equal
// echo '<br>';
// echo var_dump($a !== $b); // Not identical ye not equal ke sath data type check karega 
// echo '<br>';
// echo var_dump($a > $b); // 	Greater than a big hai b se 
// echo '<br>';
// echo var_dump($a < $b); // Less than a small hai b se 
// echo '<br>';
// echo var_dump($a >= $b); // Greater than or equal to  a big ho b se ya equal ho tabhi true hoga 
// echo '<br>';
// echo var_dump($a <= $b); //	Less than or equal to a small ho bs e ya equal ho tabhi true hoga 
// echo '<br>';
// echo var_dump($a <=> $b); // Spaceship ye a small hoga b se to 1 return agar equal hua to 0 return agar grater hua to -1 return hoga ye php 7 ke andar introduce hua hai 
// echo '<br>';

// Increment / Decrement Operators

// $a=5;
// echo ++$a;  // Pre-increment o/p 6
// echo '<br>';
// echo $a++;   // Post-increment o/p 6 but next line me increment hoga 
// echo '<br>'; 
// echo --$a;  // Pre-decrement o/p 6
// echo '<br>';
// echo $a--; // Post-decrement o/p 6 but next line me ye 4 hoga 
// echo '<br>';
// echo $a;

// String and String operators

// string

// $str = "shubham";
// $age = 24;
// echo "my name is ".$str;
// echo '<br>';
// echo "my name is $str ";
// echo '<br>';
// echo 'my name is $str '; // single string ke sath variable work nahi karta hai to  is case me echo 'my name is '.$str; 
// echo '<br>';
// echo 'my name is '.$str; 


// //  String operators

// echo '<br>';
// echo 'my name is '.$str.' and my age '.$age;  // . Concatenation Concatenation of $txt1 and $txt2
// echo '<br>';

// $str1 = "hello ";
// $str2 = "how are you";

// echo $str1.$str2;  // . Concatenation Concatenation of $txt1 and $txt2

// echo '<br>';

// echo $str1.=$str2;// Concatenation assignment Appends $txt2 to $txt1



// Conditional Assignment Operators

//   // agar condition true hogi to ? ye code chlega nahi to : ye wala code chlega  
//    echo $status = (empty($user)) ? "user nahi hai" : "user hai ";
//    echo("<br>");

//    $user = "mai user hu ";
//    // 
//    echo $status = (empty($user)) ? "user nahi hai" : "user hai";



 // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
  
  //  echo $user = $_GET["user"] ?? "anonymous";
  //  echo("<br>");
  
  //  // variable $color is "red" if $color does not exist or is null
  //  echo $color = $color ?? "red";



// logical operator
//  $a=10;
//  $b=20;

//  if ($a==10 && $b==20){
//   echo "sabhi condition true hogi tb chlega";
//    echo("<br>");
//  }
//   if ($a==10 and $b==20){
//   echo "sabhi condition true hogi tb chlega ";
//    echo("<br>");
//  }
//   if ($a==0 or $b==20){
//   echo "condition at least ek condition true hogi tb chlega ";
//    echo("<br>");
//  }
//   if ($a==0 || $b==20){
//   echo "condition at least ek condition true hogi tb chlega ";
//    echo("<br>");
//  }

//   if ($a==10 xor $b==200){
//   echo "koi ek conditon false hogi ya true hogi tb ye returen karega nahi to nahi karega  "; // false false ta true true pr kuch bhi return nahi karega 
//    echo("<br>");
//  }

//   if ($a!=11){
//   echo "condition me value bs same value pr kuch return nahi karega ";
//    echo("<br>");
//  }
?>