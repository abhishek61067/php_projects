<?php
$target_dir = __DIR__."/uploads/";
echo "<h2>".__DIR__."</h2>";
echo $_POST;
if($_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['upload'])){
   echo var_dump($_FILES['fileToUpload']);
   $_target_file=$target_dir.basename($_FILES['fileToUpload']['name']);
   echo "<br> <h1>".$_target_file. "</h1>";  
   echo $_FILES['fileToUpload']['tmp_name'];
   if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$_target_file)){
   // if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], __DIR__.'/uploads/'. $_FILES["fileToUpload"]['name'])){
   // if (copy($_FILES['fileToUpload']['tmp_name'],$_target_file)){
      echo "<br><h1>successfully uploaded</h1>";
   }else {
      echo "<br><h1>failed</h1>";
   }
}
?>