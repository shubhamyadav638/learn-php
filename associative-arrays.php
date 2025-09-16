<?php
// associative arrays iske andar index nahi hota hai yaha har ek element ke sath key attach hota hai 

$userDetails =["name"=>"shubham","age"=>30,"city"=>"delhi"];
// echo $userDetails[0]; // error milega associative ke andar Warning: Undefined array key 0

// echo $userDetails["name"]; // associative me hum key se uski value ko nikalte hai 

// isme loop kaise chlayenge
// foreach ka first syntax
foreach($userDetails as $key => $data ){
     echo $key ;
    echo $data ;
    echo "<br>";
}
// foreach second syntax
foreach($userDetails as $key => $data ):
      echo $key ;
    echo $data ;
    echo "<br>";
endforeach;
?>