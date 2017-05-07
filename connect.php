<?php
$connection = mysqli_connect("db680755983.db.1and1.com", "dbo680755983", "TodoMaster@2017");
if(!$connection){
	echo "Failed to connect database" . die(mysqli_error($connection));;
}
$dbselect = mysqli_select_db($connection, "db680755983");
if(!$dbselect){
	echo "Failed to Select database" . die(mysqli_error($connection));
}
?>
