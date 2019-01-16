<?php
require("../conn.php");

var_dump($_POST['id']);

$sql="delete from items where i_id=".$_POST['id'];
$query=mysql_query($sql);

header("location:addItem.php");
?>