<?php
 include ("db.php");
    //this code insert the values into Php
  if (isset($_POST['Submit'])) {
      $clientName=$_POST["clientName"];
      $Assignment=$_POST["Assignment"];
      $Date=$_POST["Date"];
      $amount=$_POST["amount"];
      $dueDate=$_POST["dueDate"];
      $expertName=$_POST["expertName"];
   $sql="INSERT INTO `clients` (`clientId`, `clientName`, `assignment`, `date`, `amount`, `duedate`,`expertId`,`expertName` )
   VALUES (NULL, '{$clientName}', '{$Assignment}', '{$Date}', '{$amount}','{$dueDate}','0','{$expertName}') ";
   $result=mysqli_query($connection,$sql);
    if ($result==true) {
      header("Location: forms.php");
    }
    else {
      echo "error";
    }


  }


 ?>
