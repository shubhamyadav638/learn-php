<!-- <?php
// $fileName = "dummy.txt";
// $fileName = "files/dummy.txt";// yaha mai chahta hu ki ek file name ka folder hai usme create ho 
// $content = "this is a dummy content";
// $file = fopen($fileName,"w") or die("unable to create file "); // yaha hum us file ko open kar rahe hai 
// fwrite($file,$content); // us file ke conent ko wrte kar rahe hai and content add kar rahe 
// fclose($file); // us file ko close kar rahe hai
// echo "file created"

?> -->

<?php
if(isset($_POST['filename'])){
$fileName = "files/".$_POST['filename'];
$content = $_POST['content'];
$file = fopen($fileName,"w") or die("unable to create file ");
fwrite($file,$content);
fclose($file);
echo "file created";
}
?>

    <form action="" method="post">
        <input type="text" placeholder="enter file name with extension" name="filename">
        <br>
        <br>
        <textarea name="content" id=""></textarea>
        <br>
        <br>
        <button>file create </button>
    </form>
