<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("sample_crud",$conn);
mysql_query("DELETE FROM users WHERE userId='" . $_GET["userId"] . "'");
header("Location:list_user.php");
?>