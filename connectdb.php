<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"hotel");
if($connection==NULL){
	die ("Connection not successful");
}
?>