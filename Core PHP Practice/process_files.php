<?php 

echo "File Name: ".$_FILES['anyname']['name']."<br>";
echo "File TMP Name: ".$_FILES['anyname']['tmp_name']."<hr>";

move_uploaded_file($_FILES['anyname']['tmp_name'],'abc.jpg')
?>

<img src="abc.jpg" width="200">