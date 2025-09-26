<?php
$user=["shubha","shivam","vipul","divya","priyanka","aaradhya","raghvendra","shashank"];
// echo is_array($user);// agar ye array hoga to 1 return karega nahi to kuch bhi  return nahi karega yaha array hai to 1 return karega 
$user="abc";

// how to check user is array or not

// echo is_array($user);// agar ye array hoga to 1 return karega nahi to kuch bhi  return nahi karega yaha array nahi hai 

// isko condition me check karte hai
if(is_array($user)){
echo 'this is an a array';
}else{
echo "this is an not a array";
}

echo "<br>";
$user=["divya","priyanka","shubham","shivam","vipul","divya","priyanka","aaradhya","raghvendra","shashank",];
// how to count an array element
echo count($user);

// array ke andar koi element delete karne ke liye 
echo "<br>";
unset($user[2]); // kon sa element remove karna hai
print_r($user);

echo "<br>";
array_push($user,"vipul"); // last se add karna ho to
print_r($user);

// last ka remove karna ho to 
echo "<br>";
array_pop($user); // last se add karna ho to
print_r($user);

// agar humko assosiative array ke andar se keys nikalni ho to 
echo "<br>";
$users=["name"=>"shubham","phone"=>555555,"email"=>"shubham@gmail.com","address"=>"noida",];

print_r(array_keys($users));

// how to convert array to sring
echo implode($user);
echo "<br>";

// how to convert string to array

$str="how are you ?";
print_r(explode(" ",$str));// ye space ke hisab se array me convert hoga 
echo "<br>";

print_r(explode("o",$str));// ye o ke hisab se hoaga convert


// how to merge array
echo "<br>";
print_r(array_merge($user,$users));


// how to remove duplicate element
echo "<br>";
print_r(array_unique($user));

?>