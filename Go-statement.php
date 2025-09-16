<?php
// $x=20;
// echo"bfore start condition <br>";

// if($x==20){ // yaha condition true ho gayi 
//     goto jump;
// }
// // ye code nahi chlega kyuki ye go to statement ke beech me hai ye tb hoga jb condition true hogi tb 
// $name="shubham";
// echo $name;

// jump:
// echo "statement is jump"





// $x=10;
// echo"bfore start condition <br>";

// if($x==20){ // yaha condition false ho gayi 
//     goto jump;
// }
// // ye code chlega kyuki ye go to statement condition false  ho gayi 
// $name="shubham <br>";
// echo $name;

// jump:
// echo "statement is jump"


for($i=0; $i<10; $i++){
    echo "$i <br>";

if($i==5){
    goto outsideloop;
}

// echo "$i 2 <br>";

}
outsideloop:

echo "loop is break <br>";
?>