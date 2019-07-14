<?php
include 'conn.php';

$id =$_GET['id'];

$sqlDelete = "delete from crudtable where id=$id";

mysqli_query($con,$sqlDelete);

header('location:display.php');
?>