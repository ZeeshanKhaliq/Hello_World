<?php
  include ("db.php");
  
    $Id=$_GET['id'];
    $query="DELETE FROM clients WHERE clientId='".$Id."'";
    $result=mysqli_query($connection,$query);
    header("Location:table.php");
?>
