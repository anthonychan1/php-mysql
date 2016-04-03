<?php
include('../db.php');
include('../vars.php');

global $mysqli;

// sql to create table
$sql = "UPDATE stock set quan=9 where id=9";
$result = $mysqli->query($sql);
if ($result) {
	print "Item restocked. ";
}

$mysqli->close();
?>
