<?php
 include ("db.php");
    //this code insert the values into Php
  if (isset($_POST['Submit'])) {
           $senderName=$_POST["senderName"];
           $reciverName=$_POST["reciverName"];
           $assignment=$_POST["assignment"];
           $Date=$_POST["date"];
           $amount=$_POST["amount"];


   $sql="INSERT INTO `payments` (`senderName`, `reciverName`, `assignment`, `date`, `amount`, `paymentId`)
  VALUES ('{$senderName}', '{$reciverName}', '{$assignment}', '{$Date}', '{$amount}', NULL)";

  $result=mysqli_query($connection,$sql);
    if ($result==true) {
      header("Location: payments.php");
    }
    else {
      echo "error";
    }


  }


 ?>
