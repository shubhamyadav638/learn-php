<!DOCTYPE html>
<html lang="en">
  <head>
    <title>button click</title>
  </head>
  <body>
    <form action="" method="post">
      <button name="button" value="btn1" >call function</button>
    </form>
  </body>
</html>

// php me  kabhi bhi directly  fun call nahi hota jaise js me onclick pr ho jata hai php me call karne ke liye request banani padti hai 

<?php
if(isset($_POST['button'])){   //is set  chek karta hai ki aapki request aa rahi hai ya nahi 
btn_click_test();
}// btn click par tabhi chlega jb method post rahega 

function btn_click_test(){
  echo "function called on click btn";
}
?>