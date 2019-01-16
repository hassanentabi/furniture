<?php
require("../conn.php");

var_dump($_POST['id']);

$sql="delete from category where c_id=".$_POST['id'];
$query=mysql_query($sql);

header("location:addCategory.php");
?>