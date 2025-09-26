<?php
// $file="files/dummy.txt";
// $fileread = fopen($file,"r")  or die("unable to read");
// echo fread($fileread,filesize($file));
// fclose($fileread);
?>
<?php
if(isset($_FILES['filename'])){
    // print_r($_FILES['filename']);
      // Get the temporary file path
 $file = $_FILES['filename']['tmp_name']; //tmp_name isse file ka size wagira mill jayega 
// Open file for reading
    $handle = fopen($file, "r") or die("Unable to open file!");
    // Read the content
    $content = fread($handle, filesize($file));
 // Output file content
    echo nl2br($content); // nl2br() for line breaks
 // Close the file
    fclose($handle);
}
?>

 <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="filename">
    <br><br>
    <button type="submit">File Read</button>
</form>