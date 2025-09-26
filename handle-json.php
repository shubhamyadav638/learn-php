<!-- // json stands for javascript object notation
// its text based means --- koi bhi data type ke data ho sakte hai  data exchange formate means json ke helps se  ek server se dusre server me  ya ek programing language se dusre programing language me  ya ek applictionse dusre application me data ko exchange  kar sakte hai kis liye structuring data ke liye means serch ,add update ke liye   -->


<?php
// how to convert array to json

// $data =["name"=>"abc","email"=>"abc@gmail.com","address"=>"xyz from... ","phone"=>5555555];
// // print_r($data);
// $jsonformate=json_encode($data);
// echo $jsonformate;

// how to convert json to array
$user = '{"name":"abc","email":"abc@gmail.com","address":"xyz from... ","phone":5555555}';
// echo $user;
$arrayformate=json_decode($user,true); // agar second parameter me true nahi diya to class object me milega like o/p stdClass Object ( [name] => abc [email] => abc@gmail.com [address] => xyz from... [phone] => 5555555 )
print_r($arrayformate);


?>


