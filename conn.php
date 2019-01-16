<?php
@$conn=mysql_connect("localhost","root","") or die("connection is failed");

//var_dump($conn);

$db=mysql_select_db("db",$conn);

?>