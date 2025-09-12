<?PHP
// constant ko $ se nahi karte hai 

const data = "xyz";
//  data="change data "; // change nahi kar sakte  Parse error: syntax error, unexpected token "=" in C:\xampp1\htdocs\demo\constant.php on line 5
// echo data; // yaha $ nahi laga sakte hai 

define("Data", "data 1");
// define("Data", "data 2"); // Warning: Constant Data already defined in C:\xampp1\htdocs\demo\constant.php on line 9
// data 1 ye bhi constant hai change nahi kar sakte 
Echo Data;
?>

<?PHP
$demodata ="abc";
$demodata ="change data "; // yaha data change ho jayega 

// echo $demodata;
?>

