<?php 
require("../conn.php");

if(
	!isset($_POST['fname']) ||
	!isset($_POST['fdescription']) ||
	!isset($_POST['fprice']) || 
	!isset($_POST['fcategory'])) {echo '';}
else{
//---------------
$name=$_POST['fname'];
$description=$_POST['fdescription'];
$price=$_POST['fprice'];
$category=$_POST['fcategory'];
	
//---------------	
	
$filepath=pathinfo($_FILES['file']['name'])	;
		var_dump($filepath);
$extension=$filepath['extension'];
		var_dump($extension);
$path=date('H-i-s').'.'.$extension;
		var_dump($path);
var_dump(move_uploaded_file($_FILES['file']['tmp_name'],"../img/$path"));	

//---------------
	
$sqlInsert ="INSERT INTO items (`i_name` , `i_description` , `i_price` , `i_img` , `i_category`) VALUES ('$name' , '$description' , '$price' , '$path' , '$category')";	
	
//var_dump($sqlInsert);
	
$quaryInsert=mysql_query($sqlInsert);
	
//var_dump($quaryInsert);
		
}
?>