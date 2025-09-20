<?php
// jb koi user website par visit karta hai to hum chahte hai uski information save kar le browser ke andar like kb login kiya tha cuntroy last time login name.

// syntax

// setcookie(name, value, expire, path, domain, secure, httponly); // first paramter is compelsory  and  baki  optinal.



setcookie("fruit","apple",time()+(86400),"/");
setcookie("color","red",time()+(86400),"/");
setcookie("car","bmw",time()+(86400),"/");

// how to print cookie
// print_r($_COOKIE);

// ye kaise check kar sakte hai ki cookie set hai ya nahi 

if(isset($_COOKIE['fruit'])){
    print_r($_COOKIE);

echo "current cookie is ". $_COOKIE['fruit'];
}else{
    echo "Cookie not store";
}

echo "<br/>";
if(isset($_COOKIE['color'])){
    print_r($_COOKIE);

echo "current cookie is ". $_COOKIE['color'];
}else{
    echo "color Cookie not store";
}


echo "<br/>";
if(isset($_COOKIE['car'])){
    print_r($_COOKIE);

echo "current cookie is ". $_COOKIE['car'];
}else{
    echo "car Cookie not store";
}

?>