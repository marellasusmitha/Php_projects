<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bill"; 
$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error()){
die('connectError('.mysqli_connect_error().')'.mysqli_connect_error());
}
if($conn)
{
echo"database connected sccesfully"."<br>";
}
?>