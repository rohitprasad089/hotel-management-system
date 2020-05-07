<?php
include_once("../connection.php");
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $query1=mysqli_query($conn,"DELETE FROM availability WHERE id=$id");
  if($query1)
    {
    header('Location:dashboard.php');
    }
}
?>

