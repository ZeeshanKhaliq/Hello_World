<?php
include ("db.php");

    $Id=$_GET['id'];
    echo "Pakistan";
    echo $Id;
    $sql="DELETE FROM payments where paymentId='".$Id."'";
    $result=mysqli_query($connection,$sql);
    if ($result==true) {
      header("Location:payments.php");
    }


 ?>
