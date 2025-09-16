<?php
// fun is a block of code use fo specific resion the fun can reuse multiple time
 // type of function 
//  1.user define function
//  2. inbuild function

// wase fuction tow types ke hote hai but coding ke hisab se alag alag hote hai 

// 1. simple function 
// 2. returning value function
// 3. anonymous function 
// 4. parameterize functions
// 5. variable functions

// syntax

// function function_name(){
// // code here 
// }
// // call a function 
// function_name();


// shubham();
// function shubham(){
//     echo "hello i am fun <br>";
// }
// shubham();


// function user(){
//     echo "user name shubham <br>";
//     echo "user email shubham@gmail.com <br>";
//     echo "user phone 1252555555 <hr>";
// }
// user();
// user();
// user();
// user();

// ek function ke andar dusra fun call karna 
// function usertitle(){
//     echo "<h1>User details</h1>";
   
// }

// function user(){
//     usertitle();
//     echo "user name shubham <br>";
//     echo "user email shubham@gmail.com <br>";
//     echo "user phone 1252555555 <hr>";
// }
// user();
// user();
// user();
// user();


//! ==========================  function wit parameter ==================================

// parameterize fun wo hote hai jisme hum fun call kate samay data pass karte hai 

// function sum($a){
//     echo $a+20;
// }
// sum(50);

// function sum($a,$c){
//     echo $a+$c;
// }
// sum(50,"50s"); // null meanse kuch nahi to 50 aayega true pe 51  false pe 50 undefine pr error  50s bheju to 100 to aayega bbut Warning: A non-numeric value encountered use line pe lekin s50 pr fetal error aayega

// function sum($a,$b){
//     echo $a+$b.'<br>';
// }
// sum(50,20); //70
// sum(50,null);//50
// sum(50,"50");//100
// sum(50,true);//51
// sum(50,false);//50
// sum(50,"50s");//Warning: A non-numeric value encountered in C:\xampp1\htdocs\demo\function.php on line 74 100
// sum(50,"s50");//  Fatal error: Uncaught TypeError: Unsupported operand types: int + string in
// sum(50,string);// Fatal error: Uncaught Error: Undefined constant "string"

// sum(50,undefine);//  Fatal error: Uncaught Error: Undefined constant "undefine" in



// // dynamic data print 

// function userdata($name, $color){
// echo "<h1 style='color:$color'> $name</h1>";
// }

// userdata("shubham",'red');
// userdata("ayushi",'blue');


// function username(){
//     echo "shubham yadav";
// }

// echo "<h1> hi current user is". username()."</h1>"; // yaha mujhe current user nahi mila bcz echo kewal print karta hai value return nahi karta o/p is 
// shubham yadav
// hi current user is



// function username(){
//     return "shubham yadav";
// }
// echo username();
// echo "<h1> hi current user is ". username()."</h1>";



// default parameter 

// iska use hum tb karte hai jb parametre se koi value na aaye to hu apna default value kar denge 

// function fruits($name="banana", $color="red"){
//     echo "this is $name and color is $color";
// }
// fruits("apple","green");


// nested function


// syntax 

// fuction test(){

//         fuction test2(){
        
//     }
// }

//test(); // first funtion top chlega 
// function test(){
//     echo "test function called <br>";
//     // test1();  yaha nahi chlega 
//     function test1(){
//         echo "test 1 function called <br>"; 
//     } 
//     test1(); //yaha chlega function ke baad call kar sakte hai aga nested hai to
// }
// // test1(); // nested me parrent ke uper call nahi karte nahi chlega jb tk parent nahi chlega tb tk child bhi nahi chlega or parrent ke just baad call karna hai 
// test();
// test1();



// variable function 

// syntax

// function test(){

// }
// $variable="test";

// $variable();


// function test(){
//  echo "varable function call";
// }
// $variable="test";
// $variable();




function test(){
 echo "varable function call <br>";
}
$variable="test";

function main($variable){
 echo "main function call <br>";
//  $variable(); // isme direct $ work nahi karega(varable fuction wala work nahi karega agar direct function name se call kar de to call ho jayega ) agar hum direct call karna chahte hai to Undefined variable $variable 
test();

$variable(); // variable wala ho sakta hai ye whi name hoga jo hum parameter se lenge 
}
main($variable);// ye same function ya function ke variable name de sakte hai yaha same hoana chahiye 
?>