<?php
// print_r($_REQUEST); // ye get or post dono pe work karta hai

// print_r($_REQUEST["user_name"]); // ek specific value print karna

// agar multiple value ho tb kaise dikhayenge ek ek print to 

// foreach($_REQUEST as $key => $data){
//     // echo $key;
//     // echo $data;
//     // echo "<br/>";
//     echo ucfirst($key) . ": " . ucfirst($data) ;
//    echo "<br/>";
// }


// koi dummy deta add karna ho to 

// $_REQUEST['dummy']="test"; // ['dummy'] ye key hai "test" ye value 
// $_REQUEST['dummy2']="test2"; 
// foreach($_REQUEST as $key => $data){
//     echo ucfirst($key) . ": " . ucfirst($data) ;
//    echo "<br/>";
// }


// condition ke base pe render karna hai 

if($_REQUEST){
foreach($_REQUEST as $key => $data){
    echo ucfirst($key) . ": " . ucfirst($data) ;
   echo "<br/>";
}
}


// print_r($_POST);


?>