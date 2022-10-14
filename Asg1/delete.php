<?php
include_once("config.php");
 
$ID = $_GET['ID'];
 
$result = mysqli_query($mysqli, "DELETE FROM db_webprog WHERE ID=$ID");
 
header("Location:index.php");
?>