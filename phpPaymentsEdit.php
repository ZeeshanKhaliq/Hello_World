<?php
include ("db.php");
//include ("index.php");
   if (isset($_POST['Submit'])) {
     $Id=$_POST["Id"];
     $senderName=$_POST["senderName"];
     $reciverName=$_POST["reciverName"];
     $assignment=$_POST["assignment"];
     $Date=$_POST["date"];
     $amount=$_POST["amount"];

    $sql="Update payments set senderName='$senderName',reciverName='$reciverName',assignment='$assignment',date='$Date',amount='$amount'
   where paymentId='".$Id."'";

     $result=mysqli_query($connection,$sql);

    if ($result==true) {

         header("Location: payments.php");
       }
    else {
        echo "error";
      }
  
    }

 ?>
