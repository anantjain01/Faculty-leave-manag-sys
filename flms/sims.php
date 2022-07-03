<?php

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "flms";

$conn = mysqli_connect($sname,$uname,$password);

if(!$conn)
{
  echo"connection failed!";
}


?>